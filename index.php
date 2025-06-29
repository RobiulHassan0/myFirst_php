<?php
    // echo 'hello php';
    // This is a simple PHP script to demonstrate the use of echo and print statements.
    // The echo statement is used to output text to the screen.
    // Using echo
    echo "Hello, World!\n";
    echo "This is an echo statement in PHP.\n";

    // Introducing print()
    // The print statement is similar to echo, but it can also return a value.
    // Using print
    print "This is a print statement in PHP.\n";
    // Both echo and print can be used to output strings, variables, and other data types.

    // Example of using variables with echo
    $greeting = "Hello";
    $name = "Robiul Hassan";
    echo "$greeting, $name!\n"; // Output: hello, Robiul Hassan!

    // Example of using variables with print
    $age = 'twenty five';
    $Age = '25'; // Correcting the variable to a numeric value
    print "I am $age years old.\n"; // Output: I am 25 years old.
    // Note: In PHP, variables can be used within double quotes to interpolate their values.
    print "I am $Age years old. \n"; // Output: I am twenty five years old.


    // Difference between echo, print var_dump and json_encode
    // echo and print are used to output strings, while var_dump and json_encode are used for debugging and data representation.
    $Data = ['name' => 'Robiul Hassan', 'age' => 25, 'isStudent' => true];
    echo "Using echo: \n";

    echo $Data['name'] . "\n"; // Output: Using echo: Robiul Hassan
    print "Using print: ";

    $data = array('rice', 25, 'meat', true, false, null);
    var_dump($data); // var_dump used for debugging. cause it's provides output with detailed information about the variable, including its type, value and length.
    print_r($data); // print_r provides a clean human-readable output of the variable, excluding type and length.
    echo json_encode($data, '\n'); // json_encode converts the variable to a JSON string representation. output like JS console.log
    echo implode(',' , $data); // implode joins array elements into a string with a specified separator.
    echo "\n"; 

    
?>