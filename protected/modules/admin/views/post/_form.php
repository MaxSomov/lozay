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
		<?php echo $form->textField($model,'head',array('rows'=>6, 'cols'=>50, 'class'=>'form-control', 'placeholder'=>'Заголовок')); ?>
		<?php echo $form->error($model,'head'); ?>
	</div><br>

	<div class="row">
        <label>Редактор статьи.<br>
            <code>Обязательно ставить выравнивание по ширине</code><br>
            Кнопка <img src="https://pp.vk.me/c637219/v637219916/2dd76/2qzdac6Nl1g.jpg"> (второй ряд, вторая справа) добавляет невидимую горизонтальную линию, текст после которой не будет отображаться на главной странице и в списке статей.<br> Можно вставлять код рекламы. </label>
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
        <label>Основное меню. <code>ПРИ РЕДАКТИРОВАНИИ СТАТЬИ МОЖЕТ СБИТЬСЯ!!</code></label>
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

			?>
		</select>
	</div>
    <br><br>

	<div class="row">
        <label>Горизонтальное меню. Можно оставить пустым. <code>ПРИ РЕДАКТИРОВАНИИ СТАТЬИ МОЖЕТ СБИТЬСЯ!!</code></label>
        <select class="form-control" name="menu4">
			<option value="0"> </option>
			<?php
			$menu = Menu4::model()->findAll();
			foreach ($menu as $item){

                if ($item->menu3 == 0) {
                    if ($item->menu2 == 0) {
                        $m1 = Menu1::model()->findByPk($item->menu1);
                        $m2 = 0;
                        $m3 = 0;
                    } else {
                        $m2 = Menu2::model()->findByPk($item->menu2);
                        $m1 = Menu1::model()->findByPk($m2->parent_id);
                        $m3 = 0;
                    }
                } else {
                    $m3 = Menu3::model()->findByPk($item->menu3);
                    $m2 = Menu2::model()->findByPk($m3->parent_id);
                    $m1 = Menu1::model()->findByPk($m2->parent_id);
                }
			    
				?>
				<option value="<?php echo $item->id; ?>"><?php echo $item->name." (".$m1->name." - ".$m2->name." - ".$m3->name.")"; ?></option>
			<?php
			}
			?>
		</select>
	</div>

	<br>

	<div class="row">
		<label>Ключевые слова. <code>Указываются через запятую</code></label>
		<?php echo $form->textField($model,'meta',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'meta'); ?>
	</div>

    <div class="row">
        <label>Описание. <code>Каждая страница долна иметь уникальное описание размером не более 140 символов.</code></label>
        <?php echo $form->textField($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
        <?php echo $form->error($model,'description'); ?>
    </div>

	<br>

	<div class="row">
<!--        @todo: проверить возможность добавления нескольких реклам!!-->
		<label>Код рекламы. Можно добавить несколько скриптов (но это не точно).</label>
		<?php echo $form->textField($model,'adv',array('rows'=>6, 'cols'=>50, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'adv'); ?>
	</div>

	<br>

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