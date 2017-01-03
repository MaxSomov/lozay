<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Lozay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3376BC">

    <!-- CSS
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/bootstrap.css">
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/jquery.lightbox-0.5.css">
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/custom-styles.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/style-ie.css"/>
    <![endif]-->

    <!-- CSS
================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/bootstrap.css">
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/prettyPhoto.css"/>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/flexslider.css"/>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/custom-styles.css">
    <link rel="stylesheet" href="/font-awesome-4.6.3/css/font-awesome.min.css">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="/WG%20Piccolo%20Theme/css/style-ie.css"/>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <!--    <link rel="shortcut icon" href="img/favicon.ico">-->
    <!--    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">-->
    <!--    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">-->
    <!--    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">-->

    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/bootstrap.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.prettyPhoto.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.flexslider.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#btn-blog-next").click(function () {
                $('#blogCarousel').carousel('next')
            });
            $("#btn-blog-prev").click(function () {
                $('#blogCarousel').carousel('prev')
            });

            $("#btn-client-next").click(function () {
                $('#clientCarousel').carousel('next')
            });
            $("#btn-client-prev").click(function () {
                $('#clientCarousel').carousel('prev')
            });

        });

        $(window).load(function () {

            $('.flexslider').flexslider({
                animation: "slide",
                slideshow: true,
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });

    </script>


</head>

<body>
<div class="color-bar-1"></div>
<div class="color-bar-2 color-bg"></div>

<div style="background: white; margin-bottom: 50px;">
    <div class="container">
        <div class="row header" style="margin-bottom: 0;"><!-- Begin Header -->

            <!-- Logo
            ================================================== -->
            <div class="span8">
                <a style="" href="http://lozay/"><img src="/WG%20Piccolo%20Theme/img/logo.jpg" width="200px"
                                                      alt=""/></a>
                <!--            <h5>Big Things... Small Packages</h5>-->
            </div>


            <div class="span4">
                <section style="margin-top: 45px; align-content: right;">
                    <div class="input-append">
                        <form action="<?= Yii::app()->createUrl('/site/page', array('view' => 'search')); ?>"
                              method="post">
                            <input name="keyword" id="appendedInputButton" size="16" type="text"
                                   placeholder="Поиск...">
                            <button class="btn" type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </section>
                <!--            <ul class="social-icons" style="font-size: 20pt; text-align: right;">-->
                <!--                <li><a href="https://vk.com/lozay" target="_blank"><i class="fa fa-vk"></i> </a></li>-->
                <!--                <li><a href="https://www.twitch.tv/lozay" target="_blank"><i class="fa fa-twitch"></i> </a></li>-->
                <!--                <li><a href="https://www.youtube.com/channel/UCoZf_-sYggPDXHiiOnhdvYw" target="_blank"><i class="fa fa-youtube"></i> </a></li>-->
                <!--                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i> </a></li>-->
                <!--            </ul>-->
            </div>

            <!-- Main Navigation
            ================================================== -->
            <div class="span24" style="">
                <div class="span8 navigation" style="margin-top: 5px; margin-bottom: 0; margin-left: 0;">
                    <div class="navbar hidden-phone" style="">

                        <ul class="nav" style="margin-right: 0;">
                            <li>
                                <a href="http://lozay/">Главная</a>
                            </li>

                            <?php
                            $menu1s = Menu1::model()->findAll();
                            foreach ($menu1s as $menu1) {
                                $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
                                if (count($menu2s) == 0) {
                                    ?>
                                    <li>
                                        <a href="<?php echo Yii::app()->createUrl('menu1/view', array('id' => $menu1->id)); ?>"><?php echo $menu1->name; ?></a>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="dropdown">
                                        <a href="<?php echo Yii::app()->createUrl('menu1/view', array('id' => $menu1->id)); ?>"
                                           class="dropdown-toggle"
                                           data-toggle="dropdown"><?php echo $menu1->name; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-level">
                                            <?php
                                            foreach ($menu2s as $menu2) {
                                                $menu3s = Menu3::model()->findAllByAttributes(array("parent_id" => $menu2->id));
                                                if (count($menu3s) == 0) {
                                                    ?>
                                                    <li>
                                                        <a href="<?php echo Yii::app()->createUrl('menu2/view', array('id' => $menu2->id)); ?>"><?php echo $menu2->name; ?></a>
                                                    </li>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li class="dropdown-submenu" onmouseout="out(<?= $menu2->id; ?>)" onmouseover="over(<?= $menu2->id; ?>)">
                                                        <a  href="<?php echo Yii::app()->createUrl('menu2/view', array('id' => $menu2->id)); ?>"
                                                           class="dropdown-toggle"
                                                           data-toggle="dropdown"><?php echo $menu2->name; ?></a>
                                                        <ul class="dropdown-menu" id="parent<?= $menu2->id; ?>" style="display: none;">
                                                            <?php
                                                            foreach ($menu3s as $menu3) {
                                                                ?>
                                                                <li>
                                                                    <a href="<?php echo Yii::app()->createUrl('menu3/view', array('id' => $menu3->id)); ?>"><?php echo $menu3->name; ?></a>
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

                    </div>

                    <!-- Mobile Nav
                    ================================================== -->
                    <form action="#" id="mobile-nav" class="visible-phone" style="margin-left: 10%;">
                        <div class="mobile-nav-select">
                            <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                                <option value="">Меню...</option>
                                <option value="http://lozay">Главная</option>
                                <?php
                                foreach ($menu1s as $menu1) {
                                    $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
                                    ?>
                                    <option
                                        value="<?php echo Yii::app()->createUrl('menu1/view', array('id' => $menu1->id)); ?>"><?php echo $menu1->name; ?></option>
                                    <?php
                                    foreach ($menu2s as $menu2) {
                                        $menu3s = Menu3::model()->findAllByAttributes(array("parent_id" => $menu2->id));
                                        ?>
                                        <option
                                            value="<?php echo Yii::app()->createUrl('menu2/view', array('id' => $menu2->id)); ?>">
                                            - <?php echo $menu2->name; ?></option>
                                        <?php
                                        foreach ($menu3s as $menu3) {
                                            ?>
                                            <option
                                                value="<?php echo Yii::app()->createUrl('menu3/view', array('id' => $menu3->id)); ?>">
                                                - - <?php echo $menu3->name; ?></option>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </form>

                </div>



            </div>

        </div><!-- End Header -->
    </div>
</div>


<div class="container">


    <!-- Blog Content
    ================================================== -->
    <div class="row">

        <?= $content; ?>

    </div>

</div> <!-- End Container -->

<!-- Footer Area
    ================================================== -->
<div class="footer-container"><!-- Begin Footer -->
    <div class="container">
        <div class="row footer-row">
            <div class="span3 footer-col">
                <h5>Контакты</h5>
                <ul class="social-icons" style="font-size: 30pt;">
                    <li><a href="https://vk.com/lozay" target="_blank"><i class="fa fa-vk"></i> </a></li>
                    <li><a href="https://www.twitch.tv/lozay" target="_blank"><i class="fa fa-twitch"></i> </a></li>
                    <li><a href="https://www.youtube.com/channel/UCoZf_-sYggPDXHiiOnhdvYw" target="_blank"><i
                                class="fa fa-youtube"></i> </a></li>
                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i> </a></li>
                </ul>
            </div>
            <div class="span3 footer-col">
                <h5><?php $footer = Footer1::model()->findByPk(1);
                    if (isset($footer)) echo $footer->head; ?></h5>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
            <div class="span3 footer-col">
                <h5><?php $footer = Footer2::model()->findByPk(1);
                    if (isset($footer)) echo $footer->head; ?></h5>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
            <div class="span3 footer-col">
                <h5><?php $footer = Footer3::model()->findByPk(1);
                    if (isset($footer)) echo $footer->head; ?></h5>
                <?php if (isset($footer)) echo $footer->content; ?>
            </div>
        </div>

        <div class="row"><!-- Begin Sub Footer -->
            <div class="span12 footer-col footer-sub">
                <div class="row no-margin">
                    <div class="span6"><span class="left">© <?php echo date('Y', time()); ?> Lozay.</span></div>
                    <div class="span6">
                            <span class="right">
<!--                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>-->
                            </span>
                    </div>
                </div>
            </div>
        </div><!-- End Sub Footer -->

    </div>
</div><!-- End Footer -->

<!-- Scroll to Top -->
<div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>

<script>
    function over(id) {
        document.getElementById('parent' + id).removeAttribute('style');
        document.getElementById('parent' + id).setAttribute('style', 'display: block');
    }

    function out(id) {
        document.getElementById('parent' + id).removeAttribute('style');
        document.getElementById('parent' + id).setAttribute('style', 'display: none');
    }
</script>