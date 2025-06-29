<?php
    // PHP variable must start with $, then a letter or underscore, and can contain letters, numbers, and underscores — but no spaces or symbols.
    
    // Right variable Naming
    $first_Name = 'Ibn'; //snake_case
    $lastName = 'Fulan'; //CamelCase
    $ThirdName = 'Abu'; //PascalCase
    $Name4 = 'Fulan';
    $_Greeting = 'Hello';
    $GREETING_LAST = 'World'; //Constant

    // get Output with String
    echo "My Name is: $first_Name $lastName. And my father's name: $ThirdName $Name4 \n";
    
    // get Output with Concatenation
    echo $_Greeting. ' ' .$GREETING_LAST;
    // \n for line break

    echo PHP_EOL; //Line Break
    echo $Name4;

 
    // Wrong Variable Naming ❌
    // $123name = start with number 
    // $first name	= space in variable name
    // $ firstName	= space in variable name
    // $user-name = contain hyphen (kebab-case)
    // $@email = contain special character
    // $name! = contain special character
    // name = variable name without $ sign
    // $while = PHP reserved word
    // $if = PHP reserved word
    // $for = PHP reserved word 

    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo "\nThe sum of $x and $y is: $z"; // Output: The sum of 10 and 20 is: 30

?>