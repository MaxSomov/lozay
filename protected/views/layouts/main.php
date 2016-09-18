<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Lozay</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css">
	<link rel="stylesheet" href="/mPurpose-master/css/icomoon-social.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/mPurpose-master/css/leaflet.css" />
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="/mPurpose-master/css/leaflet.ie.css" />
	<![endif]-->
	<link rel="stylesheet" href="/mPurpose-master/css/main.css">

	<link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css">

	<link rel="stylesheet" href="/font-awesome-4.6.3/css/font-awesome.min.css">

	<script src="/mPurpose-master/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style>
	.dropdown-submenu {
		position: relative;
	}

	.navbar-default{
		background: #fff;
	}
	
	.navbar-nav li a {
		background: #fff;
	}

	.navbar-nav li a:hover {
		background: #3376BC;
	}

	.dropdown-submenu>.dropdown-menu {
		top: 0;
		left: 100%;
		margin-top: -6px;
		margin-left: -1px;
		-webkit-border-radius: 0 6px 6px 6px;
		-moz-border-radius: 0 6px 6px;
		border-radius: 0 6px 6px 6px;
	}

	.dropdown-submenu:hover>.dropdown-menu {
		display: block;
	}

	.dropdown-submenu>a:after {
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
	}

	.dropdown-submenu:hover>a:after {
		border-left-color: #fff;
	}

	.dropdown-submenu.pull-left {
		float: none;
	}

	.dropdown-submenu.pull-left>.dropdown-menu {
		left: -100%;
		margin-left: 10px;
		-webkit-border-radius: 6px 0 6px 6px;
		-moz-border-radius: 6px 0 6px 6px;
		border-radius: 6px 0 6px 6px;
	}
	.navbar-right li a{
		font-size: 20px;
	}
 </style>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://ok.ru" target="_blank"><i class="fa fa-odnoklassniki-square"></i> </a></li>
				<li><a href=""><i class="fa fa-vk"></i> </a> </li>
				<li><a href=""><i class="fa fa-youtube"></i> </a> </li>
				<li><a href=""><i class="fa fa-twitter-square"></i> </a> </li>
			</ul>
			<ul class="nav navbar-nav">
				<li><img src="/mPurpose-master/img/logo.jpg" height="50px"></li>
				<li class=""><a href="index.php">Главная</a></li>
				<?php
				$menu1s = Menu1::model()->findAll();
				foreach ($menu1s as $menu1){
					$menu2s = Menu2::model()->findAllByAttributes(array("parent_id"=>$menu1->id));
					if(count($menu2s)==0){
						?>
						<li><a href="index.php?r=menu1/view&id=<?php echo $menu1->id; ?>"><?php echo $menu1->name; ?></a> </li>
				<?php
					}
					else{
						?>
						<li>
							<a href="index.php?r=menu1/view&id=<?php echo $menu1->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu1->name; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu multi-level">
								<?php
								foreach ($menu2s as $menu2){
									$menu3s = Menu3::model()->findAllByAttributes(array("parent_id"=>$menu2->id));
									if(count($menu3s)==0){
										?>
										<li><a href="index.php?r=menu2/view&id=<?php echo $menu2->id; ?>"><?php echo $menu2->name; ?></a></li>
										<?php
									}
									else{
										?>
										<li class="dropdown-submenu">
											<a href="index.php?r=menu2/view&id=<?php echo $menu2->id; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu2->name; ?></a>
											<ul class="dropdown-menu">
												<?php
												foreach ($menu3s as $menu3){
													?>
													<li><a href="index.php?r=menu3/view&id=<?php echo $menu3->id; ?>"><?php echo $menu3->name; ?></a></li>
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

<div class="container">
	<div class="navbar-template text-center">
		<h1> </h1>
		<p class="lead text-info"> <br> </p>
		<a target="_blank" href="http://bootsnipp.com/snippets/featured/multi-level-dropdown-menu-bs3"> </a>
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
			<div class="col-footer col-md-4 col-xs-6">
				<h3>Контакты</h3>
				<p class="contact-us-details">
					<i class="fa fa-map-marker"></i> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
					<i class="fa fa-phone"></i>  +44 123 654321<br/>
					<i class="fa fa-envelope"></i> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>

					<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

					<!-- VK Widget -->
				<div id="vk_contact_us"></div>
				<script type="text/javascript">
					VK.Widgets.ContactUs("vk_contact_us", {redesign: 1}, 14317916);
				</script>

				</p>
			</div>
			<div class="col-footer col-md-2 col-xs-6">
				<h3>Социальные сети</h3>
				<h1 class="col-md-4"><a href="http://vk.com" target="_blank"><i class="fa fa-vk"></i> </a> </h1>
				<h1 class="col-md-4"><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i> </a> </h1>
				<h1 class="col-md-4"><a href="http://ok.ru" target="_blank"><i class="fa fa-odnoklassniki"></i> </a> </h1>
				<h1 class="col-md-4"><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i> </a> </h1>
				<h1 class="col-md-4"><a href="http://youtube.com" target="_blank"><i class="fa fa-youtube"></i> </a> </h1>
				<h1 class="col-md-4"><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i> </a> </h1>
			</div>
			<div class="col-footer col-md-4">
				<h3>Карта</h3>
				<p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9552.973115404437!2d44.93923691513467!3d53.23141520040967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1668c60796f8f45a!2z0JfQuNC80LA!5e0!3m2!1sru!2sru!4v1471776489310" width="auto" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="footer-copyright">
					© 2016 Lozay.
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