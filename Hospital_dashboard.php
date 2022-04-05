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
         
   <a href="Hospital/addHospital.php">  <input type="button" name="Addhospital" value="AddHospital"> </a>
   <a href="Hospital/allHospital.php">  <input type="button" name="Allhospital" value="AllHospital"> </a>
   <a href="Hospital/allHospital.php">  <input type="button" name="Edithospital" value="EditHospital"> </a>
   <a href="Hospital/allHospital.php">  <input type="button" name="delete" value="DeleteHospital"> </a>
   <a href="index.php">  <input type="button" name="Logout" value="Admin Index"> </a>
   
   
   
   
  </form>

</body>
   
</html>
<?php include 'Doner/db/footer.php'
?>
