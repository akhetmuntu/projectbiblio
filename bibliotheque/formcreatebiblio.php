<?php
include "../includes/connexiondb.php";
include "../includes/define.php";
/*include"../security/secure.php";*/

			
		if(@$_GET['id']!=""){
			$id_bibliotheque=$_GET['id'];
				
			

			$sql = "SELECT *  FROM bibliotheque WHERE id_bibliotheque=$id_bibliotheque";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$adresse=$result['adresse'];
			$telephone=$result['telephone'];
		
				 $action=$route['updatebiblio'];//"updateauteur.php";
				 $titreForm=" MODIFIER BIBLIOTHEQUE ";
		}
		else {
			$action= $route['createbiblio'];//"createauteur.php";
			$titreForm=" AJOUT BIBLIOTHEQUE ";
			
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
            <input type="hidden" id="id_bibliotheque" name="id_bibliotheque" value="<?php echo @$id_bibliotheque;?>">
            
            <div class="nom">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="adresse">
                <label for="adresse">Adresse: </label>
                <input type="text" id="adresse" name="adresse" value="<?php echo @$adresse;?>">
            </div>
            <div class="telephone">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone" value="<?php echo @$telephone;?> ">
            </div>
            <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
            
        </form>
        
    </body>
            
            
            