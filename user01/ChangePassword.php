<?php
include 'controllers/users_controllers.php';

?>
<div class="center_login">
<h1 class="text text-center">Reset Password</h1>
<h5 class= "text-danger"><?php echo $err_db;?></h5>
<form action="" method="post" class="form-horizontal form-material">



<div class="form-group">
<h4 class="text">Username</h4>
<input type="text" name="username" value="" class="form-control">
<span class="text-danger"><?php echo $err_us;?></span>
</div>

<div class="form-group">
<h4 class="text">New Password</h4>
<input type="password" name="pass" value="" class="form-control">
<span class="text-danger"><?php echo $err_pass;?></span>
</div>

<div class="form-group text-center">
<input type="submit" name="reset" class="btn btn-danger" value="reset" class="form-control">
</div>
