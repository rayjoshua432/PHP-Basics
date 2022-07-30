<?php
// Globals - global variables
$a = 2;
$b = 4;

function sumFunction()
{
    $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    echo $GLOBALS['c'];
}

sumFunction();
echo '<br>' . $c;

// Server - information about headers, paths, and script locations
print_r('<br>' . $_SERVER['SERVER_NAME']);

// Request - to collect data after submitting an HTML form
// POST - for post method only.
// GET - for GET method only.

include './form.html';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $name = $_REQUEST['name'];
    if (empty($name)) {
        echo '<br>Nothing to show.';
    } else {
        echo '<br>' . $name;
    }
}

// Set  default timezone
date_default_timezone_set('Asia/Manila');
$now = date('l, d/n/Y.' . '</br>' . 'H:i:sa');
print_r('<br>' . $now);

// Create a new date 
$d = mktime(11, 14, 54, 8, 12, 2014);
echo "<br><br>Created date is " . date("Y-m-d h:i:sa", $d);