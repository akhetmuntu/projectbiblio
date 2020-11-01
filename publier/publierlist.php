<?php
include "../includes/connexiondb.php";
echo "la connexion est bonne";
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
        
        <h1>listes des empreints</h1> 
        
        <a id="create" href="formpublier.php"><button>AJOUTER</button></a>
        
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab"> 
                    
                    
                    <?php
                                       
                    try{

                        $sth = $dbco->prepare("SELECT * FROM publier");
                        $sth->execute();
                    
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				        foreach ($result as $row => $publier) {
                            
                            echo "<tr>";
                            
						    echo "<td>".$publier['id_editeur']."</td>";
						    echo "<td>".$publier['id_livre']."</td>";
                            echo "<td>".$publier['id_auteur']."</td>";
						    echo "<td>
                                <a class='btn btn-info btn-xs' href='formupdatepublier.php?  id=".$publier['id_publier']."'>
                                    <span class='glyphicon glyphicon-edit'></span>
                                    Edit
                                </a>";
						    echo "<td>
                                <a class='btn btn-danger btn-xs' href='deletepublier.php?
                                id=".$publier['id_publier']."'>
                                   <span class='glyphicon glyphicon-remove'></span>
                                   Delete
                                </a>";
                            
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
