<?php
/* @var $this Menu4Controller */
/* @var $model Menu4 */
/* @var $form CActiveForm */
?>

<div class="form col-md-5">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu4-form',
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
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'menu1'); ?>
<!--		--><?php //echo $form->textField($model,'menu1'); ?>
<!--		--><?php //echo $form->error($model,'menu1'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'menu2'); ?>
<!--		--><?php //echo $form->textField($model,'menu2'); ?>
<!--		--><?php //echo $form->error($model,'menu2'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'menu3'); ?>
<!--		--><?php //echo $form->textField($model,'menu3'); ?>
<!--		--><?php //echo $form->error($model,'menu3'); ?>
<!--	</div>-->

	<div class="row">
		<select class="form-control" name="parent">
			<?php
				$menu3 = Menu3::model()->findAll();
			foreach ($menu3 as $item){
				?>
				<option value="0_0_<?php echo $item->id; ?>">
					<?php echo $item->name; ?>
				</option>
			<?php
			}
			$menu2 = Menu2::model()->findAll();
			foreach ($menu2 as $item){
				?>
				<option value="0_<?php echo $item->id; ?>_0">
					<?php echo $item->name; ?>
				</option>
			<?php
			}
			$menu1 = Menu1::model()->findAll();
			foreach ($menu1 as $item){
				?>
				<option value="<?php echo $item->id; ?>_0_0">
					<?php echo $item->name; ?>
				</option>
				<?php
			}
			?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Сохранить' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->