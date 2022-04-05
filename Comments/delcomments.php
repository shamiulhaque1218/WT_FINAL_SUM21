  
<?php include 'controllers/comcon.php'; ?>

<?php
 
    deleteDoner($_GET['id']);
    echo "your feedback is Deleted";
?>
<html>
    <body>  <a href="comments.php" >Check </a>
</body>
</html>