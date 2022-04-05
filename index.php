<?php include'Doner/db/header.php'
?>


<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>

    <?php
        session_start();
        $_SESSION['user']=' Blood Donation Organization Bangladesh';
        echo $_SESSION['user']
?>
    <form>
   <a href="homepage1.php">  <input type="button" name="Home" value="Home"> </a>      
   <a href="User_dashboard.php">  <input type="button" name="User" value="User"> </a>
   <a href="Doner_dashboard.php">  <input type="button" name="Doner" value="Doner"> </a>
   <a href="Hospital_dashboard.php">  <input type="button" name="Hospital" value="Hospital"> </a>
   <a href="BloodBank_dashboard.php">  <input type="button" name="BloodBank" value="BloodBank"> </a>
   <a href="logout.php">  <input type="button" name="Logout" value="Logout"> </a>
   </form> 
 

</body>
   
</html>
<?php include 'Doner/db/footer.php'
?>