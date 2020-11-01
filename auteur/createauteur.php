<?php

include "../includes/connexiondb.php";
include "../includes/functions.php";
include "../security/secure.php";

if(@$_POST['nom']!=""){


 
     $nom=securisation($_POST['nom']);
     $prenom=securisation($_POST['prenom']);
     $nationalite=securisation($_POST['nationalite']);

try{
    
     $requete="INSERT INTO auteur(nom,prenom,nationalite)
                           VALUES(:nom,:prenom,:nationalite)";
        
     $sth=$dbco->prepare($requete);
     $params=[':nom'=>$nom,
              ':prenom'=>$prenom,
              ':nationalite'=>$nationalite,
             ];
     $sth->execute($params);
     $id_auteur=$dbco->lastInsertId();
        
     header("location:../admin/starter.php?page=auteurlist");
     
     echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    }
    
    ?>