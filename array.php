<?php
// Array style syntax in PHP
// PHP supports two styles of array syntax: the traditional `array()` function and the short array syntax `[]`
// The short array syntax is preferred in modern PHP code for its simplicity and readability.

// Example of traditional array syntax
$foods = array('rice', 'fish', 'meat', 'vegetables');
echo "$foods[0], \n"; 
// echo json_encode($foods); // Output: ["rice","fish","meat","vegetables"]

// Example of short array syntax
$drinks = ['water', '7up', 'coke', 'juice'];
echo "$drinks[3],\n"; // Output: juice
print "$drinks[2], \n"; // Output: coke


print_r($drinks[3]); // Output: juice
echo "\n";
print_r($drinks[3]); // Output: juice

$drinks[1] = 'pepsi';
echo print_r($drinks, true). "\n"; 
// or using print_r with true to return the output as a string
print_r($drinks);
echo "\n";

// Associative Array
$person = [
    'name' => 'Robiul Hassan',
    'age' => 27,
    'isStudent' => true,
    'height' => 5.5,
    'skills' => ['PHP', "Javascript", 'HTML', "CSS"],
];
print_r($person);
echo print_r($person['height'], true) . "\n";

// Accessing associative array elements
echo "\nHeight: " . $person['height'] . "\n"; // Output: Height: 5.5

// Accessing elements using keys
echo $person['age'] . "\n"; // Output: Array

// Accessing nested array elements
echo $person["skills"] [0] . "\n";
print_r($person["skills"]);
echo "\n";

echo "skills: " . implode(",", $person["skills"]) . "\n"; // Output: skills: PHP,Javascript,HTML,CSS


$person['age'] = 28; // Updating age
echo "Updated Age :" . $person['age'] . "\n";
print_r($person);

$person[2] = 26;
print_r($person); 

echo "\n";
// Adding a new key-value pair
$person['city']= 'Dhaka';


// Printing the updated associative array
$user = [
    'name' => 'Robiul Hassan',
    'education' => 'Takmil',
    'age' => 27,
    'isProgrammer' => true,
];
print_r($user);
echo "\n";
print_r($user['age']);
echo "\n";
print_r($user['isProgrammer']);
echo "\n";
$user['education'] = 'Takmil Fil Hadith';
print_r($user['education']);
echo "\n";
print_r($user);
// Adding a new key-value pair
$user['skill'] = ['PHP'];
print_r($user);
var_dump($user); // Output: array(1) { [0]=> string(3) "PHP" }
echo "\n";
echo json_encode($user);
echo "\n";
$user['skill'] []= 'Javascript'; // Adding a new skill
print_r($user['skill']); // Output: Array ( [0] => PHP [1] => Javascript )
echo "\n";
print_r($user);
$user['skill'][]= 'HTML';
print_r($user['skill']); // Output: Array ( [0] => PHP [1] => Javascript [2] => HTML )
echo "\n";
print_r($user);
print_r($user['skill']); // Output: Array ( [0] => PHP [1] => Javascript [2] => HTML )