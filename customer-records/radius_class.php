<?php

class RadiusClass {
	
    private $origin_latitude;
    private $origin_longitude;
    private $customer_data_array;
    private $output_customer_list;
    private $radius;
    
	public function __construct($origin_latitude, $origin_longitude, $customer_data_array, $radius)
	{
	    $this->origin_latitude = $origin_latitude;
	    $this->origin_longitude = $origin_longitude;
	    $this->customer_data_array = $customer_data_array;
	    $this->radius = $radius;
	    $this->output_customer_list = array();
	}
	
	public function getCustomerList(){
        foreach($this->customer_data_array as $key=>$customer_data){
            
            $customer_data = (array) $customer_data;
            $customer_location = (array) $customer_data["location"];
            
            $distance = $this->calculateDistance($this->origin_latitude,$this->origin_longitude,$customer_location["lat"],$customer_location["lon"]);
            if($distance<=$this->radius){
                $this->output_customer_list[] = array("Customer Name"=> $customer_data["name"], "Distance"=>$distance);
            }
        }
	    return $this->output_customer_list;        
	}
	
	private function calculateDistance($lat1, $lon1, $lat2, $lon2){
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        return $miles;
	}
}