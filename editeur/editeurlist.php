<?php
include "../includes/connexiondb.php";
include "../includes/define.php";

?>



<!DOCTYPE html>
<html>
    <head>
        <title>EDITEUR LIST</title>
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/tabl.css"/>
       
        
    </head>
    
    
    <body>
        
        <h1>listes des editeurs</h1> 
        
        <a id="create" href="?page=formcreatediteur"><button>AJOUTER</button></a>
        
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab"> 
                    
                
                    
                <?php
                       
                    try{

                        $sth = $dbco->prepare("SELECT * FROM editeur");
                        $sth->execute();
                    
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
				        foreach ($result as $row => $editeur) {
                            
                            echo "<tr>";
                            
						    echo "<td>".$editeur['nom']."</td>";
						    echo "<td>".$editeur['adresse']."</td>";
						  
						    echo "<td>
                                <a class='btn btn-info btn-xs' href='starter.php?page=formcreatediteur&id=".$editeur['id_editeur']."'>
                                    <span class='glyphicon glyphicon-edit'></span>
                                    Edit
                                </a>";
                            
                            $deletepage=$route['deletediteur'];
						    echo "<td>
                                <a class='btn btn-danger btn-xs' href='$deletepage?id=".$editeur['id_editeur']."'>
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
