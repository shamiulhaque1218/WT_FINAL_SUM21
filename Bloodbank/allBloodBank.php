<?php 
      require_once 'controllers/bloodbankcon.php';
      $bloodbanks = getBloodBanks($id);
?>

<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="uedit.css">
    </head>
    <body >
    <a href="/Project_2021/BloodBank_dashboard.php">  <input type="button" name="BloodBank" value="Home"> </a>
    <?php
        session_start();
     
        echo $_SESSION['user']
?>
        <fieldset>
		    <h3 align="middle">AllBloodBanks</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Name</th>
			   <th>Phone</th>
			   <th>Location</th>
			   <th>Password</th>
			   
				    
                <?php 
                
                foreach($bloodbanks as $b){
                    echo "<tr>";
                    
                        echo "<td>".$b["id"]."</td>";
                        echo "<td>".$b["name"]."</td>";
						echo "<td>".$b["phone"]."</td>";
						echo "<td>".$b["location"]."</td>";
						echo "<td>".$b["password"]."</td>";
						
						echo '<td><a href="editBloodBank.php?id='.$b["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteBloodBank.php?id='.$b["id"].'">Delete</a></td>';
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>

