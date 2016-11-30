<?php
/* @var $this Footer1Controller */
/* @var $model Footer1 */

$this->breadcrumbs=array(
	'Footer1s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Footer1', 'url'=>array('index')),
	array('label'=>'Create Footer1', 'url'=>array('create')),
	array('label'=>'Update Footer1', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Footer1', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Footer1', 'url'=>array('admin')),
);
?>

<h1>View Footer1 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'head',
		'content',
	),
)); ?>
