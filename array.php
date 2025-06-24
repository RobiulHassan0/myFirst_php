<?php
// Array style syntax in PHP
// PHP supports two styles of array syntax: the traditional `array()` function and the short array syntax `[]`
// The short array syntax is preferred in modern PHP code for its simplicity and readability.
//// Example of traditional array syntax
$fruits = array('Apple', 'Banana', 'Cherry');
// Example of short array syntax
$vegetables = ['Carrot', 'Potato', 'Tomato'];
// Output the arrays
var_dump($fruits);
var_dump($vegetables);
// Output:

$names = array('robiul', 'hassan', 'robin', 'ibn', 'fulan');
// Output the array using var_dump
var_dump($names);
// Output: array(5) { [0]=> string(5) "robiul
echo $names[2]; // Output: robin
// Accessing elements in an array using their index

$names[3] = 'ibn'; // Assigning a new value to an existing index
echo $names[3]; // Output: ibn
// Adding a new element to the array
$names[] = 'newName'; // Automatically assigns the next index
echo $names[5]; // Output: newName
// Output the entire array after modification