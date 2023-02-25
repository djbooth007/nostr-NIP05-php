<?php
header('Content-Type: application/json');
header("X-Frame-Options: SAMEORIGIN");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Add usernames and hex keys here.
$user_list = array(
	"MrOstrich" => "hex_string",
	"twentyonemillion" => "hex_string2"
);

// Get requested name from URL parameter.
$requested_user = ""; 

if(isset($_GET['name'])){ 
	$requested_user = $_GET['name']; 
}

// Check requested name is in our list.
if(array_key_exists($requested_user, $user_list)){
	$arr['names'][$requested_user] = $user_list[$requested_user];
	print json_encode($arr,TRUE);
}
?>
