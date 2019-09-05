<?php
namespace rpg;

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
/**
 * This is a RPG that runs auto.
 * @author Antonio Ramos <antonioramos.ac@gmail.com>
 * @since 05/09/2019
 * 
 * 
 */

include 'dice.php';
include "person.php";
include "rules.php";
include "weapon.php";

$sword = new weapon(2,1,6);
$clave = new weapon(1,0,8);
$human = new person(12,2,1,$sword);
$orc = new person(20,0,2,$clave);
$rules = new rules();
$winner     = false;
$message    = array("message"=>"");

while($winner == false){
    echo "START TURN".PHP_EOL;
    $message['message'] .= "START TURN\n";
    $roll_human = dice::roll(20,'Human ');
    $roll_orc   = dice::roll(20,'Orc ');
    $human->setStart(false);
    $orc->setStart(false);
    $human->setWinner(false);
    $orc->setWinner(false);
    $init_result = $rules->initiative($roll_human, $human, $roll_orc, $orc, $message);

    if($init_result){
        echo "Human Start".PHP_EOL;
        $human->setStart(true);
    }else{
        echo "Orc start".PHP_EOL;
        $orc->setStart(true);
    }
    $return = $rules->attack($human,$orc,$message);
    $message['message'] .= "END TURN\n";
    $d= json_decode($return);
    $winner = isset($d->message) ? true:false;
    var_dump($return); 
    echo "END TURN".PHP_EOL;
}