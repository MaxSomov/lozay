<?php
/* @var $this Footer3Controller */
/* @var $model Footer3 */

$this->breadcrumbs=array(
	'Footer3s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Footer3', 'url'=>array('index')),
	array('label'=>'Create Footer3', 'url'=>array('create')),
	array('label'=>'Update Footer3', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Footer3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Footer3', 'url'=>array('admin')),
);
?>

<h1>View Footer3 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'head',
		'content',
	),
)); ?>
