<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */

$this->breadcrumbs=array(
	'Menu3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menu3', 'url'=>array('index')),
	array('label'=>'Manage Menu3', 'url'=>array('admin')),
);
?>

<h1>Create Menu3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>