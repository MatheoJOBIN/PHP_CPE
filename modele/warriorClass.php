<?php
class Warrior extends playableCharacter
{
    private $tribe;

    public function __construct(int $id, string $name, int $strength, int $agility, int $intelligence, string $tribe)
    {
        parent::__construct($id, $name, $strength, $agility, $intelligence);
        $this->tribe = $tribe;
    }

    /**
     * Augmente la force du guerrier
     *
     * @param integer $strength force du guerrier
     * @return void
     */
    public function setStrength(int $strength) : void {
        if($strength > $this->getStrength()) {
            $this->strength = $strength;
        }
    }
}