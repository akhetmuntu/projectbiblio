<?php
include "../includes/connexiondb.php";
include "../includes/define.php";
echo "la connexion est bonne";

?>

<!DOCTYPE html>
<html>
    <head>
<<<<<<< Updated upstream
        <title>USERS LIST</title>
=======
        <title>users-liste</title>
>>>>>>> Stashed changes
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!--        <link rel="stylesheet" href="../css/tabl.css"/>-->
    </head>
    <body>
<<<<<<< Updated upstream
        <h1>Bases-de données MySQL</h1> 
=======
        <h1>Users-liste</h1> 
>>>>>>> Stashed changes
		
        <a id="create" href="?page=formusers"><button>AJOUTER</button></a>       
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                 <table class="table table-striped custab"> 		
        <?php
    
    
            
            try{
                
                
                $sth = $dbco->prepare("SELECT * FROM user");
                $sth->execute();
                
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
                
				foreach ($result as $row => $user) {
					
					     echo "<tr>";
                    
                        echo "<td>". $user['nom']."</td>";
						echo "<td>". $user['prenom']."</td>";
						echo "<td>". $user['mail']."</td>";
						echo "<td>". $user['age']."</td>";
						echo "<td>". $user['pays']."</td>";
                        echo "<td>". $user['pass']."</td>";
					    echo "<td>". $user['sexe']."</td>";

						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formupdateuser&id=".$user['id_user']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                    
                    $deletepage=$route['deleteuser'];

						echo "<td> <a class='btn btn-danger btn-xs' href='$deletepage?id=".$user['id_user']."'><span class='glyphicon glyphicon-remove'></span> Delete</a>";

				
					echo "</tr>";
				
				}
				
			echo "</table>";
                /*print_r permet un affichage lisible des résultats,
                 *<pre> rend le tout un peu plus lisible*/
          
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
                  }
        ?>
		
		    </table>
        </div>
      </div>
    </body>
</html>