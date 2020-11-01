<?php

include "../includes/connexiondb.php";

 try{
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $mail=$_POST['mail'];
     $sexe=$_POST['sexe'];
     $pass=$_POST['pass'];
     $age=$_POST['age'];
     $pays=$_POST['pays'];
     
//1-A partir de ma variable de connexion je prepare une requete et l'introduit dans une nouvelle variable
//2-je cree des marqueurs VALUES corespondant a ma requete        
     $requete=
        "INSERT INTO user(nom,prenom,mail,sexe,pass,age,pays,role)
                   VALUES(:nom,:prenom,:mail,:sexe,:pass,:age,:pays,:administrateur)";
        
//3-je lie mes marqueurs a mes variable grace a bindParam
     
     $sth=$dbco->prepare($requete);
     $params=[':nom'=>$nom,
              ':prenom'=>$prenom,
              ':mail'=>$mail,
              ':sexe'=>$sexe,
              ':pass'=>$pass,
              ':age'=>$age,
              ':pays'=>$pays,
              ':administrateur'=>administrateur,
             ];
     $sth->execute($params);
     
     $id_empreinter=$dbco->lastInsertId();
        
     header("location:../admin/starter.php?page=userliste");
        
     
     
     echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    ?>