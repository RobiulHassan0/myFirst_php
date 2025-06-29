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