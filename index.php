<?php

// Variables
   $name = 'Ray Joshua';
   $age = 21;
   $gender = 'Male';

// Print/Display 
   echo $name;
   echo '<br>Name: ' . $name . '<br>';
   echo "Age: $age <br>";

// Data Types
   $last_name = 'Balingkit'; // String
   $birth_year = 2000; // Integer
   $weight = 58.4; // Float
   $married = false; // Boolean
   $fav_color = array('yellow', 'black', 'gray'); // Array
   
//  Naming Conventions
//       Variables - Underscore e.g $first_name
//       Methods - camelCase e.g firstFunction
//       Classes - PascalCase e.g FirstClass
//       Constants - Uppercase with underscore e.g EXPIRATION_DATE

// Constants
   define('MSG', 'You are welcome here!');
   echo MSG . '<br>';
   define('FRUITS', ['apple', 'orange', 'mango']);
   echo FRUITS[1] . '<br>';

// Operators


// Functions
   var_dump($name); // spits out all of the information inside a variable
   var_dump(12.31);
   echo gettype($name) . '<br>'; // returns the variable's data type
?>