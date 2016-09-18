<?php
/* @var $this Menu2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu2s',
);

$this->menu=array(
	array('label'=>'Create Menu2', 'url'=>array('create')),
	array('label'=>'Manage Menu2', 'url'=>array('admin')),
);
?>

<h1>Menu2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
