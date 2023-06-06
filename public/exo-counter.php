<?php

use App\Counter;

require '../vendor/autoload.php';

$counter = new Counter();
$counterBird = new Counter();


$counterBird->increment();


$counter->decrement();
$counter->decrement();
$counter->decrement();


// var_dump($counter);
// var_dump($counterBird);

var_dump($counter->display());

