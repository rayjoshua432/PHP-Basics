<?php

$arr1 = array('one', 'two', 'three', 'four');
$arr2 = array('one' => 'wan', 'two' => 'tu', 'three' => 'tre', 'four' => 'por');

// Changing the keys in the array to uppercase
$uppercase = array_change_key_case($arr2, CASE_UPPER);
// Changing the keys in the array to lowercase
$lowercase = array_change_key_case($uppercase, CASE_LOWER);

print_r($uppercase);
print_r($lowercase);

// Split an array into chunks
$chunk = array_chunk($arr1, 2);
print_r($chunk);

// Return the single column in the input array
$users = array( // Multidimensional array of users
   array(
      'id' => 1,
      'username' => 'rayjoshua',
      'password' => '1234'
   ),
   array(
      'id' => 2,
      'username' => 'anyaforger',
      'password' => '12345'
   ),
   array(
      'id' => 3,
      'username' => 'kitagawa',
      'password' => '123456'
   ),
);
print_r(array_column($users, 'username', 'id'));

// Combine an array using from one keys and values
$arr3 = array(1, 2, 3, 4);
$combine = array_combine($arr1, $arr3);
print_r($combine);

// Count all the values in the array
$arr4 = array(1, 1, 2, 2, 2, 3, 4, 4, 5, 5, 5, 5, 5);
$num_values = array_count_values($arr4);
print_r($num_values);

// Compare the values of two arrays and return the difference
$arr5 = array(0, 0, 0, 0, 1, 2);
$arr6 = array(0, 0, 0 , 0, 2);
print_r(array_diff($arr5, $arr6));