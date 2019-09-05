<?php
namespace rpg;
/**
 * Class Rules
 * This class defines all rules od the game
 * 
 */

class Rules{
    /**
     * @var $human object person
     * @var $orc object person
     */
    public function initiative($dice_human, $human, $dice_orc,$orc, &$message){
        $orc_s =  intval($dice_orc) + intval($orc->getAgility());
        $human_s =  intval($dice_human) + intval($human->getAgility());
        echo "Orc = ".$orc_s."Human = ".$human_s.PHP_EOL;
        $message['message'] .= "Orc = ".$orc_s."Human = ".$human_s;
        if($human_s == $orc_s){
            $dice_human  =  dice::roll(20,'human initiative ');
            $dice_orc    =  dice::roll(20,'orc initiative ');
            self::initiative($dice_human, $human, $dice_orc, $orc, $message);
        }elseif($human_s > $orc_s){
            return true;
        }else{
            return false;
        }

    }

    /**
     * @var $human object person
     * @var $orc object person
     */
    public function attack($human, $orc, $message){
        $dice_human = dice::roll(20,'Human attack ');
        $dice_orc = dice::roll(20,'Orc attack ');
        $attacker = null;
        $defender = null;
        if($human->getStart()){
            $attacker = intval($dice_human) + intval($human->getAgility()) + intval($human->getWeapon()->getAttack());
            $defender = intval($dice_orc) + intval($orc->getAgility()) + intval($orc->getWeapon()->getDefense());
            echo "Attacker Human = ".$attacker.", Defensor Orc = ".$defender.PHP_EOL;
            $message['message'] .= "Attacker Human = ".$attacker.", Defensor Orc = ".$defender;
            if($attacker > $defender){
                $human->setWinner(true);
                return self::damage($human, $orc, $message);
            }
        }
        if($orc->getStart()){
            $attacker = intval($dice_orc) + intval($orc->getAgility()) + intval($orc->getWeapon()->getAttack());
            $defender = intval($dice_human) + intval($human->getAgility()) + intval($human->getWeapon()->getDefense());
            echo "Attacker Orc = ".$attacker.", Defensor Human = ".$defender.PHP_EOL;
            $message['message'] .= "Attacker Orc = ".$attacker.", Defensor Human = ".$defender;
            if($attacker > $defender){
                $orc->setWinner(true);
               return  self::damage($human, $orc, $message);
            }
        }
        echo "No Damage!".PHP_EOL;
    }

    /**
     * @var $human object person
     * @var $orc object person
     */
    public function damage($human, $orc, $message){
        unset($life);
        if($human->getWinner()){
            $dice = dice::roll($human->getWeapon()->getDamage(),'Human damage ');
            echo 'Orc damage = '.(intval($dice) - $human->getStraight()).PHP_EOL;
            $message['message'] .= 'Orc damage = '.(intval($dice) - $human->getStraight());
            $life = $orc->getLife() - (intval($dice) - $human->getStraight());
            $orc->setLife($life); 
        }
        if($orc->getWinner()){
            $dice = dice::roll($orc->getWeapon()->getDamage(),'Orc damage ');
            echo 'Human damage = '.(intval($dice) - $human->getStraight()).PHP_EOL;
            $message['message'] .= 'Human damage = '.(intval($dice) - $human->getStraight());
            $life = $human->getLife() - (intval($dice) - $orc->getStraight());
            $human->setLife($life);
        }
        echo "Human Life = ".$human->getLife().PHP_EOL;
        $message['message'] .= "Human Life = ".$human->getLife()."\n";
        echo "Orc Life = ".$orc->getLife().PHP_EOL;
        $message['message'] .= "Orc Life = ".$orc->getLife()."\n";
        return self::winner($human,$orc,$message);
    }

     /**
     * @var $human object person
     * @var $orc object person
     */
    public function winner($human, $orc, $message){
        if($human->getLife() <= 0){
            echo "Orc Wins!!";
            $message['message'] .= "Orc Wins!!";
            return json_encode($message);
            die;
        }elseif($orc->getLife() <= 0){
            echo "Human Wins!!";
            $message['message'] .= "Human Wins!!";
            return json_encode($message);
            die;
        };
        return false;
    }
}
