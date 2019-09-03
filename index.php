<?php

// include 'orc.php';
// include 'human.php';
include "person.php";


function Initiative($dice,$human,$orc){
    $ini    = roll($dice);
    $human_s  = $ini+$human->ini;
    $orc_s    = $ini+$orc->ini;

    if($human_s == $orc_s){
        Initiative($dice, $human, $orc);
    }elseif($human_s > $orc_s){
        $human->start = true;
    }else{
        $orc->start = true;
    }
}

$human = new person();
$orc = new person();
$human->setLife(12);
$human->setAgility(2);
$human->getStraight(1);
$orc->setLife(20);
$orc->setAgility(0);
$orc->getStraight(2);


$dice_result = $human::Initiative(12, $human->getAgility(),$orc->getAgility());

var_dump($dice_result);
