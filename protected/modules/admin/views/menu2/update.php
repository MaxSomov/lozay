<?php
/* @var $this Menu2Controller */
/* @var $model Menu2 */

$this->breadcrumbs=array(
	'Menu2s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu2', 'url'=>array('index')),
	array('label'=>'Create Menu2', 'url'=>array('create')),
	array('label'=>'View Menu2', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu2', 'url'=>array('admin')),
);
?>
<div class="col-md-12">
<h1>Update Menu2 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
