<?php
/* @var $this Cat3Controller */
/* @var $model Cat3 */

$this->breadcrumbs=array(
	'Cat3s'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cat3', 'url'=>array('index')),
	array('label'=>'Create Cat3', 'url'=>array('create')),
	array('label'=>'View Cat3', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cat3', 'url'=>array('admin')),
);
?>

<div class="col-md-12">

<h1>Update Cat3 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
