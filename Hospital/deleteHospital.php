  
<?php include 'controllers/hospitalcon.php'; ?>

<?php
 
    deleteHospital($_GET['id']);
    echo "Hospital " . $_GET['id'] ." is Deleted!";
?>
<html>
    <body>  <a href="allHospital.php" >Check Hospital</a>
</body>
</html>