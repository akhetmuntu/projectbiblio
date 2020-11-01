<?php
//include "../security/secure.php";
include "../includes/connexiondb.php";
include "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['id_auteur']!=""){
        $id_auteur =securisation($_POST['id_auteur']);
		$nom=securisation($_POST['nom']);
		$prenom=securisation($_POST['prenom']);
		$nationalite=securisation($_POST['nationalite']);
		
try{

		
		$sql = "UPDATE auteur set nom=:nom,prenom=:prenom, nationalite=:nationalite WHERE id_auteur=$id_auteur";

		$params=array(':nom' => $nom,
						':prenom' => $prenom,

						':nationalite' => $nationalite,

						    

						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);
    
  header('location:../admin/starter.php?page=auteurlist');
		

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>