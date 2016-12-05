<?php
/* @var $this SearchstatController */
/* @var $model SearchStat */

$this->breadcrumbs=array(
	'Search Stats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SearchStat', 'url'=>array('index')),
	array('label'=>'Manage SearchStat', 'url'=>array('admin')),
);
?>

<h1>Create SearchStat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>