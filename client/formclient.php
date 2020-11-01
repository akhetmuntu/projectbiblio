<?php
include "../includes/connexiondb.php";
include"../security/secure.php";
include "../includes/define.php";




			
		if(@$_GET['id']!=""){
			$id_client=$_GET['id'];
				
			

			$sql = "SELECT *  FROM client WHERE id_client=$id_client";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$telephone=$result['telephone'];
		
				 $action=$route["updateclient"];
				 $titreForm=" MODIFIER CLIENT ";
		}
		else {
			$action=$route["createclient"];
			$titreForm=" AJOUT CLIENT ";
			
		}


?>


<!DOCTYPE html>

<html>
    <head>
        <title>formulair-</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="formuleuser.css"/>
    </head>
    
    <body>
        
        
        
        <h1><?php echo $titreForm;?></h1>
        
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data" >
            
            <input type="hidden" id="id_client" name="id_client" value="<?php echo @$id_client;?>">   
            
            <div class="nom">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom" value="<?php echo @$nom;?>">
            </div>
            <div class="prenom">
                <label for="prenom">prenom: </label>
                <input type="text" id="prenom" name="prenom" value="<?php echo @$prenom;?>">
            </div>
            <div class="telephone">
                <label for="telephone">Telephone : </label>
                <input type="text" id="telephone" name="telephone" <?php echo @$telephone;?>>
            </div>
            <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
            
        </form>
        
    </body>
            
            
            