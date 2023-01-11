<?php

// Declaring variable
/**
 * starts with $sign
 * starts with a letter or the underscore character
 * cannot start with a number
 * allows ( a-z, 0-9 and _ )
 * case-sensitive
 */

// Loosely Type
$a = 10;
echo $a;

$a = "aaa";
echo $a;

// Constant
define("myName", "Myat min Aung");
echo myName;

const newName = "Myat min Aung \n";
echo newName;

// Global scope
/**
 * declared outside a function
 * can only be accessed outside a function
 */

$global = "This is global \n";
echo $GLOBALS['global'];

function run() {
    // return $GLOBALS['global'];
    global $global;
    return $global;
};

echo run();

// Local scope
/**
 * declared within a function
 * can only be accessed within a function
 */

function runLocal() {
    $local = "This is local \n";
    return $local;
};

echo runLocal();

// Static scope
/**
 * a local variable NOT to be deleted
 */

function counter() {
    static $number = 1;
    echo $number;
    $number ++;
};

echo counter();
echo counter();
echo counter();