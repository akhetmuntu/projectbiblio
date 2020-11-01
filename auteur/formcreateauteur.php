<?php
include "../includes/connexiondb.php";
include "../includes/define.php";
include "../security/secure.php";
//include "../includes/functions.php";// me donne un msg a la ligne 2



			
		if(@$_GET['id']!=""){
			$id_auteur=htmlspecialchars($_GET['id']);
				
			

			$sql = "SELECT *  FROM auteur WHERE id_auteur=$id_auteur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=htmlspecialchars($result['nom']);
			$prenom=htmlspecialchars($result['prenom']);
			$nationalite=htmlspecialchars($result['nationalite']);
		
				 $action=$route['updateauteur'];
				 $titreForm=" MODIFIER AUTEUR ";
		}
		else {
			$action= $route['createauteur'];
			$titreForm=" AJOUT AUTEUR ";
			
		}


?>

<!DOCTYPE html>

<html>
    <head>
        <title>formulair-user</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="formuleuser.css"/>
    </head>
    
    <body>
        
        
        
        <h1><?php echo $titreForm;?></h1>
        
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
            
         <input type="hidden" id="id_auteur" name="id_auteur" value="<?php echo @$id_auteur;?>">   
            <div class="nom">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="prenom">
                <label for="prenom">prenom: </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="nationalite">
                <label for="nationalite">nationalite: </label>
                <input type="text" id="nationalite" name="nationalite" value="<?php echo @$nationalite;?> ">
            </div>
            <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
        </form>
    </body>
            
            
            