<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--<div class="container">-->

	<div class="span8">
		<?php

		$posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

		foreach ($posts as $post){
			?>


			<article>
				<div class="row">
					<div class="span2 blog-style-2">
						<h4 class="title-bg"><?= date('d/m/Y', $post->date); ?></h4>
<!--						<ul class="post-data">-->
<!--							<li><i class="icon-user"></i> <a href="#">Admin</a></li>-->
<!--							<li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>-->
<!--							<li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>, <a href="#">events</a></li>-->
<!--						</ul>-->
						<a class="btn btn-small btn-inverse" type="button" href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>">Читать далее</a>
					</div>
					<div class="span6">
						<h3 class="title-bg"><a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>"><?= $post->head; ?></a></h3>
						<p><?php echo explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content)[0];?></p>
					</div>
				</div>
			</article>
		<?php
		}

		?>
	</div>

	<div class="span4 sidebar">
		<h5 class="title-bg" style="margin-top: 0;">Реклама</h5>
	</div>






