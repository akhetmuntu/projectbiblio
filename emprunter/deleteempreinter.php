<?php
               include "../includes/connexiondb.php";

               $id_empreinter=$_GET['id'];

            try{
                
            
                $sql = "DELETE FROM emprunter WHERE id_emprunter=$id_empreinter";
                $sth = $dbco->prepare($sql);
                $sth->execute();
                
                header('Location:../admin/starter.php?page=emprunterlist');
                
                $count = $sth->rowCount();
                print('Effacement de ' .$count. ' entrées.');
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }



?>