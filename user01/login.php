
<?php
session_start();
include 'controllers/users_controllers.php';

?>
<div class="center_login">
<h1 class="text text-center">User login</h1>
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">


<div class="form-group">
<h4 class="text">Username</h4>
<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
<span class="text-danger"><?php echo $err_username;?></span>
</div>
       <div class="form-group">
<h4 class="text">Password</h4>
<input type="password" name="password" value="<?php echo $password;?>" class="form-control">
<span class="text-danger"><?php echo $err_password;?></span>
</div>

<div class="form-group text-center">
<input type="submit" name="btn_login" class="btn btn-danger" value="login" class="form-control">
</div>
<div class="form-group text-center">
<a href="ChangePassword.php">forget Password</a><br>
<a href="RegistrationForm.php">Not Registered Yet? Get Registered</a>
</div>
</form>
</div>