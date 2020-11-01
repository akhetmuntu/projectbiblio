<!DOCTYPE html>
<html>
  <head>
      
    <meta charset="utf-8">
    <title>FIRSTMODIFY</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    
    <!--  debut  ceci pour l'instant s'applique sur content.php    -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- jQuery UI library -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--  fin    -->
      <link rel="stylesheet" href="css/user.css" />  
  </head>
  <body>
<!--navigation-->

<!--      <div><?php include "template/navigation.php";?></div><br/>-->
      
<!-- content-->
      
      <div class="container-fluid contentlivre">
          
         <?php
          
            require_once 'includes/functions.php';
			@$page=securisation($_GET["page"]);
			if($page=="" || $page=="content"){include 'template/content.php';}
			else if($page=="livre"){include 'template/livre.php';}
          
          ?> 
          
      </div>
      
<!-- footer    -->
      
      <div><?php include "template/footer.php";?></div>
        
<!--  mes liens    -->
   
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--        <script src="js/jquery.min.js"></script>-->
<!--        <script src="js/jquery.color-2.1.2.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    
<!--        <script src="js/site.js"></script>-->
        <script src="js/homepage.js"></script>
            
            
    
  </body>
</html>