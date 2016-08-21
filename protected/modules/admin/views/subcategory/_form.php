<?php
/* @var $this SubcategoryController */
/* @var $model Subcategory */
/* @var $form CActiveForm */
?>

<div class="form col-md-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subcategory-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<!---->
<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<br>
	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'category_id'); ?>
<!--		--><?php //echo $form->textField($model,'category_id'); ?>
<!--		--><?php //echo $form->error($model,'category_id'); ?>

		<select class="form-control" name="Subcategory[category_id]">
			<?php
				$categories = Category::model()->findAll();
			foreach ($categories as $category){
				?>
				<option value="<?php echo $category->id;?>" <?php if($category->id == $model->category_id) echo " selected"  ?>><?php echo $category->name;?></option>
			<?php
			}
			?>
		</select>

	</div>

	<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->