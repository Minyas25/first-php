<?php

repeatName("test", 10);

function repeatName(string $name, int $count):void
{
    for ($i=0; $i < $count; $i++) { 
        echo "<p>{$name}</p>";
    }
}


//Bonus
function repeatNameWithBonus(string $name, int $count):void
{
    for ($i=0; $i < $count; $i++) { 
        echo '<p>';
        for ($j=0; $j < strlen($name); $j++) { 
            echo "<span>{$name[$j]}</span>";
        }
        echo '</p>';
    }
}