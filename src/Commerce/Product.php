<?php

namespace App\Commerce;

class Product {
    private string $name;
    private float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price= $price;
    }

    public function getPrice() {
        return $this->price;
    }

    public function display() {
        echo "<p>{$this->name}: {$this->price}€</p>";
    }
}