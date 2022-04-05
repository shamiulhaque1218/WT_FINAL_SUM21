<?php

 require_once 'controllers/comcon.php';
 
?>

<html>
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="editd.css">
    </head>

    <body>
    <a href="/Project_2021/homepage1.php">  <input type="button" name="home" value="Homepage"> </a>
        <h5><?php echo $err_db; ?></h5>
        <fieldset>
		        
        <form action="" onsubmit="return validate()" method="post">
		<table align="center">

		<tr> 
              <td>Id</td>
              <td>: <input type="text" name="id" id="id" value="<?php echo $id;?>" placeholder="id"></td>
              
			</tr>
            <tr>
              <td>Feedback</td>
              <td>: <input type="textarea "   name="feedback" id="feedback" value="<?php echo $feedback;?>" placeholder="feedback"></td>
              
			</tr>
			
			
			
		    <tr>	
             <td><input type="Submit" name="Add" value="Submit feedback"></td>
		    </tr>
		</table>
        </form>
        </fieldset>
    

<?php 
      require_once 'controllers/comcon.php';
      $doners = getDoners($id);
?>


    
        <fieldset>
		    <h3 align="middle">Feedback of our website</h3>            
            <p align="middle">
			<table >
               <th>Id</th>
			   <th>Feedback</th>
			
			   
				    
                <?php 
                
                foreach($doners as $d){
                    echo "<tr>";
                    
                        echo "<td>".$d["id"]."</td>";
                        echo "<td>".$d["feedback"]."</td>";
						
                        echo '<td><a href="delcomments.php?id='.$d["id"].'">Delete</a></td>';
                       
                    echo "</tr>";
                    
                }
                ?>          
            </table>
			</p>
        </fieldset>
    </body>
</html>


