<?php
/* @var $this Cat3Controller */
/* @var $model Cat3 */

$this->breadcrumbs=array(
	'Cat3s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cat3', 'url'=>array('index')),
	array('label'=>'Manage Cat3', 'url'=>array('admin')),
);
?>

<div class="col-md-12">
<h1>Create Cat3</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
