<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!--<style>-->
<!--    #sticky {-->
<!--        position: fixed;-->
<!--        top: 190px;-->
<!--        right: 0px;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<script>-->
<!--    window.onscroll = function () {-->
<!--        if(window.pageYOffset < 170){-->
<!--            var str = 190 - window.pageYOffset+"px";-->
<!--            document.getElementById('sticky').style.top = str;-->
<!--        }-->
<!--        else {-->
<!--            document.getElementById('sticky').style.top = "20px";-->
<!--        }-->
<!--    }-->
<!--</script>-->


<!--<div class="container">-->
<div class="main">
	<div class="span8">
		<?php

		$posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

		foreach ($posts as $post){
			?>


			<article >
				<h3 class="title-bg back"><a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>"><?= $post->head; ?></a></h3>
				<div class="post-content back">

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

	<div class="span4 sidebar" id = "sticky">
		<h5 class="adv"><?php $adv = Adv::model()->findByPk(1); echo $adv->content; ?></h5>
        <h5 class="adv"><?php $adv = Adv::model()->findByPk(2); echo $adv->content; ?></h5>
    </div>

</div>