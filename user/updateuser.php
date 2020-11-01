
<?php
include "../security/secure.php";
include "../includes/connexiondb.php";

 include "../includes/functions.php";  /*inclus le php contenant les fonctions */

  if(@$_POST['nom']!=""){
        
		$nom= $_POST['nom'];
		$prenom=$_POST['prenom'];
		$mail=$_POST['mail'];
        $sexe=$_POST['sexe'];
        $pass=$_POST['pass'];
        $age=$_POST['age'];
        $pays=$_POST['pays'];
		
try{

		
		$sql = "UPDATE auteur set nom=:nom,
        prenom=:prenom,
        mail=:mail,
        sexe=:sexe,
        pass=:pass,
        age=:age,
        pays=:age WHERE id_user=$id_user";

		$params=array(':nom' => $nom,
						':prenom' => $prenom,
						':mail' => $mail,
                        ':sexe'=>$sexe,
                        ':pass'=>$pass,
                        ':age'=>$age,
                        ':pays'=>$pays
						);
		$sth = $dbco->prepare($sql);
		$sth->execute($params);
    
  header('location:../admin/starter.php?page=userliste');
		

	}
	catch(PDOException $e){

	echo "Erreur : " . $e->getMessage();

	}
  }
 ?>


