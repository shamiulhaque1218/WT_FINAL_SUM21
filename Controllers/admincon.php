<?php

    include 'db_config.php';
    
    $id="";
    $err_id="";
    $password="";
    $err_password="";

    $err_db="";
    $hasError=false;

    
    if (isset($_POST["login"])){
        if(empty($_COOKIE["id"])){
            $hasError=true;
            $err_id="Id Required";
        }
        else{
            $id=$_COOKIE["id"];
        }

        if(empty($_POST["password"])){
            $hasError=true;
            $err_password="Password Required";
        }
        else{
            $password=$_POST["password"];
        }

        if(!$hasError){
			if(authenticateUser($id,$password)){
			header("Location: homepage1.php");
		}
		    $err_db="ID password invalid";
		}
		}
		
	function authenticateUser($id,$password){
		$query="select * from admin where id='$id' and password='$password'";
		$rs=get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
  
	
?>



