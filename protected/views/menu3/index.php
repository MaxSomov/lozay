<?php
/* @var $this Menu3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu3s',
);

$this->menu=array(
	array('label'=>'Create Menu3', 'url'=>array('create')),
	array('label'=>'Manage Menu3', 'url'=>array('admin')),
);
?>

<h1>Menu3s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
