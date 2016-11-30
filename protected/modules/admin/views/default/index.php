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

<!--@TODO: Вложенные вкладки должны наследовать номер родителя-->

<div id="tabs">
    <ul>
        <?php

        foreach ($menu1s as $menu1) {
            ?>
            <li><a href="#tabs-<?= $menu1->id; ?>"><?= $menu1->name; ?></a></li>
            <?php
        }

        ?>
        <a href="<?= Yii::app()->createUrl('admin/menu1/create'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> Добавить</a>
    </ul>
    <?php

    foreach ($menu1s as $menu1) {
        ?>
        <div id="tabs-<?= $menu1->id; ?>">
            <a href="<?= Yii::app()->createUrl('admin/menu1/update', array('id'=>$menu1->id)); ?>" class="btn btn-default"><i class="fa fa-pencil"></i> Редатировать </a>
            <a href="<?= Yii::app()->createUrl('admin/menu1/del', array('id'=>$menu1->id)); ?>" class="btn btn-default"><i class="fa fa-times"></i> Удалить</a><hr>
            <script>
                $(function () {
                    $("#tabs<?= $menu1->id; ?>").tabs();
                });
            </script>
            <div id="tabs<?= $menu1->id; ?>">
                <ul>
                    <?php

                    $menu2s = Menu2::model()->findAllByAttributes(array("parent_id" => $menu1->id));
                    foreach ($menu2s as $menu2) {
                        ?>
                        <li><a href="#tabs<?= $menu1->id; ?>-<?= $menu2->id; ?>"><?= $menu2->name; ?></a></li>
                        <?php
                    }

                    ?>
                    <a href="<?= Yii::app()->createUrl('admin/menu2/create'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> Добавить</a>
                </ul>
                <?php

                foreach ($menu2s as $menu2) {
                    ?>
                    <div id="tabs<?= $menu1->id; ?>-<?= $menu2->id; ?>">
                        <a href="<?= Yii::app()->createUrl('admin/menu2/update', array('id'=>$menu2->id)); ?>" class="btn btn-default"><i class="fa fa-pencil"></i> Редатировать </a>
                        <a href="<?= Yii::app()->createUrl('admin/menu2/del', array('id'=>$menu2->id)); ?>" class="btn btn-default"><i class="fa fa-times"></i> Удалить</a><hr>
                        <script>
                            $(function () {
                                $("#tabss<?= $menu2->id; ?>").tabs();
                            });
                        </script>
                        <div id="tabss<?= $menu2->id; ?>">
                            <ul>
                                <?php

                                $menu3s = Menu3::model()->findAllByAttributes(array("parent_id"=>$menu2->id));
                                foreach ($menu3s as $menu3) {
                                    ?>
                                    <li><a href="#tabss<?= $menu2->id; ?>-<?= $menu3->id; ?>"><?= $menu3->name; ?></a></li>
                                    <?php
                                }

                                ?>
                                <a href="<?= Yii::app()->createUrl('admin/menu3/create'); ?>" class="btn btn-default"><i class="fa fa-plus"></i> Добавить</a>
                            </ul>
                            <?php

                            foreach ($menu3s as $menu3){
                                ?>
                                <div id="tabss<?= $menu2->id; ?>-<?= $menu3->id; ?>">
                                    <a href="<?= Yii::app()->createUrl('admin/menu3/update', array('id'=>$menu3->id)); ?>" class="btn btn-default"><i class="fa fa-pencil"></i> Редатировать </a>
                                    <a href="<?= Yii::app()->createUrl('admin/menu3/del', array('id'=>$menu3->id)); ?>" class="btn btn-default"><i class="fa fa-times"></i> Удалить</a><hr>
                                </div>
                            <?php
                            }

                            ?>
                        </div>
                    </div>
                    <?php
                }

                ?>
            </div>
        </div>
        <?php
    }

    ?>
</div>

<!-- Footer -->
<!--<link rel="stylesheet" href="/mPurpose-master/css/bootstrap.min.css"-->
<hr>

<div class="foot col-md-12">
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer1/update', array('id'=>1)); ?>" class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a> <h3><?php $footer = Footer1::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?></div>
    <div class="col-md-3"><a href="" class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a><h3>Соцсети</h3></div>
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer2/update', array('id'=>1)); ?>" class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a><h3><?php $footer = Footer2::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?></div>
    <div class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/footer3/update', array('id'=>1)); ?>" class="btn btn-default col-md-12"><i class="fa fa-pencil"></i> Редактировать</a><h3><?php $footer = Footer3::model()->findByPk(1); if (isset($footer)) echo $footer->head; ?></h3>
                <?php if (isset($footer)) echo $footer->content; ?></div>

</div>