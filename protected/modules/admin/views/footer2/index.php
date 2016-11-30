<?php
/* @var $this Footer2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Footer2s',
);

$this->menu=array(
	array('label'=>'Create Footer2', 'url'=>array('create')),
	array('label'=>'Manage Footer2', 'url'=>array('admin')),
);
?>

<h1>Footer2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
