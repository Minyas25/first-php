<?php

namespace App;

/**
 * Classe représentant un compteur qu'on va pouvoir incrémenter ou décrémenter
 */
class Counter {
    /**
     * La valeur actuelle du compteur
     */
    private int $count;
    /**
     * Est-ce que le compteur peut avoir une valeur négative ou non (par défaut, oui)
     */
    private bool $canBeNegative;

    public function __construct(int $paramCount = 0, bool $canBeNegative = true)
    {
        $this->count = $paramCount;
        $this->canBeNegative = $canBeNegative;
    }

    /**
     * Méthode qui incrémente la valeur du compteur de 1
     */
    public function increment():void {
        $this->count++;
    }
    /**
     * Méthode qui décrémente le compteur jusqu'à zéro s'il ne peut pas être négatif ou en dessous s'il peut l'être
     */
    public function decrement():void {
        if($this->count > 0 || $this->canBeNegative) {
            $this->count--;
        }
    }
    /**
     * Méthode qui renvoie une string avec la valeur actuelle du compteur
     */
    public function display():string {
        return "The counter value is : {$this->count}";
    }
    
}