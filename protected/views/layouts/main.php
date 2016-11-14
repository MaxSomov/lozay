<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Lozay</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css">
    <link rel="stylesheet" href="/mPurpose-master/css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/mPurpose-master/css/leaflet.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/mPurpose-master/css/leaflet.ie.css"/>
    <![endif]-->
    <link rel="stylesheet" href="/mPurpose-master/css/main.css">

    <link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css">

    <link rel="stylesheet" href="/font-awesome-4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/template-blue.css">

    <script src="/mPurpose-master/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .navbar-default {
            background: #fff;
            height: 50px;
        }

        .navbar-nav li a {
            background: #fff;
            font-size: auto;
        }

        .navbar-nav {
            height: 50px;

        }

        .navbar-nav li a {
            height: 48px;
            font-size: 17px;

        }

        .navbar-nav li a:hover {
            background: #fff;
            color: #3376BC;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -6px;
            margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px;
            -moz-border-radius: 0 6px 6px;
            border-radius: 0 6px 6px 6px;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }

        .dropdown-submenu > a:after {
            display: block;
            content: " ";
            float: right;
            width: 0;
            height: 0;
            border-color: transparent;
            border-style: solid;
            border-width: 5px 0 5px 5px;
            border-left-color: #3376BC;
            margin-top: 5px;
            margin-right: -10px;
            border-left-color: #777;
        }

        .dropdown-submenu:hover > a:after {
            border-left-color: #3376BC;
        }

        .dropdown-submenu.pull-left {
            float: none;
        }

        .navbar-nav > li > a{
            color: #000;
        }

        .dropdown-submenu.pull-left > .dropdown-menu {
            left: -100%;
            margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px;
            -moz-border-radius: 6px 0 6px 6px;
            border-radius: 6px 0 6px 6px;
        }

        a{
            ;
        }
    </style>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->
<div class="white" style="background: white">
    <img src="/mPurpose-master/img/logo.jpg" height="80px" style="margin-left: 120px">
    <form class="col-md-3" style="float: right; margin-top: 20px;" method="post" action="<?= Yii::app()->createUrl('/site/page', array('view'=>'search')); ?>">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i> </span>
            <input name="keyword" type="text" class="form-control" id="inputGroupSuccess3" aria-describedby="inputGroupSuccess3Status" placeholder="Поиск">
<!--            <input type="submit" value="s">-->
        </div>
    </form>
</div>


<!-- Navigation & Logo-->




<div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>

        <style>
            .navbar-right > li > a > i{
                height: 50px;
            }
        </style>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right"">
                <li style="vertical-align: middle;"><a style="vertical-align: middle; width: 50px;" href="https://ok.ru" target="_blank"><i style="vertical-align: middle; position: absolute; top: 8px; left: 10px;" class="fa fa-odnoklassniki-square fa-2x"></i> </a></li>
                <li><a href="" style="vertical-align: middle; width: 50px;"><i style="vertical-align: middle; position: absolute; top: 8px; left: 10px;" class="fa fa-vk fa-2x" ></i> </a></li>
                <li><a href="" style="vertical-align: middle; width: 50px;"><i style="vertical-align: middle; position: absolute; top: 8px; left: 10px;" class="fa fa-youtube fa-2x" ></i> </a></li>
                <li><a href="" style="vertical-align: middle; width: 50px;"><i style="vertical-align: middle; position: absolute; top: 8px; left: 10px;" class="fa fa-twitter-square fa-2x"></i> </a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li></li>
                <li class=""><a href="http://lozay/<?php /*echo Yii::app()->createUrl(""); */?>">Главная</a></li>
                <?php
                $menu1s = Menu1::model()->findAll();
                foreach ($menu1s as $menu1) {
                    $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
                    if (count($menu2s) == 0) {
                        ?>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('menu1/view', array('id'=>$menu1->id)); ?>"><?php echo $menu1->name; ?></a>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('menu1/view', array('id'=>$menu1->id)); ?>" class="dropdown-toggle"
                               data-toggle="dropdown"><?php echo $menu1->name; ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-level">
                                <?php
                                foreach ($menu2s as $menu2) {
                                    $menu3s = Menu3::model()->findAllByAttributes(array("parent_id" => $menu2->id));
                                    if (count($menu3s) == 0) {
                                        ?>
                                        <li>
                                            <a href="<?php echo Yii::app()->createUrl('menu2/view', array('id'=>$menu2->id)); ?>"><?php echo $menu2->name; ?></a>
                                        </li>
                                        <?php
                                    } else {
                                        ?>
                                        <li class="dropdown-submenu">
                                            <a href="<?php echo Yii::app()->createUrl('menu2/view', array('id'=>$menu2->id)); ?>"
                                               class="dropdown-toggle"
                                               data-toggle="dropdown"><?php echo $menu2->name; ?></a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($menu3s as $menu3) {
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo Yii::app()->createUrl('menu3/view', array('id'=>$menu3->id)); ?>"><?php echo $menu3->name; ?></a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<!--<div class="section">-->
<?php
echo $content;
?>
<!--</div>-->

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3><?php $footer = Footer1::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Социальные сети</h3>
                <h1 class="col-md-4"><a href="http://vk.com" target="_blank"><i class="fa fa-vk"></i> </a></h1>
                <h1 class="col-md-4"><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i> </a>
                </h1>
                <h1 class="col-md-4"><a href="http://ok.ru" target="_blank"><i class="fa fa-odnoklassniki"></i> </a>
                </h1>
                <h1 class="col-md-4"><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i> </a>
                </h1>
                <h1 class="col-md-4"><a href="http://youtube.com" target="_blank"><i class="fa fa-youtube"></i> </a>
                </h1>
                <h1 class="col-md-4"><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i> </a>
                </h1>
            </div>
            <div class="col-footer col-md-3">
                <h3><?php $footer = Footer2::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
            <div class="col-footer col-md-3">
                <h3><?php $footer = Footer3::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="footer-copyright">
                    © <?php echo date('Y', time()); ?> Lozay.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="/mPurpose-master/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="/mPurpose-master/js/jquery.fitvids.js"></script>
<script src="/mPurpose-master/js/jquery.sequence-min.js"></script>
<script src="/mPurpose-master/js/jquery.bxslider.js"></script>
<script src="/mPurpose-master/js/main-menu.js"></script>
<script src="/mPurpose-master/js/template.js"></script>

</body>
</html>