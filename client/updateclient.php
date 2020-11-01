<?php
include "../security/secure.php";
include "../includes/connexiondb.php";

 include "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['id_client']!=""){
        $id_client =$_POST['id_client'];
		$nom= $_POST['nom'];
		$prenom=$_POST['prenom'];
		$telephone=$_POST['telephone'];
		
try{

		
		$sql = "UPDATE client set nom=:nom,prenom=:prenom, telephone=:telephone WHERE id_client=$id_client";

		$params=array(':nom' => $nom,
						':prenom' => $prenom,

						':telephone' => $telephone,

						    

						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);
    
  header('location:../admin/starter.php?page=clientlist');
		

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>