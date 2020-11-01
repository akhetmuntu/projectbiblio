<?php
               include "../includes/connexiondb.php";

               $id_editeur=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM editeur WHERE id_editeur=$id_editeur";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=editeurlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>