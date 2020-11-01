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
        
        <h1>listes des livres rendu</h1> 	
        
        <a id="create" href="?page=formrendre"><button>AJOUTER</button></a>
        
        <div class="container">
            <div class="row col-md-6 col-md-offset-2 custyle">
                <table class="table table-striped custab">                 
                    <?php
                    
                    try{

                        $sth = $dbco->prepare("SELECT * FROM rendre");
                        $sth->execute();
                
//1-je demande a avoir un tableau associatif de tous le contenu de ma variable via $sth->fetchAll(PDO::FETCH_ASSOC);
//2-et l'inteingre dans une nouvelle variable                    
                        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				        foreach ($result as $rendre) {
                            
                            echo "<tr>";
                            
						    echo "<td>".$rendre['id_livre']."</td>";
						    echo "<td>".$rendre['id_client']."</td>";
						    echo "<td>
                                <a class='btn btn-info btn-xs' href='starter.php?page=formrendre.php?  
                                id=".$rendre['id_rendre']."'>
                                    <span class='glyphicon glyphicon-edit'></span>
                                    Edit
                                </a>";
                            
                            $deletepage=$route['deleterendre'];
						    echo "<td>
                                <a class='btn btn-danger btn-xs' href='$deletepage?id=".$rendre['id_rendre']."'>
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
