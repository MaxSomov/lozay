<?php
/* @var $this Footer2Controller */
/* @var $model Footer2 */

$this->breadcrumbs=array(
	'Footer2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Footer2', 'url'=>array('index')),
	array('label'=>'Manage Footer2', 'url'=>array('admin')),
);
?>

<h1>Create Footer2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>