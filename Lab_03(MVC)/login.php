<?php
    require_once 'controllers/UserController.php';
    
?>
<html>
	 <head>     </head>
	    <h5><?php echo $err_db;?></h5>
	    <body>
		<form  method="post" action="">
		<fieldset>
			<table>
			       <td>  <center> <b> Log In </td>
			 	 <tr>
					  <td>Name</td>
					  <td>: <input type="text" name="name" value="<?php echo $name; ?>" > </td>
					  <td><span> <?php echo $err_name;?> </span></td>
				 </tr>
				 <tr>
					  <td>User Name</td>
					  <td>: <input type="text" name="uname" value="<?php echo $uname; ?>" > </td>
					  <td><span> <?php echo $err_uname;?> </span></td>
				 </tr>
				
				 <tr>
					  <td>Password</td>
					  <td>: <input type="password" name="pass"  >  </td>
					  <td><span> <?php echo $err_pass;?> </span></td>
				 </tr>
				
				 <tr>
					  <td colspan="2" align="right"> <input type="submit" name="btn_login" value="Log In"> </td>
					
				 </tr>
				 </table>
			
		</fieldset>
		</form>
	</body>
</html>