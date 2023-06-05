<?php

use App\Person;

require '../vendor/autoload.php';


$instance = new Person("Jean", 35);
$instance2 = new Person("Paul", 37);
$instance3 = new Person("Ringo", 85);

$instance2->happyBirthday();

var_dump($instance2->age);