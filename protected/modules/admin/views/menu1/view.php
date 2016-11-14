<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */

$this->breadcrumbs=array(
	'Menu1s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Menu1', 'url'=>array('index')),
	array('label'=>'Create Menu1', 'url'=>array('create')),
	array('label'=>'Update Menu1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu1', 'url'=>array('admin')),
);
?>

<h1>View Menu1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
