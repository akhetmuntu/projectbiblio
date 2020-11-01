<?php
               include "../includes/connexiondb.php";
               $id_user=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM user WHERE id_user=$id_user";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=usersliste');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>