<?php

include "../includes/connexiondb.php";

 try{
     $id_client=$_POST['id_client'];
     $id_livre=$_POST['id_livre'];
     
     
//1-A partir de ma variable de connexion je prepare une requete et l'introduit dans une nouvelle variable
//2-je cree des marqueurs VALUES corespondant a ma requete        
     $requete=
        "INSERT INTO rendre(id_client,id_livre)
                         VALUES(:id_client,:id_livre)";
        
//3-je lie mes marqueurs a mes variable grace a bindParam
     
     $sth=$dbco->prepare($requete);
     $params=[':id_client'=>$id_client,
              ':id_livre'=>$id_livre,
             ];
     $sth->execute($params);
     
     $id_rendre=$dbco->lastInsertId();
        
     header("location:../admin/starter.php?page=rendreliste");
     
        
     
     
     echo'table bien créee!';
    }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
    ?>