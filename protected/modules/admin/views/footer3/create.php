<?php
/* @var $this Footer3Controller */
/* @var $model Footer3 */

$this->breadcrumbs=array(
	'Footer3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Footer3', 'url'=>array('index')),
	array('label'=>'Manage Footer3', 'url'=>array('admin')),
);
?>

<h1>Create Footer3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>