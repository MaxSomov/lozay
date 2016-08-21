<?php
/* @var $this CategoryController */
/* @var $model Category */


?>

<h1>Редактирование<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>