<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */

$this->breadcrumbs=array(
	'Menu4s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Menu4', 'url'=>array('index')),
	array('label'=>'Create Menu4', 'url'=>array('create')),
	array('label'=>'Update Menu4', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu4', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu4', 'url'=>array('admin')),
);
?>

<h1>View Menu4 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'menu1',
		'menu2',
		'menu3',
	),
)); ?>
