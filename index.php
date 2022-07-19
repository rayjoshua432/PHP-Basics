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
//       Functions - camelCase e.g firstFunction
//       Classes - PascalCase e.g FirstClass
//       Constants - Uppercase with underscore e.g EXPIRATION_DATE

// Constants
   define('MSG', 'You are welcome here!');
   echo MSG . '<br>';
   define('FRUITS', ['apple', 'orange', 'mango']);
   echo FRUITS[1] . '<br>';

// Operators
   echo 1+11222 . '<br>';   
   echo 2-1 . '<br>';   
   echo 6/2 . '<br>';
   echo 6%2 . '<br>'; // Modulus
   echo 6**2 . '<br>';


// Methods
   var_dump($name); // spits out all of the information inside a variable
   echo '<br>';
   var_dump(12.31);
   echo '<br>' . gettype($name) . '<br>'; // returns the variable's data type

// Functions
   function sumOfTwoNums($a, $b) {
      return 'The sum of two numbers is ' . $a+$b . '.';
   }
   function displayMsg($user) {
      return "Hello there, $user.";
   }

   echo sumOfTwoNums(5,2);
   echo '<br>';
   echo displayMsg('Anya');

// Arrays
   $arr1 = ['1', '2', '3', '4', '5'];
   $arr2 = array('a' => 'one', 'two', 'three', 'four', 'five'); // declare an index name
   echo '<br>' . $arr1[0];
   echo '<br>' . $arr2[0] . '<br>';
   print_r($arr1);
   echo '<br>';
   var_dump($arr1);
   echo '<br>';

// Conditions
   // == - value
   // ==== - value and type
   $a = 5;

   if ($a == 0) {
      echo "It is equal to zero.";
   }else {
      echo "It is not equal to zero.";
   }
   // Ternary condition
   echo '<br>';
   echo $a === 5 ? 'It is equal to zero.' : 'It is not equal to zero.';
   // Switch
   // break - jump out of a switch and loops
   // continue - breaks one iteration of the loop
   echo '<br>';
   switch($a) {
      case 1:
         echo "It is equal to one";
         break;
      case 2:
         echo "It is equal to two";
         break;
      default:
         echo "No no no.";
         break;
   }
//Loops
   echo '<br>';
   $num = 10;
   // While loop
   while ($num >= 0) {
      echo 'Number: ' . $num . '<br>';
      $num--;
   }
   // Do while loop
   echo '<br>';
   do {
      echo 'Num: ' . $num . '<br>';
      $num--;
   } while ($num >= 0);
   // Foor loop
   echo '<br>';
   for($i = 0; $i <= 10; $i++) {
      echo 'N: ' . $i . '<br>';
   }
   // For each loop - Arrays
   echo '<br>';
   $myname = ['My', 'name', 'is', 'Ray Joshua', 'Last Name' => 'Balingkit'];
   foreach($myname as $index => $val) {
      echo $val . ' ';
   }
   echo '<br>';
   foreach($myname as $index => $val) {
      echo $index . ' ';
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Forms</title>
</head>

<body>
   <form action="/Basics/index.php" method="post">
      <br>
      <input type="text" name="username" placeholder="Enter your username" required>
      <input type="text" name="password" placeholder="Enter your password" required>
      <input type="submit" name="add" value="Add">
      <?php
      // Forms
         if (isset($_POST['add'])) {
            $username = $_POST['username'];
            $pass = $_POST['password'];
            echo '<br>Username: ' . $username . '<br>';
            echo 'Password: ' . $pass . '<br>';
         } else {
            echo '<br>Nothing to add.';
         }
      ?>
   </form>
</body>

</html>