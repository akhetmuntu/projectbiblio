<?php

$password=$_GET["password"];

if(strlen($password)< 8){
    echo "not valid";
}
else{
    echo "valid";
    
}

?>