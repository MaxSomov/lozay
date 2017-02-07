<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */
/* @var $form CActiveForm */
?>

<div class="form col-md-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu3-form',
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
		<?php echo $form->textField($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<select class="form-control" name="Menu3[parent_id]">
			<?php
			$categories = Menu2::model()->findAll();
			foreach ($categories as $category){
				?>
				<option value="<?php echo $category->id;?>" <?php if($category->id == $model->parent_id) echo " selected"  ?>><?php $i = Menu1::model()->findByPk($category->parent_id); echo $category->name." (".$i->name.")";?></option>
				<?php
			}
			?>
		</select>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->