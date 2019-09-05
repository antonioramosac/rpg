<?php
namespace rpg;
/**
 * Class Person
 * 
 * Define player of the game
 * 
 * @var $straight integer 
 * @var $agility integer
 * @var $life integer
 * @var $weapon object defines person weapon
 * @var $start boolean flag used to flag who winner using dice
 * @var $winner boolean flag used to flag who is the Winner
 */

class person
{
    private $straight;
    private $agility;
    private $life;
    private $weapon;
    private $start;
    private $winner;

    function __construct($life, $agility, $straight, $weapon, $start = false, $winner = false)
    {
        $this->life     = $life;
        $this->agility  = $agility;
        $this->straight = $straight;
        $this->weapon   = $weapon;
        $this->start    = false;
        $this->winner   = $winner;
    }
    /**
     * Get the value of weapon
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set the value of weapon
     *
     * @return  self
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of life
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get the value of agility
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * Set the value of agility
     *
     * @return  self
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;

        return $this;
    }

    /**
     * Get the value of straight
     */
    public function getStraight()
    {
        return $this->straight;
    }

    /**
     * Set the value of straight
     *
     * @return  self
     */
    public function setStraight($straight)
    {
        $this->straight = $straight;

        return $this;
    }

    /**
     * Get the value of defense
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Getter for Start
     *
     * @return self
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Setter for Start
     * @var boolean value of start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }
    
    /**
     * Getter for Winner
     *
     * @return boolean
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Setter for Winner
     * @var boolean winner
     *
     * @return self
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
        return $this;
    }
}
