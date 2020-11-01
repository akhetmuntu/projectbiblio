<?php
               include "../includes/connexiondb.php";
               include "../security/secure.php";

               $id_client=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM client WHERE id_client=$id_client";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=clientlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>