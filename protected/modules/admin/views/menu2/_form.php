<?php
/* @var $this Menu2Controller */
/* @var $model Menu2 */
/* @var $form CActiveForm */
?>

<div class="form col-md-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu2-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row">
<!--		--><?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'parent_id'); ?>
<!--		--><?php //echo $form->textField($model,'parent_id'); ?>
<!--		--><?php //echo $form->error($model,'parent_id'); ?>
<!--	</div>-->
<div class="row">
	<select class="form-control" name="Menu2[parent_id]">
		<?php
		$categories = Menu1::model()->findAll();
		foreach ($categories as $category){
			?>
			<option value="<?php echo $category->id;?>" <?php if($category->id == $model->parent_id) echo " selected"  ?>><?php echo $category->name;?></option>
			<?php
		}
		?>
	</select>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Сохранить' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->