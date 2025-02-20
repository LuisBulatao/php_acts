<?php

//String
$name = 'Monkey D. Luffy';
$name2 = 'Roronoa Zoro';

var_dump($name);

echo '<br>';

echo getType($name);
echo '<br>';



//Integer
$age = 21;
var_dump($age);
echo '<br>';

//Float

$float = 1.5;
var_dump($float);
echo '<br>';

//Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br>';

$isPowerOn = false;
var_dump($isPowerOn);
echo '<br>';

//Array
$fruits = array('apple','banana','Mango');
var_dump($fruits);
echo '<br>';
echo getType($fruits);

//Objects
$person = new stdClass();
var_dump($person);
echo '<br>';
echo getType($person);


//Null
$alien = null;
var_dump($alien);
echo '<br>';

//Resource
$file = fopen('sample.txt','r');
var_dump($file);
echo '<br>';
echo getType($file);