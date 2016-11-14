<?php
/* @var $this Menu1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu1s',
);

$this->menu=array(
	array('label'=>'Create Menu1', 'url'=>array('create')),
	array('label'=>'Manage Menu1', 'url'=>array('admin')),
);
?>

<h1>Menu1s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
