<?php

// Loading radius class for performing the necessary operations
include_once "radius_class.php";


// Setting up the source data
$origin_lat = "52.951458";
$origin_lon = "-1.142332";
$customer_data_json = file_get_contents("customer_data.json");
$radius = 40; // In miles


// Calling radius class to calculate the distance and getting the final customer list
$customer_data_array = (array) json_decode($customer_data_json);
$obj = new RadiusClass($origin_lat, $origin_lon, $customer_data_array, $radius);
$CustomerList = $obj->getCustomerList();


// Printing output
echo "<pre>";
print_r($CustomerList);
echo "</pre>";
