<?php
include "../includes/connexiondb.php";
include "../includes/define.php";


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/tabl.css"/>
    </head>
    
    
    <body>
        
        <h1>bibliotheque liste</h1> 
        
        <a id="create" href="?page=formcreatebiblio"><button>AJOUTER</button></a>
        
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                    
    <?php
                    
                    
                    try{
                        $sth = $dbco->prepare("SELECT * FROM bibliotheque");
                        $sth->execute();
                
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
				        foreach ($result as $row => $bibliotheque) {
                            
                            
                            echo "<tr>";
                            
						    echo "<td>".$bibliotheque['nom']."</td>";
						    echo "<td>".$bibliotheque['adresse']."</td>";
						    echo "<td>".$bibliotheque['telephone']."</td>";
						    echo "<td><a class='btn btn-info btn-xs' href='starter.php?page=formcreatebiblio&id=".$bibliotheque['id_bibliotheque']."'>
                            <span class='glyphicon glyphicon-edit'></span> Edit</a>";
                            
                            $deletepage=$route['deletebiblio'];
                            
						    echo "<td> <a class='btn btn-danger btn-xs' href='$deletepage?id=".$bibliotheque['id_bibliotheque']."'>
                            <span class='glyphicon glyphicon-remove'></span> Delete</a>";
    
                            
					        echo "</tr>";          	
				} 
			             echo "</table>";
                
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
