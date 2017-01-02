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


			<article >
				<h3 class="title-bg" style="margin-bottom: 0; background: white;"><a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>"><?= $post->head; ?></a></h3>
				<div class="post-content" style="background-color: #fff;">

					<div class="post-body">
						<?= $post->content; ?>
					</div>

					<div class="post-summary-footer">
						<ul class="post-data">
							<li><a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>" class="btn btn-mini btn-default hidden-phone" type="button">Читать далее</a></li>
							<li><i class="icon-calendar"></i> <?= date('d/m/Y', $post->date); ?></li>
						</ul>
					</div>
				</div>
			</article>
			<hr>
		<?php
		}

		?>
	</div>

	<div class="span4 sidebar">
		<h5 class="title-bg" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(1); echo $adv->content; ?></h5>
        <h5 class="title-bg" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(2); echo $adv->content; ?></h5>
    </div>






