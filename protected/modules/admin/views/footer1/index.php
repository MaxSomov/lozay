<?php
/* @var $this Footer1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Footer1s',
);

$this->menu=array(
	array('label'=>'Create Footer1', 'url'=>array('create')),
	array('label'=>'Manage Footer1', 'url'=>array('admin')),
);
?>

<h1>Footer1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
