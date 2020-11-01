<div class="in_out">
    <button type="button" class="btn btn-success" id="livrein">cacher les livres </button> 
    <button type="button" class="btn btn-danger" id="livreout">Afficher les livres</button>
</div>

<div class="carroussel">
    
    
    <div class="prec"></div>
    <div class="slider"> 
        <div class="row" >
            <script>      
                $( document ).ready(function() {
                    $("#search_livre").on('input',function(){alert('ok');}); 
	                $("#search_livre").autocomplete({
			                source: "livre/livreapi.php",
			                select: function( event, ui ) {
					                event.preventDefault();
					                $("#search_livre").val(ui.item.value);
			                }

	                });
                });
            </script>
    
<?php   
    include "includes/connexiondb.php";   
    try{
        $sth = $dbco->prepare("SELECT distinct genre FROM livre,publier where livre.id_livre=publier.id_livre");
        $sth->execute();
        
        $listeGenres= $sth->fetchAll(PDO::FETCH_ASSOC);
              			foreach ($listeGenres as $grow => $genre){                       
              			    echo '<div class="col-lg-2 col-md-4 col-sm-12 page-header">';
						    echo '<h1>';
						    echo $genre["genre"];
						    echo '</h1>';
						    echo '</div>';
              			    echo "<div class='container'> <div class='row'>";     
        
        
        $sth = $dbco->prepare(
    
                            "SELECT livre.titre,
                                    livre.id_livre,
                                    livre.genre,
                                    livre.logo_livre,
                                    auteur.nom as auteur_name,
                                    editeur.nom as editeur_name 
                                    FROM livre,publier,auteur,editeur 
                            
                                    WHERE publier.id_livre=livre.id_livre AND publier.id_auteur=auteur.id_auteur AND
                                    publier.id_editeur=editeur.id_editeur and livre.genre=:genre"
                        );
        
        $param=array("genre"=>$genre["genre"]);
        $sth->execute($param);           
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);   
				foreach ($result as $row => $livre) {
                    echo '<div class="col-lg-10 col-md-8 col-sm-12 meslivres">';
						echo '<div class="card livrecard">';
						    echo '<img class="card-img-top" src="uploads/'.$livre['logo_livre'].  
                                '" alt="Card image cap">';            
				            echo '<div class="card-body">';
						            echo '<h5 class="card-title">'.$livre['titre'].'</h5>';
						            echo '<p class="card-text"> '.$livre['genre'].'.</p>';
						            echo '<p class="card-text"><small class="text-muted">livre</small></p>';
                                    echo '<a class="btn btn-success" href="?id='.$livre['id_livre'].                                     
                                        '&page=livre">details</a>';
						    echo ' </div>';
						echo '</div>';
				    echo '</div>';
             	}
                        echo'</div>';
		                echo'</div>';
			}            
        }
                        
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
   
      
     </div>
    </div>
</div>



    
