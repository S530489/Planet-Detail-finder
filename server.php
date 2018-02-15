<?php
//Receive data
$data = $_REQUEST;
$name = $data['Planet_Name'];
//Data Array
$Planet_Details = array(
	array( 'Name' => 'Mercury' , 'Order_No' => '1', 'No_of_days' => '87'),
	array( 'Name' => 'Venus' , 'Order_No' => '2', 'No_of_days' => '224'),
	array( 'Name' => 'Earth' , 'Order_No' => '3', 'No_of_days' => '365'),
	array( 'Name' => 'Mars' , 'Order_No' => '4', 'No_of_days' => '686'),
	array( 'Name' => 'Jupiter' , 'Order_No' => '5', 'No_of_days' => '4332'),
	array( 'Name' => 'saturan' , 'Order_No' => '6', 'No_of_days' => '10755'),
	array( 'Name' => 'Uranus' , 'Order_No' => '7', 'No_of_days' => '30187'),
	array( 'Name' => 'Neptune' , 'Order_No' => '8', 'No_of_days' => '60990'),
	array( 'Name' => 'Pluto' , 'Order_No' => '9', 'No_of_days' => '80990')

);
$result = array();

for($count = 0; $count < count($Planet_Details); $count++)
{
		if(stripos($Planet_Details[$count]['Name'], $name) !== false)
		{
				
				array_push($result, $Planet_Details[$count] );
		}
			
	}
	
	
	//Return as JSON
	echo json_encode($result);


?>