<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */

$this->breadcrumbs=array(
	'Menu4s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu4', 'url'=>array('index')),
	array('label'=>'Create Menu4', 'url'=>array('create')),
	array('label'=>'View Menu4', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu4', 'url'=>array('admin')),
);
?>

<h1>Update Menu4 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>