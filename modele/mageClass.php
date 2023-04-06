<?php
class Mage extends playableCharacter
{

    public function __construct(int $id, string $name, int $strength, int $agility, int $intelligence)
    {
        parent::__construct($id, $name, $strength, $agility, $intelligence);
    }

    /**
     * Récupère la puissance du magicien
     *
     * @return float puissance du magicien
     */
    public function getMight() : float {
        return ($this->getAgility()+$this->getIntelligence())/2;
    }
}