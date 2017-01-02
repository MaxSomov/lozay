<?php
/* @var $this AdvController */
/* @var $model Adv */

$this->breadcrumbs=array(
	'Advs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Adv', 'url'=>array('index')),
	array('label'=>'Manage Adv', 'url'=>array('admin')),
);
?>

<div class="col-md-12">
<h1>Create Adv</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
