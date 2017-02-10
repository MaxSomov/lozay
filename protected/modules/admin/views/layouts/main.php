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
<!--    <link href="/sb/css/sb-admin.css" rel="stylesheet">-->

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

<div class="alert alert-info" role="alert">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?= Yii::app()->createUrl('admin'); ?>">Панель администратора</a></li>
        <li role="presentation"><a href="<?= Yii::app()->createUrl('site/logout'); ?>">На сайт</a></li>
        <li role="presentation"><a href="#">Сообщения</a></li>
        <li role="presentation"><a href="<?= Yii::app()->createUrl('admin/searchstat'); ?>">Статистика</a></li>
        <li role="presentation"><a href="<?= Yii::app()->createUrl('admin/post'); ?>">Статьи</a></li>
        <li role="presentation"><a href="<?= Yii::app()->createUrl('admin/menu4'); ?>">Второе меню</a> </li>
        <li role="presentation"><!--LiveInternet counter--><script type="text/javascript">
                document.write("<a href='//www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t52.6;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                            screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число просмотров и"+
                    " посетителей за 24 часа' "+
                    "border='0' width='88' height='31'><\/a>")
            </script><!--/LiveInternet--></li>
        <li role="presentation"><a href="<?= Yii::app()->createUrl('admin/default/log'); ?>">Логи</a> </li>
    </ul>
</div>

<?php
echo $content;
?>




</body>

</html>
