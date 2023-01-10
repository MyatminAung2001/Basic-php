<?php

$a = "";

echo $a+$a;

echo "I am still working.";

// Warning Error
/**
 * does not stop the script from running
 * warn there is a problem, one that is likely casuse bigger issues in the future
 * Common causes =>
 * Calling an external file that does not exit in the dir
 * Wrong parameters in a function
 */

// Notice Error
/**
 * minor errors, smiliar to warning errors
 * also do not stop code execution
 * ususally occur if the script needs access to an undefined variable
 */

// Parse Error (Syntax)
/**
 * caused by misused or missing symbols in a syntax
 * compilar catches the error and terminates the script
 * Caused by =>
 * Unclosed brackets or quotes
 * Missing or extra semicolons or parentheses
 * Misspellings
 */

// Fata Error
/**
 * crash program and are classified as critical errors
 * undefined function or class in the script is the main reason
 * Three type of fatal errors =>
 * Startup fatal error (when system can't run the code at installation)
 * Compile time fatal error (when tries to use nonexistent data)
 * Runtime fatal error (happens while the program is running, causing the code to stop working completely)
 */