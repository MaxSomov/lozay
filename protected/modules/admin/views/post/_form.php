<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<script src="/ckeditor/ckeditor.js"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'head'); ?>
		<?php echo $form->textField($model,'head',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'head'); ?>
	</div><br>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div><br>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'date'); ?>
<!--		--><?php //echo $form->textField($model,'date'); ?>
<!--		--><?php //echo $form->error($model,'date'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'view'); ?>
<!--		--><?php //echo $form->textField($model,'view'); ?>
<!--		--><?php //echo $form->error($model,'view'); ?>
<!--	</div>-->

	<div class="row">
		Реклама
		<?php echo $form->textField($model,'adv',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'adv'); ?>
	</div>

	<br>

	<div class="row">
		<select class="form-control" name="cat">
			<?php
				$cat3s = Cat3::model()->findAll();
			foreach ($cat3s as $cat3){
				$subcategory = Subcategory::model()->findByPk($cat3->subcategory_id);
				$category = Category::model()->findByPk($cat3->category_id);
				echo "<option value='".$cat3->id."'>".$cat3->name."</option>";
			}
			?>
		</select>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
	</div>


	<script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'Post[content]' );
		CKEDITOR.config.height = '400px';
	</script>

<?php $this->endWidget(); ?>

</div><!-- form -->