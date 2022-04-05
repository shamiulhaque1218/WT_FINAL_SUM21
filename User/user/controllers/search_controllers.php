<?php
include 'models/db_config.php';
		$flag="";
		$rs="";

		$gender="";
	$err_gender="";
	$bloodgroup="";
	$err_bloodgroup="";
	$area="";
	$err_area="";
  
	
	$hasError=false;
	
		//name
	if(isset($_POST["search"])){
			 
		     if(empty($_POST["bloodgroup"])){
			
		}
		
		else{
			$bloodgroup = $_POST["bloodgroup"];
		}
			

		//gender

		if(empty($_POST["gender"])){
			
		}
		else{
			$gender = $_POST["gender"];
		}
		//area
			if(empty($_POST["area"])){
	
		}
		else{
			$area = $_POST["area"];
		}
	if(!$hasError){
		$rs=GetUser($bloodgroup,$area,$gender);
		
			
		}
			
	}


function GetUser($bloodgroup,$area,$gender){
	if($area!="" && $gender!="" && $bloodgroup!="")
	{
		$query="select * from user where bloodgroup='$bloodgroup' and city='$area' and gender='$gender' ";
	}
	elseif($area!="" && $bloodgroup!="")
	{
		$query="select * from user where bloodgroup='$bloodgroup' and city='$area' ";
	}
	elseif($gender!="" && $bloodgroup!="")
	{
		$query="select * from user where bloodgroup='$bloodgroup'  and gender='$gender' ";
	}
	elseif($gender!="" && $area!="")
	{
		$query="select * from user where city='$area'  and gender='$gender' ";
	}
	elseif( $bloodgroup!=""){
		$query="select * from user where bloodgroup='$bloodgroup' ";
	}
		elseif( $area!=""){
		$query="select * from user where city='$area' ";
	}
		elseif( $gender!=""){
		$query="select * from user where gender='$gender' ";
	}
	else{
		$query="select * from user   ";
		
	}
	
	
	$rs=get($query);
	if(count($rs)>0){
		

	return $rs;
		
	}
	else{
		$flag=1;
	}
	
		
    
}	
?>
