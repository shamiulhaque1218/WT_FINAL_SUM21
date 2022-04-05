  
<?php include 'controllers/usercon.php'; ?>

<?php
 
    deleteUser($_GET['id']);
    echo "User " . $_GET['id'] ." is Deleted!";
?>
<html>
    <body>  <a href="allUser.php" >Check User</a>
</body>
</html>