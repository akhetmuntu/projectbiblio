<?php

include "../includes/connexiondb.php";



if(@$_POST['nom']!=""){
    
    
    $nom=$_POST['nom'];
    $adresse=$_POST['adresse'];
    


try{
    
      
    $requete="INSERT INTO editeur(nom,adresse)
                           VALUES(:nom,:adresse)";
    
    
    $sth=$dbco->prepare($requete);
    
    
    $params=[':nom'=>$nom,
             ':adresse'=>$adresse,
            ];
    
    $sth->execute($params);
    $id_editeur=$dbco->lastInsertId();
    
    header("location:../admin/starter.php?page=editeurlist");
     
     echo'table bien créee!';
    
    
    
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    
 }

?>