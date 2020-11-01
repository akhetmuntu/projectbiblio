<?php
include "../includes/connexiondb.php";
include "../includes/define.php";

?>



<!DOCTYPE html>
<html>
    <head>
        <title>client</title>
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/tabl.css"/>
    </head>
    
    
    <body>
        
        <h1>listes des clients</h1> 
        
        <a id="create" href="?page=formclient"><button>AJOUTER</button></a>
        
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab">
                    
                    
<?php
                      
                    
                    try{

                        $sth = $dbco->prepare("SELECT * FROM client");
                        $sth->execute();
                
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
				        foreach ($result as $row => $client) {
                            
                            echo "<tr>";
                            
						    echo "<td>".$client['nom']."</td>";
						    echo "<td>".$client['prenom']."</td>";
						    echo "<td>".$client['telephone']."</td>";
						    echo "<td>
                                <a class='btn btn-info btn-xs' href='starter.php?page=formclient&id=".$client['id_client']."'>
                                    <span class='glyphicon glyphicon-edit'></span>
                                    Edit
                                </a>";
                            
                            $deletepage=$route['deleteclient'];
						    echo "<td>
                                <a class='btn btn-danger btn-xs' href='$deletepage?id=".$client['id_client']."'>
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
