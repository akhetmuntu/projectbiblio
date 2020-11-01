<?php
include "../security/secure.php";
include "../includes/connexiondb.php";

 include "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['id_editeur']!=""){
        $id_editeur =$_POST['id_editeur'];
		$nom= $_POST['nom'];
		$adresse=$_POST['adresse'];

		
try{

		
		$sql = "UPDATE editeur set nom=:nom,adresse=:adresse WHERE id_editeur=$id_editeur";

		$params=array(':nom' => $nom,
				      ':adresse' => $adresse,	    

						);
    
		$sth = $dbco->prepare($sql);
		$sth->execute($params);
    
  header('location:../admin/starter.php?page=editeurlist');
		

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>