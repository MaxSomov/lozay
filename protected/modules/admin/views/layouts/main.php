<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lozay - Панель администратора</title>

    <!-- Bootstrap Core CSS -->
    <link href="/sb/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/sb/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/sb/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/sb/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
            <a class="navbar-brand" href="index.php?r=site/logout">На сайт</a>
        </div>
        <!-- Top Menu Items -->
<!--        <ul class="nav navbar-right top-nav">-->
<!--            <li class="dropdown">-->
<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b-->
<!--                        class="caret"></b></a>-->
<!--                <ul class="dropdown-menu message-dropdown">-->
<!--                    <li class="message-preview">-->
<!--                        <a href="#">-->
<!--                            <div class="media">-->
<!--                                    <span class="pull-left">-->
<!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
<!--                                    </span>-->
<!--                                <div class="media-body">-->
<!--                                    <h5 class="media-heading"><strong>John Smith</strong>-->
<!--                                    </h5>-->
<!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="message-preview">-->
<!--                        <a href="#">-->
<!--                            <div class="media">-->
<!--                                    <span class="pull-left">-->
<!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
<!--                                    </span>-->
<!--                                <div class="media-body">-->
<!--                                    <h5 class="media-heading"><strong>John Smith</strong>-->
<!--                                    </h5>-->
<!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="message-preview">-->
<!--                        <a href="#">-->
<!--                            <div class="media">-->
<!--                                    <span class="pull-left">-->
<!--                                        <img class="media-object" src="http://placehold.it/50x50" alt="">-->
<!--                                    </span>-->
<!--                                <div class="media-body">-->
<!--                                    <h5 class="media-heading"><strong>John Smith</strong>-->
<!--                                    </h5>-->
<!--                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
<!--                    <li class="message-footer">-->
<!--                        <a href="#">Read All New Messages</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="dropdown">-->
<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b-->
<!--                        class="caret"></b></a>-->
<!--                <ul class="dropdown-menu alert-dropdown">-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>-->
<!--                    </li>-->
<!--                    <li class="divider"></li>-->
<!--                    <li>-->
<!--                        <a href="#">View All</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--            <li class="dropdown">-->
<!--                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b-->
<!--                        class="caret"></b></a>-->
<!--                <ul class="dropdown-menu">-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>-->
<!--                    </li>-->
<!--                    <li class="divider"></li>-->
<!--                    <li>-->
<!--                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
<!--        </ul>-->
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="index.php?r=admin"><i class="fa fa-fw fa-dashboard"></i> Панель администратора</a>
                </li>
                <li>
                    <a href="index.php?r=admin/menu1"><i class="fa fa-fw fa-folder"></i> Меню 1</a>
                </li>
                <li>
                    <a href="index.php?r=admin/menu2"><i class="fa fa-fw fa-tag"></i> Меню 2</a>
                </li>
                <li>
                    <a href="index.php?r=admin/menu3"><i class="fa fa-fw fa-tags"></i> Меню 3</a>
                </li>
                <li>
                    <a href="index.php?r=admin/post"><i class="fa fa-fw fa-file-text"></i> Статьи</a>
                </li>
                <li>
                    <a href="bootstrap-elements.html"><i class="fa fa-fw fa-line-chart"></i> Статистика</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <?php
            echo $content;
            ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/sb/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/sb/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/sb/js/plugins/morris/raphael.min.js"></script>
<script src="/sb/js/plugins/morris/morris.min.js"></script>
<script src="/sb/js/plugins/morris/morris-data.js"></script>

</body>

</html>
