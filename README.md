# first-php

## How To Use
1. Cloner le projet
2. Exécuter un `composer install`
3. Lancer le serveur avec `php -S localhost:8000 -t public`

## Exercices
### Premiers petits exos pour la syntaxe de base
1. Créer un fichier public/exo-syntaxe.php et ouvrir des balises php dedans
2. Créer une fonction repeatName qui va attendre en paramètre un name en string et un count en int
3. Faire que cette fonction fasse une boucle count fois et qu'à chaque tour elle affiche un paragraphe avec le name dedans

Bonus : Afficher chaque caractère du name dans un span (genre si je lui donne "Jean" ça affichera "<span>J</span><span>e</span><span>a</span><span>n</span>")


### Le compteur
1. Créer un fichier src/Counter.php et dedans créer une classe Counter avec son namespace
2. Rajouter une propriété count de type int à la classe et faire un constructeur qui initialise le count à 0 à l'instanciation
3. Créer un fichier public/exo-counter.php et faire le require du autoload dedans puis faire une instance de la classe counter et un var_dump de celle ci pour voir si ça marche
4. Rajouter dans la classe counter une méthode increment qui va incrémenter le count de 1 et une méthode decrement qui va faire l'inverse	
5. Appeler ces méthodes dans le exo-counter pour les tester
6. Créer une nouvelle méthode display qui va return une string avec dedans un message genre "la valeur du compteur est " suivi du count
7. Faire un echo de cette méthode dans le exo-counter, et le faire avec plusieurs instances pour voir
8. Modifier la méthode decrement pour faire qu'on ne puisse pas aller en dessous de 0

Bonus : Rajouter une propriété negative qui sera true par défaut et qu'on peut optionnelement passer à false à l'instanciation et qui determinera si le compteur peut aller en dessous de 0 ou pas