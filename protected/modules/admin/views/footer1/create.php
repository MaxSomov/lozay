<?php
/* @var $this Footer1Controller */
/* @var $model Footer1 */

$this->breadcrumbs=array(
	'Footer1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Footer1', 'url'=>array('index')),
	array('label'=>'Manage Footer1', 'url'=>array('admin')),
);
?>

<div class="col-md-12">
<h1>Create Footer1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
