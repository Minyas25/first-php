<?php

repeatName("test", 10);

function repeatName(string $name, int $count):void
{
    for ($i=0; $i < $count; $i++) { 
        echo "<p>{$name}</p>";
    }
}