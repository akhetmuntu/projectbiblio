<?php
include "../includes/connexiondb.php";
include "../security/secure.php";


               $id_bibliotheque=$_GET['id'];

            try{
            
                $sql = "DELETE FROM bibliotheque WHERE id_bibliotheque=$id_bibliotheque";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=bibliolist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>