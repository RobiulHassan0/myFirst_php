<?php
// Data Types in PHP
// PHP supports several data types, which can be categorized into scalar and compound types.
// Scalar types: String, Integer, Float (double), Boolean
// Compound types: Array, Object
// Special types: NULL, Resource

    $x = 10; // Integer
    $y = 20.5; // Float
    $z = "Hello"; // String
    $isTrue = true; // Boolean
    $arr = [1, 2, 3]; // Array
    $obj = new stdClass(); // Object
    $nullVar = null; // 

// Scalar Types: String
$name = 'Robiul Hassan';
var_dump($name);
// Output: string(15) "Robiul Hassan";

// Scalar Types: Integer
$age = 25;
var_dump($age);
// Output: int(25);


// Scalar Types: Float (Double)
$height = 5.9;
var_dump($height);
// Output: float(5.9);


// Scalar Types: Boolean
$isStudent = true;
var_dump($isStudent);
// Output: bool(true);

// Compound Types: Array
$fruits = array('Apple', 'Banana', 'Cherry');
var_dump($fruits);
// Output: array(3) { [0]=> string(5) "Apple";
// [1]=> string(6) "Banana"; [2]=> string(6) "Cherry"; }

// or using short array syntax
$vegetables = ['Carrot', 'Potato', 'Tomato'];
var_dump($vegetables);
// Output: array(3) { [0]=> string(6) "Carrot";
// [1]=> string(6) "Potato"; [2]=> string(6) "Tomato"; }
