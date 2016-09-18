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

				$menu1 = Menu1::model()->findAll();
				foreach ($menu1 as $item1){
					$menu2 = Menu2::model()->findAllByAttributes(array("parent_id"=>$item1->id));
					if(count($menu2)==0){
						echo "<option value='".$item1->id."_0_0'>".$item1->name."</option>";
					}
					else{
						foreach ($menu2 as $item2){
							$menu3 = Menu3::model()->findAllByAttributes(array("parent_id"=>$item2->id));
							if(count($menu3)==0){
								echo "<option value='".$item1->id."_".$item2->id."_0'>".$item2->name." (".$item1->name.")</option>";
							}
							else{
								foreach ($menu3 as $item3) {
									echo "<option value='".$item1->id."_".$item2->id."_".$item3->id."'>".$item3->name." (".$item2->name." - ".$item1->name.")</option>";								}
							}
						}
					}
				}

//				$cat3s = Cat3::model()->findAll();
//			foreach ($cat3s as $cat3){
//				$subcategory = Subcategory::model()->findByPk($cat3->subcategory_id);
//				$category = Category::model()->findByPk($cat3->category_id);
//				echo "<option value='".$cat3->id."'>".$cat3->name."</option>";
//			}
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