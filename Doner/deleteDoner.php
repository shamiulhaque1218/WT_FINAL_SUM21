  
<?php include 'controllers/donercon.php'; ?>

<?php
 
    deleteDoner($_GET['id']);
    echo "Doner " . $_GET['id'] ." is Deleted!";
?>
<html>
    <body>  <a href="allDoner.php" >Check Doner</a>
</body>
</html>