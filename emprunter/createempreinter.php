<?php

include "../includes/connexiondb.php";

 try{
     $id_client=$_POST['id_client'];
     $id_livre=$_POST['id_livre'];
      
     $requete="INSERT INTO emprunter(id_client,id_livre)
                              VALUES(:id_client,:id_livre)";
     
     $sth=$dbco->prepare($requete);
     $params=[':id_client'=>$id_client,
              ':id_livre'=>$id_livre,
             ];
     $sth->execute($params);
     
     $id_emprunter=$dbco->lastInsertId();
        
     header("location:../admin/starter.php?page=emprunterlist");
        
     echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    ?>