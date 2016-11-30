<?php
/* @var $this Footer3Controller */
/* @var $model Footer3 */

$this->breadcrumbs=array(
	'Footer3s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Footer3', 'url'=>array('index')),
	array('label'=>'Create Footer3', 'url'=>array('create')),
	array('label'=>'View Footer3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Footer3', 'url'=>array('admin')),
);
?>

<h1>Update Footer3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>