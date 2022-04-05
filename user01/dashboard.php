<?php
session_start();
$user="";
if (isset($_SESSION['username'])){

include 'controllers/users_controllers.php';
$user=GetUser($_SESSION['username']);
	}
	else
	{
		header("Location: login.php");
	}

?>



<div class="center_login">
<h1 class="text text-center">Welcome To Our System</h1>
<h5 class= "text-danger"></h5>
 <div class="form-group">
<h4 class="text">Name&nbsp:&nbsp<?php echo $user["name"]?></h4>

</div>
 <div class="form-group">
<h4 class="text">Username&nbsp:&nbsp<?php echo $user["username"]?></h4>
</div>

 <div class="form-group">
<h4 class="text">Dob&nbsp:&nbsp<?php echo $user["dob"]?></h4>
</div>

 <div class="form-group">
<h4 class="text">Gender&nbsp:&nbsp<?php echo $user["gender"]?></h4>
</div>

 <div class="form-group">
<h4 class="text">Profeesion&nbsp:&nbsp<?php echo $user["profession"]?></h4>
</div>
 <div class="form-group">
<h4 class="text">Bloodgroup&nbsp:&nbsp<?php echo $user["bloodgroup"]?></h4>
</div>
 <div class="form-group">
<h4 class="text">Gmail&nbsp:&nbsp<?php echo $user["gmail"]?></h4>
</div>
 <div class="form-group">
<h4 class="text">City&nbsp:&nbsp<?php echo $user["city"]?></h4>
</div>
 <div class="form-group">
<h4 class="text">Address&nbsp:&nbsp<?php echo $user["address"]?></h4>
</div>
 <div class="form-group">
<h4 class="text">Phone&nbsp:&nbsp<?php echo $user["mobile"]?></h4>
</div>
<div class="form-group text-center">
<a href="Search_Donar.php">Search Donor</a><br>
<a href="Update_Info.php">Update Information</a><br>
<a href="LogOut.php">LogOut</a>
</div>