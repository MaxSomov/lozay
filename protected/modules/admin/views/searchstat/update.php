<?php
/* @var $this SearchstatController */
/* @var $model SearchStat */

$this->breadcrumbs=array(
	'Search Stats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SearchStat', 'url'=>array('index')),
	array('label'=>'Create SearchStat', 'url'=>array('create')),
	array('label'=>'View SearchStat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SearchStat', 'url'=>array('admin')),
);
?>

<h1>Update SearchStat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>