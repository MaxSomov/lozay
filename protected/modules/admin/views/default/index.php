<?php
/* @var $this DefaultController */

$this->breadcrumbs = array(
    $this->module->id,
);

$menu1s = Menu1::model()->findAll();


?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>

<style>
    .line {
        border-left: 2px solid #ccc; /* Параметры линии */
        margin-left: 20px; /* Отступ слева */
        padding-left: 10px;
        /* Расстояние от линии до текста */
    }
    .m {
        margin-bottom: 5px;
        font-size: 18pt;
    }
</style>

<div class="col-md-12" style="margin-bottom: 100px;">
<?php

foreach ($menu1s as $menu1) {
    ?>
    <div class="m"><?= $menu1->name; ?> <a href="<?= Yii::app()->createUrl('admin/menu1/update', array('id' => $menu1->id)); ?>"><i
                class="fa fa-pencil"></i></a> <a
            href="<?= Yii::app()->createUrl('admin/menu1/del', array('id' => $menu1->id)); ?>"><i
                class="fa fa-times"></i></a></div>
    <?php
    $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
    foreach ($menu2s as $menu2) {
        ?>
        <div class="line m"><?= $menu2->name; ?> <a
                href="<?= Yii::app()->createUrl('admin/menu2/update', array('id' => $menu2->id)); ?>"><i
                    class="fa fa-pencil"></i></a> <a
                href="<?= Yii::app()->createUrl('admin/menu2/del', array('id' => $menu2->id)); ?>"><i
                    class="fa fa-times"></i></a></div>
        <?php
        $menu3s = Menu3::model()->findAllByAttributes(array("parent_id" => $menu2->id));
        foreach ($menu3s as $menu3) {
            ?>
                <div class="line m">
                    <div class="line m">
                        <?= $menu3->name; ?> <a
                            href="<?= Yii::app()->createUrl('admin/menu3/update', array('id' => $menu3->id)); ?>"><i
                                class="fa fa-pencil"></i></a> <a
                            href="<?= Yii::app()->createUrl('admin/menu3/del', array('id' => $menu3->id)); ?>"><i
                                class="fa fa-times"></i></a>
                    </div>
                </div>
            <?php
        }
        ?>
        <div class="line m">
            <div class="line m">
               <a href="<?= Yii::app()->createUrl('admin/menu3/create'); ?>"><i class="fa fa-plus"></i> Добавить</a>
            </div>
        </div>
<?php
    }
    ?>
    <div class="line m">
        <a href="<?= Yii::app()->createUrl('admin/menu2/create'); ?>"><i class="fa fa-plus"></i> Добавить</a>
    </div>
<?php
}

?>
<div class="m">
    <a href="<?= Yii::app()->createUrl('admin/menu1/create'); ?>"><i class="fa fa-plus"></i> Добавить</a>
</div>


</div>

<!-- Footer -->
<!--<link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css"-->
<hr>

<div class="foot col-md-12">
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer1/update', array('id' => 1)); ?>"
                             class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a>
        <h3><?php $footer = Footer1::model()->findByPk(1);
            if (isset($footer)) echo $footer->head; ?></h3>
        <?php if (isset($footer)) echo $footer->content; ?></div>
    <div class="col-md-3"><a href="" class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a>
        <h3>Соцсети</h3></div>
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer2/update', array('id' => 1)); ?>"
                             class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a>
        <h3><?php $footer = Footer2::model()->findByPk(1);
            if (isset($footer)) echo $footer->head; ?></h3>
        <?php if (isset($footer)) echo $footer->content; ?></div>
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer3/update', array('id' => 1)); ?>"
                             class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a>
        <h3><?php $footer = Footer3::model()->findByPk(1);
            if (isset($footer)) echo $footer->head; ?></h3>
        <?php if (isset($footer)) echo $footer->content; ?></div>

</div>