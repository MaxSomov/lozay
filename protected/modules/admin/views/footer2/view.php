<?php
/* @var $this Footer2Controller */
/* @var $model Footer2 */

$this->breadcrumbs=array(
	'Footer2s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Footer2', 'url'=>array('index')),
	array('label'=>'Create Footer2', 'url'=>array('create')),
	array('label'=>'Update Footer2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Footer2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Footer2', 'url'=>array('admin')),
);
?>

<h1>View Footer2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'head',
		'content',
	),
)); ?>
