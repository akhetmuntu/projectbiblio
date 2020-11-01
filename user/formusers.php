<?php
include "../includes/connexiondb.php";

/*include"../security/secure.php";*/



			
		if(@$_GET['id']!=""){
			$id_user=$_GET['id'];
				
			

			$sql = "SELECT *  FROM user WHERE id_user=$id_user";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$nom=$result['nom'];
			$prenom=$result['prenom'];
			$mail=$result['mail'];
            $sexe=$result['sexe'];
            $pass=$result['pass'];
            $age=$['age'];
            $pays=$['pays'];
            
		
				 $action=$route['updateuser'];//"updateauteur.php";
				 $titreForm=" MODIFIER AUTEUR ";
		}
		else {
			$action= $route['createusers'];//"createauteur.php";
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
        
        
        
        <h1>Formulaire Users</h1>
        
        <form action="createusers.php" method="post">
            
            <div class="">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
            <div class="c100">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
            
            <div class="c100">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
            
            <div class="">
                <label for="pass">Mots de passe: </label>
                <input type="password" id="pass" name="pass">
            </div>
            
            
            
            <div class="c100">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
            
            
            <div class="c100">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
            
            <div class="c100">
                <label for="pays">Pays de résidence :</label>
                <select id="pays" name="pays">
                    <optgroup label="Europe">
                        <option value="france">France</option>
                        <option value="belgique">Belgique</option>
                        <option value="suisse">Suisse</option>
                    </optgroup>
                    <optgroup label="Afrique">
                        <option value="algerie">Algérie</option>
                        <option value="tunisie">Tunisie</option>
                        <option value="maroc">Maroc</option>
                        <option value="madagascar">Madagascar</option>
                        <option value="benin">Bénin</option>
                        <option value="togo">Togo</option>
                    </optgroup>
                    <optgroup label="Amerique">
                        <option value="canada">Canada</option>
                    </optgroup>
                </select>
            </div>
            
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
        
    
    </body>
    
    
        
        




</html>