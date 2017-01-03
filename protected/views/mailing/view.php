<?php
/* @var $this MailingController */
/* @var $model Mailing */

$this->breadcrumbs=array(
	'Mailings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Mailing', 'url'=>array('index')),
	array('label'=>'Create Mailing', 'url'=>array('create')),
	array('label'=>'Update Mailing', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mailing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mailing', 'url'=>array('admin')),
);
?>

<h1>View Mailing #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'code',
		'verification',
		'time',
	),
)); ?>
