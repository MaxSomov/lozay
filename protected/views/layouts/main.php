<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Lozay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#3376BC">

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

    <link rel="stylesheet" href="/css/style.css">

    <!-- JS
    ================================================== -->
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/bootstrap.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.prettyPhoto.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.flexslider.js"></script>
    <script src="/WG%20Piccolo%20Theme/js/jquery.custom.js"></script>
</head>

<body>
<div class="color-bar-1"></div>
<div class="color-bar-2 color-bg"></div>

<div class="back">
    <div class="container">
        <div class="row header back"><!-- Begin Header -->

            <!-- Logo
            ================================================== -->
            <div class="span8">
                <a href="http://lozay.ru/"><img src="/WG%20Piccolo%20Theme/img/logo.jpg" width="200px" alt=""/></a>
            </div>

            <div class="span4">
                <section class="search">
                    <div class="input-append">
                        <form action="<?= Yii::app()->createUrl('/site/page', array('view' => 'search')); ?>"
                              method="post">
                            <input name="keyword" id="appendedInputButton" size="16" type="text" placeholder="Поиск...">
                            <button class="btn" type="submit"><i class="icon-search"></i></button>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Main Navigation
            ================================================== -->
            <div class="span12">
                <div class="span12 navigation mynav">
                    <div class="navbar hidden-phone">

                        <!--                        @todo: ul margin-right:0 не работает в css!!-->

                        <ul class="nav navul">
                            <li>
                                <a href="http://lozay.ru/" class="bold">Главная</a>
                            </li>

                            <?php
                            $menu1s = Menu1::model()->findAll();
                            foreach ($menu1s as $menu1) {
                                $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
                                if (count($menu2s) == 0) {
                                    ?>
                                    <li>
                                        <a class="bold"
                                           href="<?php echo Yii::app()->createUrl('menu1/view', array('id' => $menu1->id)); ?>"><?php echo $menu1->name; ?></a>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="dropdown">
                                        <a href="<?php echo Yii::app()->createUrl('menu1/view', array('id' => $menu1->id)); ?>"
                                           class="dropdown-toggle bold"
                                           data-toggle="dropdown"><?php echo $menu1->name; ?> <b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-level">
                                            <?php
                                            foreach ($menu2s as $menu2) {
                                                $menu3s = Menu3::model()->findAllByAttributes(array("parent_id" => $menu2->id));
                                                if (count($menu3s) == 0) {
                                                    ?>
                                                    <li>
                                                        <a class="bold"
                                                           href="<?php echo Yii::app()->createUrl('menu2/view', array('id' => $menu2->id)); ?>"><?php echo $menu2->name; ?></a>
                                                    </li>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <li class="dropdown-submenu" onmouseout="out(<?= $menu2->id; ?>)"
                                                        onmouseover="over(<?= $menu2->id; ?>)">
                                                        <a href="<?php echo Yii::app()->createUrl('menu2/view', array('id' => $menu2->id)); ?>"
                                                           class="dropdown-toggle bold"
                                                           data-toggle="dropdown"><?php echo $menu2->name; ?></a>
                                                        <ul class="dropdown-menu" id="parent<?= $menu2->id; ?>"
                                                            style="display: none;">
                                                            <?php
                                                            foreach ($menu3s as $menu3) {
                                                                ?>
                                                                <li>
                                                                    <a class="bold"
                                                                       href="<?php echo Yii::app()->createUrl('menu3/view', array('id' => $menu3->id)); ?>"><?php echo $menu3->name; ?></a>
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
                    <form action="#" id="mobile-nav" class="visible-phone">
                        <div class="mobile-nav-select">
                            <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                                <option value="">Меню...</option>
                                <option value="http://lozay.ru">Главная</option>
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
                <ul class="social-icons icons">
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
<!--                                полоска футера справа -->
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

<script src="/js/scripts.js">
</script>