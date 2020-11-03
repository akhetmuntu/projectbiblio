<?php
include "../includes/connexiondb.php";

@$email=$_GET["email"];
//instruction pour vérif si $email existe das table user
$sql = "SELECT mail FROM user WHERE mail='$email'";
			

    $sth = $dbco->prepare($sql);
   $sth->execute();
    $resultat = $sth->fetch(PDO::FETCH_ASSOC);
    if($sth->rowCount()>0){
        echo "KO";
    }
    else
    {
        echo "OK";
    }

    





?>