<?php
/* @var $this PostController */
/* @var $model Post */

Yii::app()->clientScript->registerMetaTag($model->meta, "keywords");
Yii::app()->clientScript->registerMetaTag($model->description, "description");

$this->pageTitle = $model->head;

?>

<ol class="breadcrumb">
    <li><a href="http://lozay.ru">Главная</a> </li>
    <?php if($model->menu1!=0){
        ?>
        <li><a href="<?= Yii::app()->createUrl('menu1/view', array('id'=>$model->menu1)); ?>"><?php $name = Menu1::model()->findByPk($model->menu1); echo $name->name; ?></a> </li>
    <?php
    } ?>
    <?php if($model->menu2!=0){
        ?>
        <li><a href="<?= Yii::app()->createUrl('menu2/view', array('id'=>$model->menu2)); ?>"><?php $name = Menu2::model()->findByPk($model->menu2); echo $name->name; ?></a> </li>
        <?php
    } ?>
    <?php if($model->menu3!=0){
        ?>
        <li><a href="<?= Yii::app()->createUrl('menu3/view', array('id'=>$model->menu3)); ?>"><?php $name = Menu3::model()->findByPk($model->menu3); echo $name->name; ?></a> </li>
        <?php
    } ?>
    <?php if($model->menu4!=0){
        ?>
        <li><a href="<?= Yii::app()->createUrl('menu4/view', array('id'=>$model->menu4)); ?>"><?php $name = Menu4::model()->findByPk($model->menu4); echo $name->name; ?></a> </li>
        <?php
    } ?>
    <li class="active"><?= $model->head; ?></li>
</ol>

<div class="span8 blog">

    <!-- Blog Post 1 -->
    <article>
        <h3 class="title-bg back"><a href="" style="color: #3376BC;"><?= $model->head; ?></a></h3>
        <div class="post-content back">

            <div class="post-body">
                <?= $model->content; ?>
            </div>

            <div class="post-summary-footer">
                <ul class="post-data">
                    <li><i class="icon-calendar"></i> <?= date('d/m/Y', $model->date); ?></li>
                </ul>
            </div>
        </div>
    </article>

    <!-- Put this script tag to the <head> of your page -->
    <script type="text/javascript" src="https://vk.com/js/api/share.js?94" charset="windows-1251"></script>

    <!-- Put this script tag to the place, where the Share button will be -->
    <script type="text/javascript"><!--
        document.write(VK.Share.button(false,{type: "round", text: "Поделиться"}));
        --></script>

</div><!--Close container row-->

<!-- Blog Sidebar
================================================== -->
<div class="span4 sidebar">
    <!--Categories-->
    <h5 class="adv"><?= $model->adv; ?></h5>
<!--    <h5 class="adv">--><?php //$adv = Adv::model()->findByPk(2); echo $adv->content; ?><!--</h5>-->


</div>