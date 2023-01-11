<?php

/** Variable */
$a=10;
$myName = "Myatmin Aung";
$age = 21;
$weight = 130.4;

/** Datatypes */
print($myName);

var_dump($age);
var_dump($myName);
var_dump($weight);


print("My name is $myName");
print('My name is $myName');

$students = ["mg mg", "kyaw kyaw", "zaw zaw"]; // index array
$students[3] = "aung aung";
$students[4] = "kaung kaung";
$students[0] = "ma ma";

print_r($students);
print($students[0]);
print($students[1]);
print($students[2]);

$mySelf = [
    "name" => "Myatmin Aung",
    "age" => 21,
    "weight" => 130,
    "skills" => ["html", "css", "js"],
]; // associated array


print_r($students);
print_r(($mySelf));

print($mySelf["name"]);
print($mySelf["age"]);
print($mySelf["weight"]);
print_r($mySelf["skills"]);
print($mySelf["skills"][1]);

$x = null;

print($x);

$true = true;
$false = false;

print($false);
var_dump($true);
var_dump($false);

// String
$one = 1;
$onePlusOne = " $one + $one ";
echo $onePlusOne;