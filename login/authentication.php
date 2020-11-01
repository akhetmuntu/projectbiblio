<?php

session_start();
    
    include "../includes/connexiondb.php";
    include "../includes/functions.php";


 if(isset($_POST['email'])&& isset($_POST['password'])){   
//if(@$_POST['email']!=""){
    
    $mail = securisation($_POST['email']);
    $password = securisation($_POST['password']);

    $requete="SELECT* FROM user WHERE  mail='$mail' ";

    $requete=$dbco->prepare($requete);
    $requete->execute();
    $results=$requete->fetch(PDO::FETCH_ASSOC);

   
     if($requete->rowCount()>0){
        $actualpassword=$results["pass"];
        $prenom=$results["prenom"];
        $role=$results["role"];
        if ($actualpassword == $password){
            $_SESSION["user_firstname"]=$prenom;
            $_SESSION["user_email"]=$email;
            $_SESSION["role"]=$role;
            header("location:../admin/starter.php");
            //header("localtion:")
            echo "la connexion est bonne";
        
        }
        else{
             $_SESSION["error_message"]="le mots de passe n'est pas bon";
            header("location:login.php");
            
        }
    
    }else {
         $_SESSION["error_message"]="User not found";
         header("location:login.php");
     }
    
}
else {
    $_SESSION["error_message"]=" veuillez saisir votre email";
    header("location:login.php");
    
}

?>