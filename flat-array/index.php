<?php

// Including array flatten class
include_once "array_flatten.php";


// Source data
$array = array(2,8,4,7,array(5,8),array(3),8,7,array(2,9,8), array(2,8,7,4,1, array(10,20)),6);


// Calling array flatten class to perform the control structure operations and getting the final array
$obj = new ArrayFlatten();
$obj->setArray($array);
$obj->flatArray();
$array = $obj->getArray();


// Printing output
echo "<pre>";
print_r($array);
echo "</pre>";
