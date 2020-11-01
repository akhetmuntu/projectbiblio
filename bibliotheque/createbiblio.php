<?php
include "../includes/connexiondb.php";
include "../includes/functions.php";
include "../security/secure.php";


if(@$_POST['nom']!=""){
    
    
    $nom=$_POST['nom'];
     $adresse=$_POST['adresse'];
     $telephone=$_POST['telephone'];


 try{ 
     
     
     $requete="INSERT INTO bibliotheque(nom,adresse,telephone)
                           VALUES(:nom,:adresse,:telephone)";
         
         
      $sth=$dbco->prepare($requete);

     $params=[':nom'=>$nom,
              ':adresse'=>$adresse,
              ':telephone'=>$telephone,
             ];
         
     $sth->execute($params);
   //  $id_bibliotheque=$dbco->lastInsertId();
     //echo "fff";
     header("location:../admin/starter.php?page=bibliolist");
     
     
     echo'table bien créee!';
    }
     
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    }
    ?>