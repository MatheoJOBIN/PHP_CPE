<?php

abstract class playableCharacter
{
    protected $id;
    protected $name;
    protected $strength;
    protected $agility;
    protected $intelligence;

    /**
     * Constructeur de la classe Abonne
     * @param int $id
     * @param string $name
     * @param int $strength
     * @param int $agility
     * @param int $intelligence
     * @param string $tribe
     */
    public function __construct(int $id, string $name, int $strength, int $agility, int $intelligence)
    {
        $this->id = $id;
        $this->name = $name;
        $this->strength = $strength;
        $this->agility = $agility;
        $this->intelligence = $intelligence;
    }

    public function print() : void {
        echo $this->name . " : " . $this->strength . " " . $this->agility . " " . $this->intelligence . "\n";
    }

    #region Getters

    /**
     * Retourne l'id du mousquetaire
     *
     * @return int id du mousquetaire
     */
    public function getId() : int {
        return (int) $this->id;
    }

    /**
     * Retourne le nom du mousquetaire
     *
     * @return string nom du mousquetaire
     */
    public function getName() : string {
        return (string) $this->name;
    }

    /**
     * Retourne la force du mousquetaire
     *
     * @return int force du mousquetaire
     */
    public function getStrength() : int {
        return (int) $this->strength;
    }

    /**
     * Retourne l'agilité du mousquetaire
     *
     * @return int agilité du mousquetaire
     */
    public function getAgility() : int {
        return (int) $this->agility;
    }

    /**
     * Retourne l'intelligence du mousquetaire
     *
     * @return int intelligence du mousquetaire
     */
    public function getIntelligence() : int {
        return (int) $this->intelligence;
    }

    #endregion


    #region Capacities

    /**
     * Retourne si le mousquetaire a réussi son attaque au corps à corps
     *
     * @return boolean true si réussi, false sinon
     */
    public function closeHit() : bool {
        return true;
    }

    /**
     * Retourne si le mousquetaire a réussi son attaque à distance
     *
     * @return boolean true si réussi, false sinon
     */
    public function distanceHit() : bool {
        return true;
    }

    #endregion
}