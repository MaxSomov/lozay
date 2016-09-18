<?php
/* @var $this Menu2Controller */
/* @var $model Menu2 */

$this->breadcrumbs=array(
	'Menu2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menu2', 'url'=>array('index')),
	array('label'=>'Manage Menu2', 'url'=>array('admin')),
);
?>

<h1>Create Menu2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>