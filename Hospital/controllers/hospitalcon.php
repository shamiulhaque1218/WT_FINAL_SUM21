<?php
    require_once 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$phone="";
	$err_phone="";
	$email="";
	$err_email="";
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
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		else if(strpos($_POST["email"],"@") == false){
			$hasError = true;
      $err_email="Email must contain @ character";
	  }
	else if(strpos($_POST["email"],".") == false){
			$hasError = true;
      $err_email="Email must contain . character";
	 }
		
		else{
			$email =$_POST["email"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		
		
	
		if(!$hasError){
		
		$rs = insertHospital($id,$name,$phone,$email,$password);
		if ($rs === true){
			header("Location: allHospital.php");
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
		if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		
		else{
			$email =$_POST["email"];
	
		}
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		
		else{
			$password =$_POST["password"];
	
		}
		if(!$hasError){
			
		$rs = editHospital($_POST["id"],$_POST["name"],$_POST["phone"],$_POST["email"],$_POST["password"]);
		if($rs === true){
			header("Location: allHospital.php");
		}
		$err_db = $rs;
		}
		
	}
	
	
   
	
	function insertHospital($id,$name,$phone,$email,$password){
		$query = "insert into hospital values ('$id','$name','$phone','$email','$password')";
		return execute($query);
	}
	
	function getHospitals($id) {
		$query = "select * from hospital ";
		$rs = get($query);
		return $rs;
		
	}
	function getHospital($id){
		$query = "select * from hospital where id = '$id'";
		$rs = get($query);
		return $rs[0];
		
	}
	
	function editHospital($id,$name,$phone,$email,$password){
		$query ="update hospital set id='$id',name='$name',phone='$phone',email='$email',password='$password' where id='$id'";
		return execute($query);
	}
	
	 function deleteHospital($id){
		$query ="DELETE FROM hospital WHERE id='$id'";
		return execute($query);
	}    
	

	 ?>
	