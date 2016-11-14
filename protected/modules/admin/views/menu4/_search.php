<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu1'); ?>
		<?php echo $form->textField($model,'menu1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu2'); ?>
		<?php echo $form->textField($model,'menu2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu3'); ?>
		<?php echo $form->textField($model,'menu3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->