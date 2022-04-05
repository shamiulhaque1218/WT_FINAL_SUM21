<?php 
      require_once 'controllers/hospitalcon.php';
      $hospitals = getHospitals($id);
?>

<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="uedit.css">
    </head>
    <body >
    <a href="/Project_2021/Hospital_dashboard.php">  <input type="button" name="User" value="Home"> </a>
    <?php
        session_start();
     
        echo $_SESSION['user']
?>
        <fieldset>
		    <h3 align="middle">All Hospitals</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Name</th>
			   <th>Phone</th>
			   <th>Email</th>
			   <th>Password</th>
			   
				    
                <?php 
                
                foreach($hospitals as $h){
                    echo "<tr>";
                    
                        echo "<td>".$h["id"]."</td>";
                        echo "<td>".$h["name"]."</td>";
						echo "<td>".$h["phone"]."</td>";
						echo "<td>".$h["email"]."</td>";
						echo "<td>".$h["password"]."</td>";
						
						echo '<td><a href="editHospital.php?id='.$h["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteHospital.php?id='.$h["id"].'">Delete</a></td>';
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>

