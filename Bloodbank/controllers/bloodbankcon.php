<?php
    require_once 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$location="";
	$err_location="";
	$password="";
	$err_password="";
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["Add"])){
	
		if(empty($_POST["id"])){
			$hasError = true;
			$err_id="Id Required";
		}
		else if(strlen($_POST["id"]) <= 3){
			$hasError = true;
			$err_id="Id must contain >3 character";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 5){
			$hasError = true;
			$err_name="Name must contain >5 character";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone number Required";
		}
		
		else{
			$phone =$_POST["phone"];
	
		}
		if(empty($_POST["location"])){
			$hasError = true;
			$err_location="Location Required";
		}
		
		else{
			$location =$_POST["location"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		
		
	
		if(!$hasError){
		
		$rs = insertBloodBank($id,$name,$phone,$location,$password);
		if ($rs === true){
			header("Location: allBloodBank.php");
		}
		$err_db = $rs;
	
	}
}
		else if(isset($_POST["edit"])){
	     //name
		 if(empty($_POST["id"])){
			$hasError = true;
			$err_id="Id Required";
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		
		else{
			$name =$_POST["name"];
	
		}
		if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Number Required";
		}
		
		else{
			$phone =$_POST["phone"];
	
		}
		if(empty($_POST["location"])){
			$hasError = true;
			$err_location="Location Required";
		}
		
		else{
			$location =$_POST["location"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		if(!$hasError){
			
		$rs = editBloodBank($_POST["id"],$_POST["name"],$_POST["phone"],$_POST["location"],$_POST["password"]);
		if($rs === true){
			header("Location: allBloodBank.php");
		}
		$err_db = $rs;
		}
		
	}
	
	
   
	
	function insertBloodBank($id,$name,$phone,$location,$password){
		$query = "insert into bloodbank values ('$id','$name','$phone','$location','$password')";
		return execute($query);
	}
	
	function getBloodBanks($id) {
		$query = "select * from bloodbank ";
		$rs = get($query);
		return $rs;
		
	}
	function getBloodBank($id){
		$query = "select * from bloodbank where id = '$id'";
		$rs = get($query);
		return $rs[0];
		
	}
	
	function editBloodBank($id,$name,$phone,$location,$password){
		$query ="update bloodbank set id='$id',name='$name',phone='$phone',location='$location',password='$password' where id='$id'";
		return execute($query);
	}
	
	 function deleteBloodBank($id){
		$query ="DELETE FROM bloodbank WHERE id='$id'";
		return execute($query);
	}    
	

	 ?>
	