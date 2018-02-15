<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="<?php echo asset('css/menu-layout.css')?>" type="text/css">
        <!--Conteúdo de cabeçalho-->
        
        <script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.js')?>"></script>
        <script type="text/javascript" src="<?php echo asset('js/menu.js')?>"></script>
        
    </head>
    <body>

        <div id="throbber" style="display:none; min-height:120px;"></div>
        <div id="noty-holder"></div>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                        <!--img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"-->
                    </a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                      <li>
                          <a href="{{url('/calendario')}}"><i></i>  Calendário </a>
                      </li>
                        <li>
                            <a href="#" data-toggle="collapse" data-target="#submenu-1"><i></i>Disciplinas <i class="fa fa-fw  pull-right"></i></a>
                            <ul id="submenu-1" class="collapse">
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> </a></li>
                            </ul>
                        </li>

                        </li>
                        <li>
                            <a href="#"><i></i> Agenda </a>
                        </li>
                        <li>
                            <a href="{{url('/horario')}}"><i></i> Horário das Aulas </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row" id="main" >
                        <div class="col-sm-12 col-md-12 well" id="content">

                            <!-- CONTEUDO //-->
                            @yield('conteudo')
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div><!-- /#wrapper -->

    </body>
</html>
