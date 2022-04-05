<?php

 require_once 'controllers/bloodbankcon.php';
 
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="uedit.css">
    <!--  javaScript validation -->
       <script>
        var hasError=false;
        function get(id) {
            return document.getElementById(id);
        }
        function validate() {
            refresh () ;
            if(get("id").value == "") {
                hasError = true;
                get("err_id").innerHTML = "**Id Required";

            }
            else if(get("id").value.length <=3 ) {
                hasError = true;
                get("err_id").innerHTML = "**Id must 4 digit ";

            }
            if(get("name").value == "") {
                hasError = true;
                get("err_name").innerHTML = "**Name Required";

            }
            else if(get("name").value.length <=8 ) {
                hasError = true;
                get("err_name").innerHTML = "**Name must 8 char ";

            }
            if(get("phone").value == "") {
                hasError = true;
                get("err_phone").innerHTML = "**phone  Required";

            }
            else if(get("phone").value.length <=10 ) {
                hasError = true;
                get("err_phone").innerHTML = "**Phone must 11 Digit ";

            }
            if(get("location").value == "") {
                hasError = true;
                get("err_location").innerHTML = "**Location Required";

            }
            
            if(get("password").value == "") {
                hasError = true;
                get("err_password").innerHTML = "**Password Required";

            }
            else if(get("password").value.length <=8 ) {
                hasError = true;
                get("err_password").innerHTML = "**Password must 8 digit ";

            }


            return !hasError;
        }
        function refresh (){
            hasError=false;
            get("err_id").innerHTML ="";
            get("err_name").innerHTML ="";
            get("err_phone").innerHTML ="";
            get("err_location").innerHTML ="";
            get("err_password").innerHTML ="";

        }
    </script>   
    

    </head>
    <body>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
		<h3 align="middle">Add BloodBank</h3>        
        <form action="" onsubmit="return validate()" method="post">
		<table align="center">

		<tr> 
              <td>Id</td>
              <td>: <input type="text" name="id" id="id" value="<?php echo $id;?>" placeholder="id"></td>
              <td><span id="err_id"><?php echo $err_id; ?></span></td>
			</tr>
            <tr>
              <td>Name</td>
              <td>: <input type="text" name="name" id="name" value="<?php echo $name;?>" placeholder="name"></td>
              <td><span id="err_name"><?php echo $err_name; ?></span></td>
			</tr>
			<tr>
              <td>Phone</td>
              <td>: <input type="text" name="phone" id="phone" value="<?php echo $phone;?>" placeholder="phone"></td>
              <td><span id="err_phone"><?php echo $err_phone; ?></span></td>
			</tr>
			<tr>
              <td>Location</td>
              <td>: <input type="text" name="location" id="location" value="<?php echo $location;?>" placeholder="location"></td>
              <td><span id="err_location"><?php echo $err_location; ?></span></td>
			</tr>
			<tr>
              <td>Password</td>
              <td>: <input type="text" name="password" id="password" value="<?php echo $password;?>" placeholder="password"></td>
              <td><span id="err_password"><?php echo $err_password; ?></span></td>
			</tr>
			
			
		    <tr>	
             <td><input type="Submit" name="Add" value="Add"></td>
		    </tr>
		</table>
        </form>
        </fieldset>
    </body>
</html>
