<?php

namespace App\Battle;

/**
 * Classe représentant une créature qu'on va pouvoir faire combattre avec d'autres créature (comme Pokémon, mais quand
 * on le décrit juste comme ça, ça semble assez violent)
 */
class Creature {
    private string $name;
    /**
     * Les points de vie de la créature, son état de santé
     */
    private int $hp;
    /**
     * Variable qui permet de savoir si la créature est en mode défense
     */
    private bool $isDefending;
    
    public function __construct(string $name) {
        $this->name = $name;
        $this->hp = 10;
        $this->isDefending = false;
    }
    /**
     * Méthode qui passe la créature en mode "défense" ce qui fait que la prochaine attaque lui retirera moins de
     * hp
     */
    public function defend() {
        
        $this->isDefending = true;
        echo "<p>{$this->name} is defending !</p>";
    }
    /**
     * Méthode permettant à la créature d'attaquer une autre créature en sachant qu'une créature avec 
     * 0 point de vie ne peut ni attaquer ni être attaquée.
     * On retire des points de vie à la créature cible (5 si elle en train de défendre, sinon 10) et on affiche un petit
     * message contextuel selon si l'attaque à pu être faite ou non et selon si l'attaque a mis la cible KO ou non
     */
    public function attack(Creature $target) {
        if($target->hp <= 0) {
            echo "<p>{$target->name} is not attackable</p>";
            return;
        }
        if($this->hp <= 0) {
            echo "<p>{$this->name} is too tired to attack</p>";
            return;
        }
        $target->hp -= 10;
        echo "<p>{$this->name} attacked {$target->name}</p>";
        if($target->isDefending){
            $target->hp +=  5;
            $target->isDefending = false;
        }

        if($target->hp <= 0) {
            echo "<p>{$target->name} is KO</p>";
        }
    }
}