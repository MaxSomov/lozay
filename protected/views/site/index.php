<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<div class="container">
<div class="row">
	<div class="col-md-3"></div>

	<div class="col-md-6">
		<?php

		$posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

		foreach ($posts as $post){
			?>
		<div class="blog-post">
			<div class="post-title">
				<h2><?php echo $post->head; ?></h2>
			</div>
			<div class="post-summary">
				<p>
				<?php echo explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content[0]);?>
				</p>
			</div>
			<div class="post-more">
				<a href="index.php?r=post/view&id=<?php echo $post->id; ?>" class="btn btn-small">Читать далее</a>
			</div>
		</div>
		<?php
		}

		?>
	</div>

	<div class="col-md-3">
		<div class="blog-post blog-single-post">
		Реклама
		</div>
	</div>
</div>
</div>

<!--<h1>Welcome to <i>--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</i></h1>-->
<!---->
<!--<p>Congratulations! You have successfully created your Yii application.</p>-->
<!---->
<!--<p>You may change the content of this page by modifying the following two files:</p>-->
<!--<ul>-->
<!--	<li>View file: <code>--><?php //echo __FILE__; ?><!--</code></li>-->
<!--	<li>Layout file: <code>--><?php //echo $this->getLayoutFile('main'); ?><!--</code></li>-->
<!--</ul>-->
<!---->
<!--<p>For more details on how to further develop this application, please read-->
<!--the <a href="http://www.yiiframework.com/doc/">documentation</a>.-->
<!--Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,-->
<!--should you have any questions.</p>-->
