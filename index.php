<?php
$name = "Myatmin Aung";

/**
 * is a statement which is used to display the output.
 * can be used with or without parentheses
 * does not return any value
 * can pass multiple strings separated by comma (,) in echo
 * is faster than print statement
 */
echo $name;

/**
 * displays only value as output.
 * will return a value that is in string format.
 * data returned by this function is human-readable.
 * used with database and web applications.
 * will not display the number of elements in a variable.
 * will not display the length of the variable.
 */
print_r($name);

/**
 * displays values along with data types as output.
 * does not have any return type.
 * data returned by this function is difficult to understand.
 * can be used for debugging purposes.
 * will display the number of elements in a varibale.
 * will display the length of the variable
 */
var_dump($name);