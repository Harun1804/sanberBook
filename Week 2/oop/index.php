<?php

require 'Animal.php';
require 'Ape.php';
require 'Frog.php';

$sheep = new Animal('shaun');
echo $sheep->name."<br>";
echo $sheep->legs."<br>";
echo $sheep->cold_blooded."<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"