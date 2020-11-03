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
            $age=$result['age'];
            $pays=$result['pays'];
            
		
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="formuleuser.css"/>
    </head>
    
    <body>
              
        <h1>Formulaire Users</h1>
        <form action="createusers.php" method="post">
<!-----------------------------------------------------------------nom -->
            <div class="col-lg-6 col-md-4 col-ms-12">
                <label for="nom">nom : </label>
                <input type="text" id="nom" name="nom">
            </div>
<!-----------------------------------------------------------------prenom -->
            <div class="col-lg-6 col-md-4 col-ms-12">
                <label for="prenom">Prénom : </label>
                <input type="text" id="prenom" name="prenom">
            </div>
<!-----------------------------------------------------------------mail -->            
            <div class="col-lg-6 col-md-4 col-ms-12">
                <label for="mail">Email : </label>
                <input type="email" id="mail" name="mail">
            </div>
<!-----------------------------------------------------------------pass -->                  
            <div class="col-lg-6 col-md-4 col-ms-12">
                <label for="pass">Mots de passe: </label>
                <input type="password" id="pass" name="pass">
            </div>
<!-----------------------------------------------------------------age -->              
            <div class="col-lg-6 col-md-4 col-ms-12">
                <label for="age">Age : </label>
                <input type="number" id="age" name="age">
            </div>
<!-----------------------------------------------------------------sexe -->              
            
            <div class="col-lg-6 col-md-4 col-ms-12">
                <input type="radio" id="femme" name="sexe" value="femme">
                <label for="femme">Femme</label>
                <input type="radio" id="homme" name="sexe" value="homme">
                <label for="homme">Homme</label>
                <input type="radio" id="autre" name="sexe" value="autre">
                <label for="autre">Autre</label>
            </div>
<!-----------------------------------------------------------------pays -->              
            <div class="col-lg-6 col-md-4 col-ms-12">
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
 <!-----------------------------------------------------------------submit -->             
            <div class="col-lg-6 col-md-4 col-ms-12" id="submit">
                <input type="submit" value="Envoyer">
            </div>
<!-----------------------------------------------------------------pass -->  
        </form>
    </body>

</html>

<script>
 
function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
    

    $(document).ready(function(){
//-----------------email--------------
        $("#email").on("blur",function(){
	        var $email= $("#email").val();
	 
		if(validateEmail($email)){
			$.ajax({          
                 url : '../api/checkemail.php',
                 type : 'GET',
	             data:'email='+$("#email").val(),
                 dataType : 'text',
                 success : function(resultat, statut){
			     //alert(resultat);
			         if(resultat=="OK"){
				//Mettre la bordure en vert
				         $("#email").css('color','green');
				         $('#error_email').html("");
			          }       
			         else if(resultat=="KO"){
				//Mettre la bordure en rouge
				         $("#email").css('color','red');
					     $('#error_email').html("Email already exist");
			          }                   
                      },          
                 error : function(resultat, statut, erreur){
			          alert(resultat);
                      },
                 complete : function(resultat, statut){
                      }
                  }); 
		   }
		   else {
               $('#email').focus();
			   $('#error_email').html("Email non Valide");
		}
	 
 });
//-----------------password--------------
$("#password").on("input",function(){ 
	 var $password= $("#password").val();
	 
	
        		
		$.ajax({

     url : '../api/validatepass.php',
       type : 'GET',
	   data:'password='+$("#password").val(),
	   
       dataType : 'text',
       success : function(resultat, statut){
			//alert(resultat);
			if(resultat=="valid"){
				//Mettre la bordure en vert
				$("#password").css('color','green');
				$('#error_password').html("");
			}
			else if(resultat!="valid"){
				//Mettre la bordure en rouge
					$("#password").css('color','red');
					$('#error_password').html("Password not valid");
			}
       },

       error : function(resultat, statut, erreur){
			alert(resultat);
       },

       complete : function(resultat, statut){

       }
	   
	   });
	   
	});  
//----------------------------verification--------repassword--------------   
$("#repassword").on("input",function(){
				var $password= $("#password").val();
				var $repassword= $("#repassword").val();

									
				if($password==$repassword)
				{
					$("#repassword").css({color :'green', borderColor :'green'});
					$('#error_repassword').html("");
				}
				 
				 else
				 {
						$("#repassword").css({color :'red', borderColor :'red'});
						$('#error_repassword').html("password non indentiques");
				}
								
								
		});
//-----------------------------------------------------------------------  


});
</script>