<?php
/* @var $this Menu4Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu4s',
);

$this->menu=array(
	array('label'=>'Create Menu4', 'url'=>array('create')),
	array('label'=>'Manage Menu4', 'url'=>array('admin')),
);
?>

<h1>Menu4s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
