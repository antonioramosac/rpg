<?php
namespace rpg;

/**
 * Class Dice
 * @var $sides integer range of dice
 * @var $text string text 
 */

class Dice{
    public function roll ($sides = 6, $text) {
        unset($dice);
        $dice =  mt_rand(1,$sides);
        echo $text." Dice = ".$dice.PHP_EOL;
        return $dice;
    }
}
