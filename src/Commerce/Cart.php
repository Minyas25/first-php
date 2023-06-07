<?php

namespace App\Commerce;

class Cart {
    /**
     * @var Product[]
     */
    private array $products = [];

    /**
     * Méthode qui permet de rajouter un produit dans le panier
     */
    public function addToCart(Product $product) {
        $this->products[] = $product;
        // array_push($this->products, $product);
    }
    /**
     * Méthode qui parcours tous les produits contenus dans le panier et qui additionne
     * leur prix pour obtenir le prix total du panier
     */
    public function getTotal():float {
        $total = 0.0;
        foreach ($this->products as $item) {
            $total += $item->getPrice();
        }
        return $total;
    }
    /**
     * Méthode qui va afficher le contenu du panier et son total. Pour ce faire, on 
     * parcours tous les produits contenus dans le panier et pour chacun on exécute sa
     * méthode display (définit dans la classe Product) qui va faire un echo du
     * produit en question
     */
    public function display():void {
        foreach ($this->products as $item) {
            $item->display();
        }
        echo "<p>Total : {$this->getTotal()}€</p>";
    }

}