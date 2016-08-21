<?php
/* @var $this Cat3Controller */
/* @var $model Cat3 */

$this->breadcrumbs=array(
	'Cat3s'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Cat3', 'url'=>array('index')),
	array('label'=>'Create Cat3', 'url'=>array('create')),
	array('label'=>'Update Cat3', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cat3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cat3', 'url'=>array('admin')),
);
?>

<h1>View Cat3 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'category_id',
		'subcategory_id',
	),
)); ?>
