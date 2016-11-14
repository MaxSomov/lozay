<?php
/* @var $this Menu2Controller */
/* @var $model Menu2 */

$this->breadcrumbs=array(
	'Menu2s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Menu2', 'url'=>array('index')),
	array('label'=>'Create Menu2', 'url'=>array('create')),
	array('label'=>'Update Menu2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu2', 'url'=>array('admin')),
);
?>

<h1>View Menu2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_id',
	),
)); ?>
