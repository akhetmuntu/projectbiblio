<?php
include "../security/secure.php";

include "../includes/connexiondb.php";
include "../includes/define.php";

?>

 <!DOCTYPE html>
<html>
    <head>
        <title>LIVRE LIST</title>
        <meta charset='utf-8'>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/tabl.css"/>
    </head>
    <body>
        <h1>liste des livres</h1> 
   
        <div class="container">
        <div class="row col-md-6 col-md-offset-2 custyle">
        <a class='btn btn-success btn-xs' href='?page=formlivre'><span class='glyphicon glyphicon-add'></span> Add</a> 
        
        <table class="table table-striped custab"> 		
        <?php
            
            
            try{
                
                
                /*Sélectionne les valeurs dans les colonnes prenom et mail de la table
                 *users pour chaque entrée de la table*/
                $sth = $dbco->prepare("SELECT livre.titre,livre.id_livre,livre.genre,livre.logo_livre,auteur.nom as auteur_name,editeur.nom as editeur_name 
                
                FROM livre,publier,auteur,editeur 
                
                WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND publier.id_editeur=editeur.id_editeur");
                $sth->execute();
                
                /*Retourne un tableau associatif pour chaque entrée de notre table
                 *avec le nom des colonnes sélectionnées en clefs*/
                $result = $sth->fetchAll(PDO::FETCH_ASSOC);
                
				foreach ($result as $row => $livre) {
					
					   echo "<tr>";
						
						echo "<td>". $livre['titre']."</td>";
						echo "<td>". $livre['genre']."</td>";
						//echo "<td>". $livre['logolivre']."</td>";
                      echo "<td > <img src='../uploads/". $livre['logo_livre']."'></img></td>";

                        echo "<td>". $livre['auteur_name']."</td>";
						echo "<td>". $livre['editeur_name']."</td>";

						echo "<td> <a class='btn btn-info btn-xs' href='starter.php?page=formlivre&id=".$livre['id_livre']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>";

						echo "<td> <a class='btn btn-danger btn-xs' href='".$route['deletelivre']."?id=".$livre['id_livre']."'><span class='glyphicon glyphicon-remove'></span> Delete</a>";

				
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
		
