<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */
/* @var $form CActiveForm */
?>

<div class="form col-md-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Название')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

    <div class="row">
        <!--		--><?php //echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'meta',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Ключевые слова через запятую')); ?>
        <?php echo $form->error($model,'meta'); ?>
    </div>

    <div class="row">
        <!--		--><?php //echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Описание')); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Сохранить' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->