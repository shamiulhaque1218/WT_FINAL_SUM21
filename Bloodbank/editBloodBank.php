<?php 
	include 'controllers/bloodbankcon.php';
	$id = $_GET["id"];
	$c = getBloodBank($id);
	
?>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    </head>
</html>

<div class="center my-5" >
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Phone:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="phone" value="<?php echo $c["phone"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Location:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="location" value="<?php echo $c["location"];?>" class="form-control">
		</div>
		<div class="form-group">
			<h4 class="text">Password:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="password" value="<?php echo $c["password"];?>" class="form-control">
		</div>
		
		<div class="form-group text-center">
			
			<input type="Submit" name="edit" class="btn btn-success" value="update ok" class="form-control">
		</div>
	</form>
</div>

