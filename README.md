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

### Creature battle
1. Créer un nouveau dossier Battle dans le src
2. Dans ce dossier créer une classe Creature qui aura comme propriétés un name en string et des hp en int et faire un constructeur permettant de lui donner un nom et qui initialise ses hp à 100 (mettre les 2 props en private, histoire de)	
3. Toujours dans Creature, créer une méthode attack qui va attendre en paramètre une autre Creature $target et dans cette méthode faire en sorte de baisser les hp du target de 10 par exemple et d'écrire une petite phrase genre "creature1 attacks creature2"
4. Rajouter des conditions dans la méthode attack pour faire que :
    * une Creature qui a 0 hp ou moins ne puisse pas attaquer et que ça mette une ptite phrase "creature1 is too tired to attack"
    * Si le target a 0 hp ou moins, ça n'attaque pas
    * Si après l'attaque les hp du target sont passé à 0 ou moins, alors on affiche une phrase pour l'indiquer
5. Rajouter une propriété isDefending initialisée à false dans la Creature, et créer une méthode defend() qui passe sa valeur à true
6. Rajouter une nouvelle condition dans attack qui fait que si le target isDefending, alors il ne perdra que 5 hp et ça remettra sa propriété isDefending à false