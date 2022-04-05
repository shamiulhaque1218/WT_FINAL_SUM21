<?php
    require_once 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
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
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		
		else{
			$username =$_POST["username"];
	
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
		
		$rs = insertUser($id,$name,$username,$email,$password);
		if ($rs === true){
			header("Location: allUser.php");
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
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		
		else{
			$username =$_POST["username"];
	
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
			
		$rs = editUser($_POST["id"],$_POST["name"],$_POST["username"],$_POST["email"],$_POST["password"]);
		if($rs === true){
			header("Location: allUser.php");
		}
		$err_db = $rs;
		}
		
	}
	
	
   
	
	function insertUser($id,$name,$username,$email,$password){
		$query = "insert into user values ('$id','$name','$username','$email','$password')";
		return execute($query);
	}
	
	function getUsers($id) {
		$query = "select * from user";
		$rs = get($query);
		return $rs;
		
	}
	function getUser($id){
		$query = "select * from user where id = '$id'";
		$rs = get($query);
		return $rs[0];
		
	}
	
	function editUser($id,$name,$username,$email,$password){
		$query ="update user set id='$id',name='$name',username='$username',email='$email',password='$password' where id='$id'";
		return execute($query);
	}
	
	 function deleteUser($id){
		$query ="DELETE FROM user WHERE id='$id'";
		return execute($query);
	}    
	

	 ?>
	