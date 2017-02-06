<?php
/* @var $this Menu3Controller */
/* @var $model Menu4 */

if($model->menu3 == 0){
    if($model->menu2 == 0){
        $m1 = Menu1::model()->findByPk($model->menu1);
        $m2 = 0;
        $m3 = 0;
    }
    else {
        $m2 = Menu2::model()->findByPk($model->menu2);
        $m1 = Menu1::model()->findByPk($m2->parent_id);
        $m3 = 0;
    }
}
else{
    $m3 = Menu3::model()->findByPk($model->menu3);
    $m2 = Menu2::model()->findByPk($m3->parent_id);
    $m1 = Menu1::model()->findByPk($m2->parent_id);
}

?>

<div class="container" style="padding-left: 30px;">

<ol class="breadcrumb">
    <li><a href="http://lozay">Главная</a> </li>
    <li><a href="<?= Yii::app()->createUrl('menu1/view', array('id'=>$m1->id)); ?>"><?= $m1->name; ?></a> </li>
    <li><a href="<?= Yii::app()->createUrl('menu2/view', array('id'=>$m2->id)); ?>"><?= $m2->name; ?></a> </li>
    <li><a href="<?= Yii::app()->createUrl('menu3/view', array('id'=>$m3->id)); ?>"><?= $m3->name; ?></a> </li>
    <li class="active"><?= $model->name; ?></li>
</ol>

<h1 class="title-bg" style="margin-bottom: 5px;"><?= $m3->name; ?></h1>


<div class="span12 btn-group" style="margin-bottom: 40px; margin-left: 0;">
    <?php
    $nav = Menu4::model()->findAllByAttributes(array("menu3" => $m3->id));
    if (count($nav)) {
        ?>
        <?php
        foreach ($nav as $item) {
            ?>
            <a class="btn <?php if ($item->id == $model->id) echo "btn-default"; else echo "btn-primary"; ?>" href="<?= Yii::app()->createUrl('menu4/view', array('id' => $item->id)); ?>"><?php echo $item->name; ?></a>
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
    <h5 class="" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(1); echo $adv->content; ?></h5>
    <h5 class="" style="margin-top: 0;"><?php $adv = Adv::model()->findByPk(2); echo $adv->content; ?></h5>

</div>