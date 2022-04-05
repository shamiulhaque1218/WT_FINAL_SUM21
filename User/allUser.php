<?php 
      require_once 'controllers/usercon.php';
      $users = getUsers($id);
?>


<html>
    <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="uedit.css">
    </head>
    <body >
    <a href="/Project_2021/User_dashboard.php">  <input type="button" name="User" value="Home"> </a>
    <?php
        session_start();
        $_SESSION['user']=' Blood Donation Organization Bangladesh';
        echo $_SESSION['user']
?>
        <fieldset>
		    <h3 align="middle">All Users</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Name</th>
			   <th>Username</th>
			   <th>Email</th>
			   <th>Password</th>
			   
				    
                <?php 
                
                foreach($users as $u){
                    echo "<tr>";
                    
                        echo "<td>".$u["id"]."</td>";
                        echo "<td>".$u["name"]."</td>";
						echo "<td>".$u["username"]."</td>";
						echo "<td>".$u["email"]."</td>";
						echo "<td>".$u["password"]."</td>";
						
						echo '<td><a href="editUser.php?id='.$u["id"].'">Edit</a></td>';
                        echo '<td><a href="deleteUser.php?id='.$u["id"].'">Delete</a></td>';
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>

