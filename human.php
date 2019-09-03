<?php

include_once 'person.php';

class human{
        // $weapon = new Weapon();
        public function createHuman($life = 12, $agility = 2, $straight =1){
            $human = new person();
            $human->setLife($life);
            $human->setAgility($agility);
            $human->setStraight($straight);
            return $human;
        }
}