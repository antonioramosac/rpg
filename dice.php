<?php

function roll ($sides = 6 ) {
    unset($dice);
    $dice =  mt_rand(1,$sides);
    echo "Dice = ".$dice.PHP_EOL;
    return $dice;
}
