<?php
include "../includes/connexiondb.php";

try{
    $id_editeur=$_POST['id_editeur'];
    $id_auteur=$_POST['id_auteur'];
    $id_livre=$_POST['id_livre'];
    
    $requete="INSERT INTO publier (id_auteur,id_livre,id_editeur)
                             VALUES(:id_auteur,:id_livre,:id_editeur)";
    
    $sth = $dbco->prepare($requete);
    $params=[':id_auteur'=>$id_auteur,
             ':id_livre'=>$id_livre,
             ':id_editeur'=>$id_editeur,
            ];
    $sth->execute($params);
    
    echo'table bien créee!';
    
}
catch(PDOException $e){
    die('ERROR:'.$e->getMessage());
}

?>