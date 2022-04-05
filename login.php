<?php
    require_once 'controllers/admincon.php';
?>
<?php 
      setcookie('id','18388623',time()+30);
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/log.css">
   <!--  <script>
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
            get("err_password").innerHTML ="";

        }
    </script>  -->
    </head>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()"  method="post">
            <fieldset>
                <h3 align="middle">Login</h3> 
            <table align="center">
                <tr>
                    <td>
                        <input type="text" name="id"id="id" value="<?php echo $id; ?>" placeholder="id">
                        <span id="err_id"><?php echo $err_id; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder="Password">
                    <span id="err_password"><?php echo $err_password; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="login" value="Login">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
