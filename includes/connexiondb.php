<?php
$servername = "localhost"; 
$dbname = "bd_baby_biblio";
$dbuser = "root"; 
$dbpass = "";

try{
        $dbco=new PDO("mysql:host=$servername;dbname=$dbname",$dbuser,$dbpass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
     }
    catch(PDOException $e){
        die('ERROR:'.$e->getMessage());
    }
