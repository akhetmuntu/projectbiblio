<!DOCTYPE html>


<?php
            
        
			$servname = "localhost"; $dbname = "bd_baby_biblio"; $dbuser = "root"; $dbpass = "";
			
			$dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $dbpass);
			$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];

			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
	
			 foreach ($result as $bi => $val){
				 @$option .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
			 }

            $sql="select id_auteur,nom,prenom  FROM auteur";
            $sth=$dbco->prepare($sql);
            $sth->execute();
            $result=$sth->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $bi => $val){
				 @$optionauteur .="<option value='".$val['id_auteur']."'>".$val['nom']." ".
                                                    $val['prenom'].
                     "</option>";
			 }

            $sql="select id_editeur,nom,adresse  FROM editeur";
            $sth=$dbco->prepare($sql);
            $sth->execute();
            $result=$sth->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $bi => $val){
				 @$optionediteur .="<option value='".$val['id_editeur']."'>".$val['nom']." ".
                                                    $val['adresse'].
                     "</option>";
			 }




            
            
            ?>
            

<html>
    <head>
        <title>formulair-user</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="formuleuser.css"/>
    </head>
    
    <body>
        
        
        
        <h1>Formulaire HTML "livre"</h1>
        
        <form action="createlivre.php" method="post" enctype="multipart/form-data">
            
            <div class="titre">
                <label for="titre">Titre: </label>
                <input type="text" id="titre" name="titre">
            </div>
            <div class="genre">
                <label for="genre">Genre: </label>
                <input type="text" id="genre" name="genre">
            </div>
            <div class="logolivre">
                <label for="logolivre">Logolivre : </label>
                <input type="file" id="logolivre" name="logolivre">
            </div>
            
            <div class="">
                <label for="id_auteur">Auteur :</label>
                <select id="id_auteur" name="id_auteur">  
                    <option value="">--Selectionnez l'auteur</option>
                       <?php echo $optionauteur; 
                        ?>
				</select>
            </div>
            
            <div class="datepublication">
                <label for="datepublication">date de publication: </label>
                <input type="date" id="datepublication" name="datepublication">
            </div>
            
            
            <div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  
                    <option value="">--Selectionnez la bibliotheque</option>
                       <?php echo $option; 
                        ?>
				</select>
            </div>
            
            <div class="">
                <label for="id_editeur">Editeur:</label>
                <select id="id_editeur" name="id_editeur">  
                    <option value="">--Selectionnez l'editeur</option>
                       <?php echo $optionediteur; 
                        ?>
				</select>
            </div>
                
                <div class="expedier">
                <input type="submit" value="envoie"/>
            
            </div>
            
			

            
            
            
            