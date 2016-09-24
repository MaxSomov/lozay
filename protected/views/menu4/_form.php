<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu4-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu1'); ?>
		<?php echo $form->textField($model,'menu1'); ?>
		<?php echo $form->error($model,'menu1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu2'); ?>
		<?php echo $form->textField($model,'menu2'); ?>
		<?php echo $form->error($model,'menu2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'menu3'); ?>
		<?php echo $form->textField($model,'menu3'); ?>
		<?php echo $form->error($model,'menu3'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->