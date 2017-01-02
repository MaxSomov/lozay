<?php
/* @var $this Footer1Controller */
/* @var $model Footer1 */

$this->breadcrumbs=array(
	'Footer1s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Footer1', 'url'=>array('index')),
	array('label'=>'Create Footer1', 'url'=>array('create')),
	array('label'=>'View Footer1', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Footer1', 'url'=>array('admin')),
);
?>
<div class="col-md-12">
<h1>Update Footer1 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
