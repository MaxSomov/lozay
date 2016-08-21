<?php
/* @var $this Cat3Controller */
/* @var $model Cat3 */
/* @var $form CActiveForm */
?>

<div class="form col-md-4">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cat3-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <!--		--><?php //echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model, 'name', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>
    <br>

    <div class="row">
        <select name="cat" class="form-control">
            <?php
            $categories = Category::model()->findAll();
            foreach ($categories as $category){
                $subcategories = Subcategory::model()->findAllByAttributes(array("category_id"=>$category->id));
                if (count($subcategories)==0) echo "<option value = '".$category->id."_0'>".$category->name."</option>";
                else {
                    foreach ($subcategories as $subcategory){
                        echo "<option value = '".$category->id."_".$subcategory->id."'>".$subcategory->name." (".$category->name.")</option>";
                    }
                }
            }
            ?>
        </select>
    </div>

    <br>


    <!--	<div class="row">-->
    <!--		--><?php //echo $form->labelEx($model,'category_id'); ?>
    <!--		--><?php //echo $form->textField($model,'category_id'); ?>
    <!--		--><?php //echo $form->error($model,'category_id'); ?>
    <!--	</div>-->

    <!--	<div class="row">-->
    <!--		--><?php //echo $form->labelEx($model,'subcategory_id'); ?>
    <!--		--><?php //echo $form->textField($model,'subcategory_id'); ?>
    <!--		--><?php //echo $form->error($model,'subcategory_id'); ?>
    <!--	</div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить', array('class'=>'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->