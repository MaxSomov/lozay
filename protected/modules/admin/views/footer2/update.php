<?php
/* @var $this Footer2Controller */
/* @var $model Footer2 */

$this->breadcrumbs=array(
	'Footer2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Footer2', 'url'=>array('index')),
	array('label'=>'Create Footer2', 'url'=>array('create')),
	array('label'=>'View Footer2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Footer2', 'url'=>array('admin')),
);
?>

<h1>Update Footer2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>