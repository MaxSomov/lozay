<?php
/* @var $this Footer3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Footer3s',
);

$this->menu=array(
	array('label'=>'Create Footer3', 'url'=>array('create')),
	array('label'=>'Manage Footer3', 'url'=>array('admin')),
);
?>

<h1>Footer3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
