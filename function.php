<?php

function sayHi(){
    echo "Hi, PHP!";
}
sayHi();

echo "\n"; //line break using \n

function sayHello($name, $age){
    echo "Hello, $name!", $age;
}
sayHello("Robiul Hassan", 25);
echo PHP_EOL; // line break using PHP_EOL
sayHello("ibn fulan", 30);

echo "\n";

function add($a, $b){
    // This function adds two numbers and prints the result
    // Parameters: $a and $b are the numbers to be added
    echo $a + $b;
}
add(2, 4);

echo "\n";

function addNumbers($a, $b){
    $add = $a + $b; // This function adds two numbers and prints the result
    echo "The sum of $a and $b is: " . $add . "\n";
}
addNumbers(5, 14);

echo "\n";

function multiply($a, $b){
    // This function multiplies two numbers and returns the result
    // Parameters: $a and $b are the numbers to be multiplied
    return $b * $a; // This function multiplies two numbers and returns the result;    
}

$result = multiply(10, 20) + 10; // Calling the multiply function with 10 and 20, then adding 10 to the result
// The result of the multiplication is stored in the variable $result
echo "The result of multiplication is: " . $result . "\n";

function subtract($a, $b){
    // This function subtracts two numbers and returns the result
    // Parameters: $a and $b are the numbers to be subtracted
    return $a - $b; // This function subtracts two numbers and returns the result
}
$finalResult = subtract(200, 140);
echo "The final result after subtraction is: " . $finalResult . "\n"; // Output: The final result after subtraction is: 60
