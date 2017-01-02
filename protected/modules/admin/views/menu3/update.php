<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */

$this->breadcrumbs=array(
	'Menu3s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menu3', 'url'=>array('index')),
	array('label'=>'Create Menu3', 'url'=>array('create')),
	array('label'=>'View Menu3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menu3', 'url'=>array('admin')),
);
?>
<div class="col-md-12">
<h1>Update Menu3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
