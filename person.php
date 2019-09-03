<?php
// namespace person;
// include 'dice.php';
Class person{
    private $attack;
    private $defense;
    private $straight;
    private $agility;
    private $life;
    private $roll;
    private $weapon;

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
     * Get the value of roll
     */
    public function getRoll()
    {
        return $this->roll;
    }

    /**
     * Set the value of roll
     *
     * @return  self
     */
    public function setRoll($roll)
    {
        $this->roll = $roll;

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

    public function Initiative($dice_human,$agility_human,$dice_orc,$agility_orc){
        $orc_s =  intval($dice_orc) + intval($agility_orc);
        $human_s =  intval($dice_human) + intval($agility_human);
        echo "orc=".$orc_s."hum=".$human_s.PHP_EOL;
        if($human_s == $orc_s){
            $dice_human    = roll(20);
            $dice_orc    = roll(20);
            self::Initiative($dice_human,$agility_human,$dice_orc,$agility_orc);
        }elseif($human_s > $orc_s){
            return true;
        }else{
            return false;
        }
    }

    public function Attack($dice_human,$agility_human,$dice_orc,$agility_orc){
        $orc_s =  intval($dice_orc) + intval($agility_orc);
        $human_s =  intval($dice_human) + intval($agility_human);
        echo "orc=".$orc_s."hum=".$human_s.PHP_EOL;
        if($human_s == $orc_s){
            $dice_human    = roll(20);
            $dice_orc    = roll(20);
            self::Initiative($dice_human,$agility_human,$dice_orc,$agility_orc);
        }elseif($human_s > $orc_s){
            return true;
        }else{
            return false;
        }
    }
}
