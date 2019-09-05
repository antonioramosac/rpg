<?php
namespace rpg;
/**
 * Class Weapon
 * 
 * Defines weapon
 * 
 * @var $attack integer Power weapon
 * @var $defense integer Defense weapon
 * @var $damage integer Damage dice values 1d6, 1d8
 */

class Weapon{
    private $attack;
    private $defense;
    private $damage;

    function __construct($attack, $defense, $damage)
    {
        $this->attack = $attack;
        $this->defense = $defense;
        $this->damage = $damage;        
    }

    /**
     * Get the value of attack
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;

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
     * Set the value of defense
     *
     * @return  self
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of damage
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * Set the value of damage
     *
     * @return  self
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;

        return $this;
    }
}
