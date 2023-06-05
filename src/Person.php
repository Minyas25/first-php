<?php

namespace App;

class Person {
    public string $name;
    public int $age;

    public function __construct(string $paramName, int $paramAge) {
        $this->name = $paramName;
        $this->age = $paramAge;
    }

    public function happyBirthday() {
        $this->age++;
        echo "Happy Birthday {$this->name}";
    }

    
    public function greeting() {
        
        echo "Hello my name is {$this->name} I'm {$this->age} years old";
    }
}