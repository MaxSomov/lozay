<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */

$this->breadcrumbs=array(
	'Menu1s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu1', 'url'=>array('index')),
	array('label'=>'Create Menu1', 'url'=>array('create')),
	array('label'=>'View Menu1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu1', 'url'=>array('admin')),
);
?>

<h1>Update Menu1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>