<?php
include "../includes/connexiondb.php";
include "../includes/functions.php";
include "../security/secure.php";


if(@$_POST['nom']!=""){
    
    
    $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $telephone=$_POST['telephone'];

 try{
     
     
      
     $requete="INSERT INTO client(nom,prenom,telephone)
                           VALUES(:nom,:prenom,:telephone)";
         

     $sth=$dbco->prepare($requete);
     $params=[':nom'=>$nom,
              ':prenom'=>$prenom,
              ':telephone'=>$telephone,
             ];
     $sth->execute($params);
     $id_client=$dbco->lastInsertId();
     
     header("location:../admin/starter.php?page=clientlist");
     
     echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
     }
    ?>