<?php

            include "../security/secure.php";
            include "../includes/connexiondb.php";
            
               $id_livre=$_GET['id'];

            try{
           
                
            
                $sql = "DELETE FROM publier WHERE id_livre=$id_livre";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                $sql = "DELETE FROM livre WHERE id_livre=$id_livre";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                
                header('Location:../admin/starter.php?page=livrelist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>