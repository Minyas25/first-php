<?php

namespace App;


class Counter {
    private int $count;
    private bool $canBeNegative;

    public function __construct(int $paramCount = 0, bool $canBeNegative = true)
    {
        $this->count = $paramCount;
        $this->canBeNegative = $canBeNegative;
    }


    public function increment():void {
        $this->count++;
    }
    public function decrement():void {
        if($this->count > 0 || $this->canBeNegative) {
            $this->count--;
        }
    }

    public function display():string {
        return "The counter value is : {$this->count}";
    }
    
}