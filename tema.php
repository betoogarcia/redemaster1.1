<?php
   require("conexion.php");

   session_start();

   $query="SELECT nombre_tema from tema";

   $resultado=$mysqli->query($query);

  $user=$_SESSION['user'];
    if (isset($_SESSION['user'])){
        $user = $_SESSION['user'];
    }else{
 header('Location: index.html');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }

?>

<!DOCTYPE html>
<html lang="en" class="app">
   <head>
      <meta charset="utf-8" />
      <title>Buap | Social</title>
      <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--   <link rel="stylesheet" href="css/font.css" type="text/css" />
      <link rel="stylesheet" href="css/bootstrap_calendar.css" type="text/css" />

      <link rel="stylesheet" href="css/jquery-jvectormap-1.2.2.css" type="text/css" />
      -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/app.v1.css" type="text/css" />

      <!-- Latest compiled and minified CSS -->

      <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
   </head>
   <body class="">

    <?php

$user=$_SESSION['user'];

//echo "el nombre es: $num_trabajador <br>";


//echo "<a href='pagina4.php'> Cerrar sesion </a>";

?>
      <section class="vbox">
         <header class="bg-black dk header navbar navbar-fixed-top-xs">
            <div class="navbar-header aside-md"> <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a href="#" class="navbar-brand" data-toggle="fullscreen"><!--<img src="images/logo.png" class="m-r-sm">-->Social Buap</a> <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a> </div>
           
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
               
               
               <li class="dropdown">


                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="images/avatar.jpg">
                    <?php 
                if(isset($_SESSION['user'])){

              echo "$user"; ?> // <span class="thumb-sm avatar pull-left"> </span> <b class="caret"></b> </a>
                  <ul class="dropdown-menu animated fadeInRight">
                     <span class="arrow top"></span>
                     <li> <a href="#">Settings</a> </li>
                     <li> <a href="profile.html">Profile</a> </li>
                     <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                     <li> <a href="docs.html">Help</a> </li>
                     <li class="divider"></li>
                     <li> <a href="modal.lockme.html" data-toggle="ajaxModal" ><?php 
                echo "<a href='cerrarsesion.php?salir=1'><span class='glyphicon glyphicon-log-out'></span> Logout</a>";
                 if(isset($_REQUEST["salir"])){
                    //Borramos o destruimos la sesión "cliente".
                    unset($_SESSION["cliente"]);
                }
            }


                ?></a> </li>
                  </ul>
               </li>
            </ul>
         </header>
         <section>
            <section class="hbox stretch">
               <!-- .aside -->
               <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">
                  <section class="vbox">
                    
                     <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                           <!-- nav -->
                           <nav class="nav-primary hidden-xs">
                              <ul class="nav">
                                <li >
                                    <a href="#layout" ><i class="glyphicon glyphicon-user icon"> <b class="bg-primary dker"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span> <span>Usuarios</span> </a>
                                    <ul class="nav lt">
                                       <li > <a href="usuarios.php" > <i class="fa fa-angle-right"></i> <span>Administradores</span> </a> </li>
                                       <li > <a href="user.php" > <i class="fa fa-angle-right"></i> <span>Usuarios</span> </a> </li>
                                       
                                    </ul>
                                 </li>
                                    <li > <a href="publicaciones.php" > <i class="glyphicon glyphicon-list-alt icon"> <b class="bg-info"></b> </i> <span>Publicaciones</span> </a> </li>
                                 <li > <a href="admin.php" > <i class=" glyphicon glyphicon-chevron-left icon"> <b class="bg-info"></b> </i> <span>Volver</span> </a> </li>
                              </ul>
                           </nav>
                           <!-- / nav -->
                        </div>
                     </section>
                     
                  </section>
               </aside>
               <!-- /.aside -->
               <section id="content">
                  <section class="vbox">
                     <section class="scrollable">
                       <div class="row">
                        <div class="col-lg-12">
                          <div class="panel panel-default">
                            <div class="panel-heading">Datos Admin</div>


                                <div class="panel-body">
                                  <table  class="table table-hover" >
                                      <thead>

                                      <tr>
                                        
                                          <th data-field="name" data-sortable="true">Tema</th>
                                          <th data-field="state" data-checkbox="true">Modificar</a></th>
                                          <th data-field="state" data-checkbox="true">Eliminar</a></th>
                                      </tr>
                                      
                                      
                                      <tbody>
                                        <?php
                                      while ($row=$resultado->fetch_assoc()) {
                                
                                      ?>
                                      <tr>
                                        
                                        <td> <?php echo $row['nombre_tema']; ?></td>
                                        
                                        <td> <a href="modadmin.php?nombre_tema=<?php echo $row['nombre_tema'];?>" class="btn btn-info btn-lg ">
                                <span class="glyphicon glyphicon-heart-empty"></span>   </a></td>
                                              <td> <a href="eliminaradmin.php?nombre_tema=<?php echo $row['nombre_tema'];?>" class="btn btn-info btn-lg btn-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                              </a></td>
                                      </tr>

                                      <?php } ?>
                                      <tr><a href="nuevotema.html"class="btn btn-info btn-lg btn-success">
                                <span class="glyphicon glyphicon-plus"></span> Nuevo </a></tr>
                                      </tbody>

                                      </thead>

                                  </table>
                                </div>
                              </div>
                            </div>
                          </div><!--/.row-->


                     </section>
                  </section>
                  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
               </section>
               <aside class="bg-light lter b-l aside-md hide" id="notes">
                  <div class="wrapper">Notification</div>
               </aside>
            </section>
         </section>
      </section>
      <!-- Bootstrap --> <!-- App -->
      <script src="js/app.v1.js"></script>
<!--
      <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
      <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
      <script src="js/charts/flot/jquery.flot.min.js"></script>
      <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
      <script src="js/charts/flot/jquery.flot.resize.js"></script>
      <script src="js/charts/flot/jquery.flot.grow.js"></script>
      <script src="js/charts/flot/demo.js"></script>
      <script src="js/calendar/bootstrap_calendar.js"></script>
      <script src="js/calendar/demo.js"></script>
      <script src="js/sortable/jquery.sortable.js"></script>
      <script src="js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="js/jvectormap/demo.js"></script>
      <script src="js/app.plugin.js"></script>
       -->
   </body>
</html>