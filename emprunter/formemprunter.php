<?php

include "../includes/connexiondb.php";




/*REQUETE LISTE DE TOUS LES clients*/ 
			/************************************/

           $sql = "select id_client, nom FROM client";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $clien => $val){
				 @$optionclien .="<option value='".$val['id_client']."'>".$val['nom']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 }
    
/*REQUETE LISTE DE TOUS LES LIVRES */ 
			/************************************/




$sql = "select id_livre, titre FROM livre";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $livr => $val){
				 @$optionlivr .="<option value='".$val['id_livre']."'>".$val['titre']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
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
        
        
        
        <h1>Formulaire d'empreint</h1>
        
        <form action="createempreinter.php" method="post">
            
            <div class="">
                <label for="client">client: </label>
                <select id="client" name="id_client">
                    <option value="">--Sélectionnez le client</option>
                       <?php echo @$optionclien; ?>
                </select>
            </div>
            
        <div class="c100">
                <label for="livre">Livre :</label>
                <select id="livre" name="id_livre">  <!-- liste déroulante des éditeurs disponibles-->
                    <option value="">--Sélectionnez le livre</option>
                       <?php echo @$optionlivr; 
					  
                        ?>
				</select>
			</div> 
            
            
 
            
            <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
        </form>
    </body>