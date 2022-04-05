<?php

$db_server="localhost";
$db_username="root";
$db_pass="";
$db_name="my2p";

function execute($query){
	global $db_server,$db_username,$db_pass,$db_name;
	$conn = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
	if($conn){
		if(mysqli_query($conn,$query)){
			
			return true;
		}
		else{
			
			return mysqli_error($conn);
		}
	}
}
function get($query){
	global $db_server,$db_username,$db_pass,$db_name;
	$conn = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
	$data = array();
	if($conn){
		$mysqli_result=mysqli_query($conn,$query);
		while ($row = mysqli_fetch_assoc($mysqli_result)){
			$data[]=$row;
		}
		
	}
	return $data;
}

?>