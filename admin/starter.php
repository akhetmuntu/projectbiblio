<?php
 include "../security/secure.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/user.css"/>
  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../images/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../images/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../images/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../images/imhotep.jpg" alt="imhotep" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Imhotep</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../images/idia.png" class="" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["user_firstname"];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
      Home                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
<!--------------------------------------------------------------------------------------------------              -->
<!--    <div class="cadre">          -->
              
            </li>
              <li class="nav-item">
                <a href="?page=livrelist" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p class="livre">livre</p>
                </a> 
              </li>
<!--------------------------------------------------------------------------------------------------              -->
              <li class="nav-item">
                <a href="?page=bibliolist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>bibliothèque</p>
                </a>
              </li>
<!--------------------------------------------------------------------------------------------------              -->
            
          <li class="nav-item">
            <a href="?page=userliste" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>users</p>
            </a>
          </li>
<!--------------------------------------------------------------------------------------------------              -->
            
            <li class="nav-item">
            <a href="?page=clientlist" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>clients</p>
            </a>
          </li>
<!--------------------------------------------------------------------------------------------------              -->
     <li class="nav-item">
            <a href="?page=auteurlist" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>auteur</p>
            </a>
          </li>
<!--------------------------------------------------------------------------------------------------              -->
            <li class="nav-item">
            <a href="?page=editeurlist" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>editeur</p>
            </a>
          </li>

<!--------------------------------------------------------------------------------------------------              -->
          <li class="nav-item">
            <a href="?page=emprunterlist" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>empreinter</p>
            </a>
          </li>
            
<!--------------------------------------------------------------------------------------------------              -->     
            <li class="nav-item">
            <a href="?page=publierlist" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>publier</p>
            </a>
            </li>
<!--------------------------------------------------------------------------------------------------              -->
            <li class="nav-item">
            <a href="?page=rendreliste" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>rendre</p>
            </a>
            </li>
            
<!--------------------------------------------------------------------------------------------------              -->
            
            <a href="../login/logout.php"><button>logout</button></a>
            
<!--------------------------------------------------------------------------------------------------              -->
            
            
        </ul>
      </nav> 
       
                 
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper  cadre">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          
          
          <?php
	      include "../includes/functions.php";
		  include "../includes/define.php";
	        @$page=securisation($_GET["page"]);
			//echo $route[$page].'-------';
			if(file_exists(@$route[$page])){
				//echo $route[$page];
				include $route[$page];
			}
		   /*	if($page=="livre"){
				include "../livre/livrelist.php";
			}
			else if($page=="biblio") {
				include "../bibliotheque/bibliolist.php";
			}
			else if($page=="user") {
				include "../user/usersliste.php";
			}
          else if($page=="client") {
				include "../client/clientlist.php";
			}
          else if($page=="auteur") {
				include "../auteur/auteurlist.php";
			}
          else if($page=="editeur") {
				include "../editeur/editeurlist.php";
			}
          else if($page=="empreinter") {
				include "../emprunter/empreintelist.php";
			}
          else if($page=="publier") {
				include "../publier/publierlist.php";
			}
          else if($page=="rendre") {
				include "../rendre/rendreliste.php";
			}
			*/
			
			
			
			
			
	   ?>
          
  
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../js/adminlte.min.js"></script>
    
<!--  ajouter par moi               -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
        <script src="jquery.color-2.1.2.js"></script>
        <script src="idiaamine.js"></script>
</body>
</html>
