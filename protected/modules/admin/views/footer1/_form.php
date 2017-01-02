<?php
/* @var $this Footer1Controller */
/* @var $model Footer1 */
/* @var $form CActiveForm */
?>
<script src="/ckeditor/ckeditor.js"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'footer1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'head'); ?>
		<?php echo $form->textArea($model,'head',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'head'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'Footer1[content]' );
    CKEDITOR.config.height = '400px';
</script>