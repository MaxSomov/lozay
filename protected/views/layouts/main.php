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

	<link rel="stylesheet" href="/font-awesome-4.6.3/css/font-awesome.min.css">

	<script src="/mPurpose-master/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
	<div class="container">
		<div class="menuextras">
			<div class="extras">
<!--				<ul>-->
<!--					<li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>3 items</b></a></li>-->
<!--					<li>-->
<!--						<div class="dropdown choose-country">-->
<!--							<a class="#" data-toggle="dropdown" href="#"><img src="/mPurpose-master/img/flags/gb.png" alt="Great Britain"> UK</a>-->
<!--							<ul class="dropdown-menu" role="menu">-->
<!--								<li role="menuitem"><a href="#"><img src="/mPurpose-master/img/flags/us.png" alt="United States"> US</a></li>-->
<!--								<li role="menuitem"><a href="#"><img src="/mPurpose-master/img/flags/de.png" alt="Germany"> DE</a></li>-->
<!--								<li role="menuitem"><a href="#"><img src="/mPurpose-master/img/flags/es.png" alt="Spain"> ES</a></li>-->
<!--							</ul>-->
<!--						</div>-->
<!--					</li>-->
<!--					<li><a href="page-login.html">Login</a></li>-->
<!--				</ul>-->
			</div>
		</div>
		<nav id="mainmenu" class="mainmenu">
			<ul>
				<li class="logo-wrapper"><a href="index.php"><img src="/mPurpose-master/img/logo.jpg" height="90px" alt="Multipurpose Twitter Bootstrap Template"></a></li>
				<li>
					<a href="index.php"> <i class="fa fa-home"></i> Главная</a>
				</li>
				<?php
				$categories = Category::model()->findAll();
				foreach ($categories as $category){
					$subcategories = Subcategory::model()->findAllByAttributes(array("category_id"=>$category->id));
					if(count($subcategories)==0) {
						?>
						<li>
							<a href="index.php?r=category/view&id=<?php echo $category->id; ?>"><?php echo $category->name; ?></a>
						</li>
						<?php
					}
					else {
						?>
						<li class="has-submenu">
							<a href="index.php?r=category/view&id=<?php echo $category->id; ?>"><?php echo $category->name; ?> <i class="fa fa-angle-down"></i> </a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner">
									<ul>
									<?php
									foreach ($subcategories as $subcategory){
										?>
										<li><a href="index.php?r=subcategory/view&id=<?php echo $subcategory->id; ?>"><?php echo $subcategory->name; ?></a></li>
										<?php
									}
									?>
									</ul>
								</div>
							</div>
						</li>
				<?php
					}
				}
				?>
			</ul>
		</nav>
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