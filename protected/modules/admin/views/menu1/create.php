<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */

$this->breadcrumbs=array(
	'Menu1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Menu1', 'url'=>array('index')),
	array('label'=>'Manage Menu1', 'url'=>array('admin')),
);
?>
<div class="col-md-12">
<h1>Create Menu1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
