<?php
class charactersManager extends Manager 
{

    /**
     * Crée la base de données et les tables
     *
     * @param string $racine chemin vers le dossier racine du site
     * @return void
     */
    public function installScript($racine) : void {
        $script = file_get_contents("$racine/ressources/create_base.sql");
        $this->getPDO()->exec($script);
    }

    /**
     * Renvoie la liste des personnages
     *
     * @return array tableau contenant les personnages
     */
    public function getCharacters() : array {
        $q = $this->getPDO()->prepare('SELECT * FROM characters');
        $q->execute();
        $r1 = $q->fetchAll(PDO::FETCH_ASSOC);
        
        $characters = array();
        foreach($r1 as $character)
        {
            if($character['class'] == 'warrior') {
                $characters[$character['id']] = new Warrior($character['id'], $character['name'], $character['strength'], $character['agility'], $character['intelligence'], $character['tribe']);
            } else {
                $characters[$character['id']] = new Mage($character['id'], $character['name'], $character['strength'], $character['agility'], $character['intelligence']);
            }

        }
        return $characters;
    }

    /**
     * Récupère un personnage par son nom
     *
     * @param string $name Nom du personnage
     * @return Warrior|Mage Personnage
     */
    public function getCharacterByName(string $name) : Warrior|Mage {
        $q = $this->getPDO()->prepare('SELECT * FROM characters as c WHERE c.name = :name');
        $q->bindValue(':name', $name, PDO::PARAM_STR);
        $q->execute();
        //$q->debugDumpParams();
        $r = $q->fetch(PDO::FETCH_ASSOC);
        if($r['class'] == 'warrior') {
            $character = new Warrior($r['id'], $r['name'], $r['strength'], $r['agility'], $r['intelligence'], $r['tribe']);
        } else {
            $character = new Mage($r['id'], $r['name'], $r['strength'], $r['agility'], $r['intelligence']);
        }
        return $character;
    }
    
    /**
     * Change la classe d'un personnage
     *
     * @param string $name Nom du personnage
     * @param string $newClass Nouvelle classe
     * @return void
     */
    public function changeCharacterClass($name, $newClass) : void {
        try{
            $r = $this->getPDO()->prepare("UPDATE characters as c SET c.class = :newClass WHERE c.name = :name");
            $r->bindValue(':newClass', $newClass, PDO::PARAM_STR);
            $r->bindValue(':name', $name, PDO::PARAM_STR);
            $r->execute();
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Insère un personnage
     *
     * @param array $values Tableau contenant les valeurs à insérer
     * @return void
     */
    public function insertCharacter(array $values) : void {
        try{
            $r = $this->getPDO()->prepare("INSERT INTO characters (name, strength, agility, intelligence, tribe, class) VALUES (:name,:str,:agi,:int,:tribe,:class);");
            $r->bindValue(':name', $values['name'], PDO::PARAM_STR);
            $r->bindValue(':str', $values['str'], PDO::PARAM_INT);
            $r->bindValue(':agi', $values['agi'], PDO::PARAM_INT);
            $r->bindValue(':int', $values['int'], PDO::PARAM_INT);
            $r->bindValue(':tribe', $values['tribe'], PDO::PARAM_STR);
            $r->bindValue(':class', $values['class'], PDO::PARAM_STR);
            $r->execute();
        }catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Inverse la classe des personnage
     *
     * @return void
     */
    public function invertClass() : void {
        try {
            $r = $this->getPDO()->prepare("UPDATE characters as c SET c.class = CASE WHEN c.class = 'warrior' THEN 'magician' ELSE 'warrior' END");
            $r->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}