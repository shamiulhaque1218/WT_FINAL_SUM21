  
<?php include 'controllers/bloodbankcon.php'; ?>

<?php
 
    deleteBloodBank($_GET['id']);
    echo "BloodBank " . $_GET['id'] ." is Deleted!";
?>
<html>
    <body>  <a href="allBloodBank.php" >Check BloodBank</a>
</body>
</html>