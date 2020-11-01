<?php
               include "../includes/connexiondb.php";
               $id_rendre=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM rendre WHERE id_rendre=$id_rendre";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:rendrelist.php');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>