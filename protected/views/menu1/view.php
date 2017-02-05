<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */


?>

<div class="container" style="padding-left: 30px;">

<ol class="breadcrumb">
    <li> <a href="http://lozay.ru">Главная</a></li>
    <li class="active"><?= $model->name; ?></li>
</ol>

<h1 class="title-bg"><?= $model->name; ?></h1>

<div class="span12 btn-group" style="margin-bottom: 40px; margin-left: 0;">
	<?php
	$nav = Menu4::model()->findAllByAttributes(array("menu1" => $model->id));
	if (count($nav)) {
		?>
		<?php
		foreach ($nav as $item) {
			?>
			<a class="btn btn-default btn-large" href="<?= Yii::app()->createUrl('menu4/view', array('id' => $item->id)); ?>"><?php echo $item->name; ?></a>
			<?php
		}
		?>
		<?php
	}
	?>
</div>

</div>

<div class="span8">
	<?php

	if (count($posts)==0) echo "В данном разделе статей нет";
	else {
	//            $posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

	foreach ($posts as $post) {
		?>
		<article>
			<h3 class="title-bg" style="background: white; margin-bottom: 0;"><a href=""><?= $post->head; ?></a></h3>
			<div class="post-content" style="background: white;">

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
	<div class="pagination">
		<?php

		$this->widget('CLinkPager', array(
			'pages' => $pages,
			'header' => "",
			'firstPageLabel' => '<<',
			'prevPageLabel' => '<',
			'nextPageLabel' => '>',
			'lastPageLabel' => '>>',
			'maxButtonCount' => '10',
			'selectedPageCssClass' => 'active',
			'htmlOptions' => array(
				'class' => ''
			),
		));
		}
		?>
	</div>
</div>

<div class="span4 sidebar">
	<h5 class="title-bg" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(1); echo $adv->content; ?></h5>
    <h5 class="title-bg" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(2); echo $adv->content; ?></h5>

</div>
