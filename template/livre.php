<?php
include "includes/connexiondb.php";



if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];
				
			//echo $id_livre;

			$sql = "SELECT livre.titre,
                    livre.id_livre,
                    livre.genre,
                    livre.logo_livre,
                    auteur.nom as auteur_name,
                    editeur.nom as editeur_name,
                    publier.datepublication
                    
                    FROM livre,publier,auteur,editeur
                    
                    WHERE publier.id_livre=livre.id_livre 
                    AND publier.id_auteur=auteur.id_auteur 
                    AND publier.id_editeur=editeur.id_editeur
                    and livre.id_livre=$id_livre";
    
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

		//	$id_bibliotheque=$result['id_bibliotheque'];
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logo_livre'];
            $datepublication=$result['datepublication'];
            $editeur_name=$result['editeur_name'];
            $auteur_name=$result['auteur_name'];

		}



//echo '<div class="container-fluid">
//<div class="row">
//    
//    
//    <div class="card"><img src="uploads/'.$logo.'" class="nuba"/></div>
//    <div class="card">
//        <p class="titre">'.$titre.'</p>
//        <p class="auteur">'.$auteur_name.'</p>
//        <p class="editeur">'.$editeur_name.'</p>
//        <p class="datedepublication">'.$datepublication.'</p>
//        <p class="description">description</p>
//    
//    </div>
//    <div class="card">
//        <button><a href="" >Empreinter</a></button></div>
//
//</div>
//</div>';

?>


<article id="arrire_plan_livres">
<div class="container-fluid">
<div class="row">
    
    
    <div class="col-6 border"><img src="uploads/<?php echo $logo;?>" class=""/></div>
    <div class="col-6 border">
        <div class="row">
            <div class="col-6 ">
                <p class="titre texte_color"><?php echo $titre;?></p>
                <p class="auteur texte_color"><?php echo $auteur_name;?></p>
                <p class="editeur texte_color"><?php echo $editeur_name;?></p>
                <p class="datedepublication texte_color"><?php echo $datepublication;?></p>
            </div>
            <div class="col-6 border ">
               <p class=" texte_color">description</p>
                <div id="description">
                  
                </div>
        
        
            </div>
            
        </div>
        <a href="" class="btn btn-info btn-lg btn-block Empreinter">Empreinter</a>
    </div>
   

</div>
</div>
</article>




