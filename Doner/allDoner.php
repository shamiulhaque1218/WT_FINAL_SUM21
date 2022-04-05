<?php 
      require_once 'controllers/donercon.php';
      $doners = getDoners($id);
?>

<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="editd.css">
    </head>
    <body >
    
    
    <?php
        session_start();
        
        echo $_SESSION['user']
?>
        <fieldset>
		    <h3 align="middle">All Doners</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Name</th>
			   <th>BloodGroup</th>
			   <th>Phone</th>
			   <th>Password</th>
			   
				    
                <?php 
                
                foreach($doners as $d){
                    echo "<tr>";
                    
                        echo "<td>".$d["id"]."</td>";
                        echo "<td>".$d["name"]."</td>";
						echo "<td>".$d["bloodgroup"]."</td>";
						echo "<td>".$d["phone"]."</td>";
						echo "<td>".$d["password"]."</td>";
						
						echo '<td><a href="editDoner.php?id='.$d["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteDoner.php?id='.$d["id"].'">Delete</a></td>';
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>

