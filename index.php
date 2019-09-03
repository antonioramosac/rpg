<?php
include 'dice.php';
// include 'orc.php';
// include 'human.php';
include "person.php";


// function Initiative($dice,$human,$orc){
//     $ini    = roll($dice);
//     $human_s  = $ini+$human->ini;
//     $orc_s    = $ini+$orc->ini;

//     if($human_s == $orc_s){
//         Initiative($dice, $human, $orc);
//     }elseif($human_s > $orc_s){
//         $human->start = true;
//     }else{
//         $orc->start = true;
//     }
// }

$human = new person();
$orc = new person();
$human->setLife(12);
$human->setAgility(2);
$human->setStraight(1);
$orc->setLife(20);
$orc->setAgility(0);
$orc->setStraight(2);

$roll_human    = roll(20);
$roll_orc    = roll(20);

$init_result = $human::Initiative($roll_human, $human->getAgility(), $roll_orc, $orc->getAgility());


echo $init_result.PHP_EOL;
// echo $orc_result.PHP_EOL;
