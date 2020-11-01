<?php

include "../security/secure.php";
include "../includes/connexiondb.php";
include "../includes/functions.php";	
			
   if(@$_POST['titre']!=""){
       
       
       $titre=$_POST['titre'];
        $genre=$_POST['genre'];
        $id_bibliotheque=$_POST['id_bibliotheque'];
        $id_auteur=$_POST['id_auteur'];
        $id_editeur=$_POST['id_editeur'];
        $logo_livre=uploadfile('logo_livre');
        $datepublication=$_POST['datepublication'];


 try{    
     
     $sql="INSERT INTO livre(titre,genre,id_bibliotheque,logo_livre)
           VALUES(:titre,:genre,:id_bibliotheque,:logo_livre)";
     
     $sth=$dbco->prepare($sql);
     $params=[':titre'=>$titre,
              ':genre'=>$genre,
              ':id_bibliotheque'=>$id_bibliotheque,
              ':logo_livre' =>$logo_livre
             ];
     $sth->execute($params);
     $id_livre=$dbco->lastInsertId();
     
 //-----------------------------------------------------------    
     
     $sql="INSERT INTO publier(id_auteur,id_editeur,id_livre,datepublication)
           VALUES(:id_auteur,:id_editeur,:id_livre,:datepublication)";
     
     $sth=$dbco->prepare($sql);
     $params=[':id_auteur'=>$id_auteur,
              ':id_editeur'=>$id_editeur,
              ':id_livre'=>$id_livre,
              ':datepublication'=>$datepublication
             ];
     
     
     $sth->execute($params);
     
     header("location:../admin/starter.php?page=livrelist");
     
        echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
   }
    ?>