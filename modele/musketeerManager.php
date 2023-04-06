<?php
class musketeerManager
{
    /**
     * Récupère un mousquetaire par son id
     *
     * @param int $id Id du mousquetaire
     * @param int $int_min Intelligence minimale (optionnel)
     * @return void
     */
    public function getMusketeerById(int $id, int $int_min) : void {
        global $data;
        if ($id < 1 || $id > count($data)) {
            $this->showAllMusketeers($data, $int_min);
        } else {
            foreach ($data as $musketeer) {
                if ($musketeer->getId() == $id) {
                    $this->showMusketeer($musketeer, $int_min);
                    break;
                }
            }
        }
    }

    /**
     * Affiche un mousquetaire
     *
     * @param Musketeer $musketeer Mousquetaire à afficher
     * @param int $int_min Intelligence minimale
     * @return void
     */
    private function showMusketeer(Musketeer $musketeer, int $int_min) : void {
        echo "<script>console.log('int min: " . $int_min . ", intelligence: ".$musketeer->getIntelligence()."');</script>";
        if ((int) $musketeer->getIntelligence() >= $int_min) {
            $musketeer->print();
        }
    }
    
    /**
     * affiche tous les mousquetaires
     *
     * @param array $musketeers Lsite des mousquetaires à afficher
     * @param int $int_min Intelligence minimale
     * @return void
     */
    private function showAllMusketeers(array $musketeers, int $int_min) : void {
        foreach ($musketeers as $musketeer) {
            $this->showMusketeer($musketeer, $int_min);
            echo "<br>";
        }
    }
}