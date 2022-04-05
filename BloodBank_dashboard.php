<?php include'Doner/db/header.php'
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hospital.css">
    </head>
    <body>
     

    <form>
         
   <a href="BloodBank/addBloodBank.php">  <input type="button" name="AddBloodBank" value="AddBloodBank"> </a>
   <a href="BloodBank/allBloodBank.php">  <input type="button" name="AllBloodBank" value="AllBloodBank"> </a>
   <a href="BloodBank/allBloodBank.php">  <input type="button" name="EditBloodBank" value="EditBloodBank"> </a>
   <a href="BloodBank/allBloodBank.php">  <input type="button" name="deleteBloodBank" value="DeleteBloodBank"> </a>
   <a href="index.php">  <input type="button" name="Logout" value="Admin Index"> </a>
   
   
   
   
  </form>

</body>
   
</html>
<?php include 'Doner/db/footer.php'
?>
