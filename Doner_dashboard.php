<?php include'Doner/db/header.php'
?>
<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adedit.css">
    </head>
    <body>
     

    <form>
         
   <a href="Doner/addDoner.php">  <input type="button" name="Adddoner" value="AddDoner"> </a>
   <a href="Doner/allDoner.php">  <input type="button" name="Alldoner" value="AllDoner"> </a>
   <a href="Doner/allDoner.php">  <input type="button" name="Editdoner" value="EditDoner"> </a>
   <a href="Doner/allDoner.php">  <input type="button" name="delete" value="DeleteDoner"> </a>
   <a href="/Project_2021/index.php">  <input type="button" name="Logout" value="Admin Index"> </a>
   
   
   
   
  </form>

</body>
   
</html>
<?php include 'Doner/db/footer.php'
?>