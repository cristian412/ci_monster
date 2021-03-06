<?php
if ( ! $this->session->has_userdata('id_users') ) redirect( URL.'users/sign_in' );

if(!isset($yield_data)) $yield_data = '<h1>Yield Data is Empty</h1>';
if(!isset($yield_navbar))  $yield_navbar  = '<li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>';
if(!isset($yield_sidevar)) $yield_sidebar = '<li> <a href="#"><i class="fa fa-th"></i> <span>YIELD_SIDEBAR</span></a>';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TITLE</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/skin-blue.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

  <!-- ============= NAVBAR ================================== -->

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <ul class="nav navbar-nav">
      <li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>
      <li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>
      <li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>
      <li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>
      <li><a href="#" data-toggle="control-sidebar"><span>YIELD_NAVBAR</span></a></li>
        <?=$yield_navbar?>
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li><a href="<?=URL?>users/sign_out" ><i class="fa fa-sign-out"></i> Sing Out</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- ============= SIDEBAR ================================== -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
          <li> <a href="#"><i class="fa fa-th"></i> <span>Menu1</span></a>
                    <?=$yield_sidebar?>

        </li>
      </ul>
    </section>
  </aside>
  <!-- ============= CONTENT ================================== -->
  <div class="content-wrapper">
    <section class="content">
          <?=$yield_data?>
    </section>
  </div>
  <!-- ============= FOOTER ================================== -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong>  reserved.
    <div class="pull-right hidden-xs"> <b>Version</b> 2.3.8 </div>
  </footer>
</div><!-- ./wrapper -->

</body>
</html>
