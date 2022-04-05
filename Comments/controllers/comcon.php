<?php
    require_once 'models/db_config.php';
	$id="";
	
	$feedback="";
	
	
	
	
	$hasError=false;
	$err_db="";
	if(isset($_POST["Add"])){
	
		if(empty($_POST["id"])){
			$hasError = true;
			
		}
		
		else{
			$id =$_POST["id"];
	
		}
		if(empty($_POST["feedback"])){
			$hasError = true;
			
		}
		
		
		else{
			$feedback =$_POST["feedback"];
	
		}
		
		
		if(!$hasError){
		
		$rs = insertDoner($id,$feedback);
		if ($rs === true){
			header("Location: comments.php");
		}
		$err_db = $rs;
	
	}
}
		
	
   
	
	function insertDoner($id,$feedback){
		$query = "insert into comments values ('$id','$feedback')";
		return execute($query);
	}
	
	function getDoners($id) {
		$query = "select * from comments";
		$rs = get($query);
		return $rs;
		
	}
	function getDoner($id){
		$query = "select * from comments where id = '$id'";
		$rs = get($query);
		return $rs[0];
		
	}
	
	
	
	 function deleteDoner($id){
		$query ="DELETE FROM comments WHERE id='$id'";
		return execute($query);
	}    
	

	 ?>
	