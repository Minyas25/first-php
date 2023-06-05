<?php


//Pour créer une variable on utilise un $ ensuite camelCase comme en JS.
//Le typage est dynamique pour les variables sans possibilité de typer celle ci (contrairement à TS)
$maVariable = "Bonjour";

echo $maVariable;

var_dump($maVariable);

//Les conditions en PHP sont les mêmes qu'en JS
if($maVariable == 'Bonjour'){
    //pour la concaténation soit on utilise les . et les simples quotes
    echo '<p>'.$maVariable.'</p>';
    //soit on utilise les guillemets (à noter que cette manière ne fonctionne pas lorsqu'on manipule des objets)
    echo "<p>oui bonjour $maVariable </p>";
}
//Les boucles classiques c'est pareil qu'en JS (les while existent également et marchent pareil)
for ($i=0; $i < 10; $i++) { 
    echo '<p>Bloup</p>';
}
//Ici, erreur à l'exécution car je ne lui donne pas le bon type de donnée
// first("bonjour");

/**
 * Les déclarations de fonctions sont également similaires, on peut typer ou non nos paramètres et le retour
 * de la fonction. Seule différence, le typage se fait avant le nom du paramètre (ici j'ai typé le retour de la 
 * fonction en void pour dire que la fonction ne doit PAS renvoyer de donnée)
 */
function first(int $param):void {

}