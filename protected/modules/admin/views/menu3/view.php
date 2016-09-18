<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */

$this->breadcrumbs=array(
	'Menu3s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Menu3', 'url'=>array('index')),
	array('label'=>'Create Menu3', 'url'=>array('create')),
	array('label'=>'Update Menu3', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu3', 'url'=>array('admin')),
);
?>

<h1>View Menu3 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_id',
	),
)); ?>
