<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */

$this->breadcrumbs=array(
	'Menu4s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menu4', 'url'=>array('index')),
	array('label'=>'Manage Menu4', 'url'=>array('admin')),
);
?>
<div class="col-md-12">
<h1>Create Menu4</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
