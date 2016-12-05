<?php
/* @var $this SearchstatController */
/* @var $model SearchStat */

$this->breadcrumbs=array(
	'Search Stats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SearchStat', 'url'=>array('index')),
	array('label'=>'Create SearchStat', 'url'=>array('create')),
	array('label'=>'Update SearchStat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SearchStat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SearchStat', 'url'=>array('admin')),
);
?>

<h1>View SearchStat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'keyword',
		'count',
		'last',
	),
)); ?>
