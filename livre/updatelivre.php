<?php
include "../security/secure.php";
include "../includes/connexiondb.php";
include "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['id_livre']!=""){
		$id_livre = $_POST['id_livre'];
		$id_bibliotheque=$_POST['id_bibliotheque'];
		$titre=$_POST['titre'];
		$genre=$_POST['genre'];
		$id_auteur=$_POST['id_auteur'];
		$id_editeur=$_POST['id_editeur'];
         $logo_livre=uploadfile('logo_livre');
        $datepublication=$_POST['datepublication'];

		
try{

		if($logo_livre==""){
		$sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre WHERE id_livre=$id_livre";

		$params=array(':id_bibliotheque' => $id_bibliotheque,
				      ':titre' => $titre,
				      ':genre' => $genre,
						);
        }
    else {
        $sql = "UPDATE livre set titre=:titre, id_bibliotheque=:id_bibliotheque, genre=:genre, logo_livre=:logo_livre WHERE id_livre=$id_livre";

		$params=array(':id_bibliotheque' => $id_bibliotheque,
				      ':titre' => $titre,
				      ':genre' => $genre,
                      ':logo_livre'=>$logo_livre
						);
    }
		$sth = $dbco->prepare($sql);
    
		$sth->execute($params);
    
    
        $sql = "UPDATE publier set  id_auteur=:id_auteur, id_editeur=:id_editeur, datepublication=:datepublication  WHERE id_livre=$id_livre";
    
		$params=array(':id_auteur'=>$id_auteur,
				       ':id_editeur'=>$id_editeur,
                      ':datepublication'=>$datepublication
                        );
		
		$sth = $dbco->prepare($sql);

		$sth->execute($params);
    
		header('Location:../admin/starter.php?page=livrelist');      

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>