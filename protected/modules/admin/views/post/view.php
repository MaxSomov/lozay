<?php
/* @var $this PostController */
/* @var $model Post */


?>

<h1><?php echo $model->head; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'head',
		'content',
		'date',
		'view',
		'adv',
	),
)); ?>
