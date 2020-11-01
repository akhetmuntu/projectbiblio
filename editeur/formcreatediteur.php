<?php
include "../includes/connexiondb.php";
include "../includes/define.php";

/*include"../security/secure.php";*/



			
		if(@$_GET['id']!=""){
			$id_editeur=$_GET['id'];
				
			

			$sql = "SELECT *  FROM editeur WHERE id_editeur=$id_editeur";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$adresse=$result['adresse'];
			
		
				 $action=$route['updatediteur'];//"updateauteur.php";
				 $titreForm=" MODIFIER L'EDITEUR ";
		}
		else {
			$action= $route['createditeur'];
			$titreForm=" AJOUT L'EDITEUR ";
			
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
            
            <input type="hidden" id="id_editeur" name="id_editeur" value="<?php echo @$id_editeur;?>">  
            
            <div class="nom">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="adresse">
                <label for="adresse">adresse: </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
            
            <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
        </form>
    </body>
            