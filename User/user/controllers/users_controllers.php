<?php
include 'models/db_config.php';
$user="";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$re_type_password="";
	$err_re_type_password="";
	$dob="";
	$err_dob="";
	$gender="";
	$err_gender="";
	$profession="";
	$err_profession="";
	$bloodgroup="";
	$err_bloodgroup="";
    $phone="";
    $err_phone="";
    $gmail="";
	$err_gmail="";
    $address="";
    $err_address="";
	$city="";
	$err_city="";
	$err_db="";
	$hasError=false;



		//name
	if(isset($_POST["Register"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 6){
			$hasError = true;
			$err_name="Name must contain >6 character";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Name Required";
		}
		
		else{
			$username = $_POST["username"];
		}
			//password
		if(empty($_POST["password"])){
			$hasError = true;
			$err_password="password Required";
		}
		
		else{
			$password = $_POST["password"];
		}
				//re-type-password
		if(empty($_POST["re_type_password"])){
			$hasError = true;
			$err_re_type_password="re-type-password Required";
		}
		
		else{
			$re_type_password= $_POST["re_type_password"];
		}
		
			//date
		if(empty($_POST["dob"])){
			$hasError = true;
			$err_dob="date Required";
		}
		
		else{
			$dob = $_POST["dob"];
		}
	
	
		//profession
		if(empty($_POST["profession"])){
			$hasError = true;
			$err_profession="profession Required";
		}
		
		else{
			$profession = $_POST["profession"];
		}
		//phone
		if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
		}
	
		else{
					$phone=$_POST["phone"];
		      
			}
			//gmail
		if(empty($_POST["gmail"])){
			$hasError = true;
			$err_gmail="gmail Required";
		}
		
		else{
			$gmail = $_POST["gmail"];
		}
		//bloodgroup
		if(empty($_POST["bloodgroup"])){
			$hasError = true;
			$err_bloodgroup="bloodgroup Required";
		}
		
		else{
			$bloodgroup = $_POST["bloodgroup"];
		}
			

			//address

		if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}

		//gender

		if(empty($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
	//city
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="city Required";
		}
		else{
			$city = $_POST["city"];
		}
	
	

		if(!$hasError){
		$rs = insertUser($name,$username,$password,$dob,$gender,$profession,$bloodgroup,$gmail,$city,$address,$phone);
		if ($rs === true)
		{
			header("Location: login.php");
		}
		$err_db="Username already exist";
		
		}
		
	}


 if (isset($_POST["btn_login"])){
	if(empty($_POST["username"])){
		$hasError= true;
		$err_username="username required";
	}
	else{
		$username=$_POST["username"];
	}
	
	if(empty($_POST["password"])){
		$hasError= true;
		$err_password="password required";
	}
	else{
		$pass=$_POST["password"];
	}
	if(!$hasError){
		if(authenticateUser($username,$pass)){
			$_SESSION['username']=$username;
			header("Location: dashboard.php");
		}
		$err_db="username password invalid";
	}
	
}



if (isset($_POST["update"])){
	
	
		
	 if(empty($_POST["gmail"])){
			$hasError = true;
			$err_gmail="gmail Required";
		}
		
		else{
			$gmail = $_POST["gmail"];
		}
		 if(empty($_POST["profession"])){
			$hasError = true;
			$err_profession="profession Required";
		}
		
		else{
			$profession = $_POST["profession"];
		}
		//phone
	 if(empty($_POST["phone"])){
		$hasError = true;
		$err_phone="phone required";
	}
	
	else{
					$phone=$_POST["phone"];
		      
			}
			//address

    if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}
		
		if(!$hasError){
		$rs = UpdateUser($profession,$gmail,$address,$phone);
		if ($rs === true)
		{
			header("Location: dashboard.php");
		}
		$err_db=$rs;
		
		}
	}
	$us=$pass="";
		$err_us=$err_pass="";
	if (isset($_POST["reset"])){
		
		
		$hasError=""; 
		 if(empty($_POST["username"])){
			$hasError = true;
			$err_us="username Required";
		}
		else{
			$us = $_POST["username"];
		}
		if(empty($_POST["pass"])){
			$hasError = true;
			$err_pass="password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError){
			Updatepass($us ,$pass);
			header("Location: login.php");
		}
		
	}
function Updatepass($username,$password){
	$query ="update user set password='$password' where username='$username'";
	return execute($query);
}

function GetUser($username){
	$query="select * from user where username='$username'";
	$rs=get($query);
	if(count($rs)>0){
	return $rs[0];
		
	}
	
		
    
}


function authenticateUser($username,$password){
	$query="select * from user where username='$username'and password='$password'";
	$rs=get($query);
	if(count($rs)>0){
		return true;
	}
	return false;
		
    
}
function insertUser($name,$username,$password,$dob,$gender,$profession,$bloodgroup,$gmail,$city,$address,$mobile){
$query = "insert into user  values (Null,'$name','$username','$password','$dob','$gender','$profession','$bloodgroup','$gmail','$city','$address','$mobile')";
return execute($query);
}
function UpdateUser($profession,$gmail,$address,$phone){
	$user=$_SESSION['username'];
	$query ="update user set profession='$profession', gmail='$gmail',address='$address',mobile='$phone' where username='$user'";
	return execute($query);
}

?>