<?php
        include "../security/secure.php";
		include "../includes/connexiondb.php";
        
			
		if(@$_GET['id']!=""){
			$id_livre=$_GET['id'];
				
			

			$sql = "select livre.*,publier.datepublication  FROM livre,publier WHERE livre.id_livre=$id_livre and  publier.id_livre=$id_livre";
			$sth = $dbco->prepare($sql);

			$sth->execute();
			$result = $sth->fetch(PDO::FETCH_ASSOC);

			$id_bibliotheque=$result['id_bibliotheque'];
			$titre=$result['titre'];
			$genre=$result['genre'];
			$logo=$result['logo_livre'];
            $datepublication=$result['datepublication'];
		
				 $action=$route["updatelivre"];
				 $titreForm=" MODIFIER LIVRE ";
		}
		else {
			$action=$route["createlivre"];
			$titreForm=" AJOUT DU LIVRE ";
			
		}
			/*REQUETE LISTE DE TOUTES LES BIBLIOTHEQUES */ 
			/************************************/
			
			$sql = "select id_bibliotheque, nom FROM bibliotheque";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC); /* on récupère toute la liste dans la base de donnée*/
			 foreach ($result as $biblio => $val){
				 @$optionb .="<option value='".$val['id_bibliotheque']."'>".$val['nom']."</option>";
				 /* equivalent à $option= "<option value='1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>" */
			 }


			/*REQUETE LISTE DE TOUS LES AUTEURS */ 
			/************************************/
			
			$sql = "select id_auteur, nom as auteur_nom, prenom FROM auteur ";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optiona .="<option value='".$val['id_auteur']."'>".$val['auteur_nom']." ".$val['prenom']."</option>";
				
			 }
			 
			 
			 /*REQUETE LISTE DE TOUS LES EDITEURS */ 
			 /*************************************/
			 
			$sql = "select id_editeur, nom as editeur_nom FROM editeur";
			$sth = $dbco->prepare($sql);
			$sth->execute();
			$result = $sth->fetchAll(PDO::FETCH_ASSOC);
			foreach ($result as $auteur => $val){
				 @$optione .="<option value='".$val['id_editeur']."'>".$val['editeur_nom']."</option>";
				
			 }
			 
		

?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--		  	      <link rel="stylesheet" href="css/style.css">-->

<h1><?php echo $titreForm;?></h1>
        
		<div class="container">
        <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data">
		
		<input type="hidden" id="id_livre" name="id_livre" value="<?php echo @$id_livre;?>">
		 <div class="c100">
                <label for="titre">Titre : </label>
                <input type="text" id="titre" name="titre" value="<?php echo @$titre;?>">
            </div>			
            <div class="c100">
                <label for="genre">Genre : </label>
                <input type="text" id="genre" name="genre" value="<?php echo @$genre;?>">
            </div>
            <div class="c100">
                <label for="genre">Logo : </label>
                <input type="file" id="logo_livre" name="logo_livre" > <img src="../uploads/<?php echo $logo ?>" width="100" height="75">
            </div>
			<div class="c100">
                <label for="genre">Date de publication : </label>
                <input type="date" id="datepublication" name="datepublication" value="<?php echo @$datepublication;?>">
            </div>
			<div class="c100">
                <label for="auteur">Auteur :</label>
                <select id="id_auteur" name="id_auteur">  <!-- liste déroulante des auteurs disponibles-->
                    <option value="">--Sélectionnez l'auteur</option>
                       <?php echo @$optiona; 
					   
                        ?>
				</select>
			</div>
			
			<div class="c100">
                <label for="editeur">Editeur :</label>
                <select id="editeur" name="id_editeur">  <!-- liste déroulante des éditeurs disponibles-->
                    <option value="">--Sélectionnez la maison d'édition</option>
                       <?php echo @$optione; 
					  
                        ?>
				</select>
			</div>
			
			
			<div class="c100">
                <label for="id_bibliotheque">Bibliothèque :</label>
                <select id="id_bibliotheque" name="id_bibliotheque">  <!-- liste déroulante des bibliothèques disponibles-->
                    <option value="">--Sélectionnez la bibliotheque</option>
                       <?php echo @$optionb; 
					   /* ==  <option value='id_biblio1'>Ma biblio</option><option value='2'>biblio de quartier</option><option value='3'>Alain Quillot</option><option value='6'>mediatheque</option><option value='7'>Hogwarts library</option>*/
                        ?>
				</select>
			</div>
			
						
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>
		</div>