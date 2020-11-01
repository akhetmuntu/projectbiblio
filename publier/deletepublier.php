<?php
               include "../includes/connexiondb.php";
               $id_publier=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM publier WHERE id_publier=$id_publier";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:publierlist.php');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>