<?php

namespace App\Battle;

class Creature {
    private string $name;
    private int $hp;
    private bool $isDefending;

    public function __construct(string $name) {
        $this->name = $name;
        $this->hp = 10;
        $this->isDefending = false;
    }

    public function defend() {
        
        $this->isDefending = true;
        echo "<p>{$this->name} is defending !</p>";
    }

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