<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */
/* @var $pages */

$m2 = Menu2::model()->findByPk($model->parent_id);
$m1 = Menu1::model()->findByPk($m2->parent_id);

$this->pageTitle = $model->name." - ".$m2->name." - ".$m1->name;

?>

<div class="container site-content">

    <ol class="breadcrumb">
        <li><a href="http://lozay.ru">Главная</a></li>
        <li><a href="<?= Yii::app()->createUrl('menu1/view', array('id' => $m1->id)); ?>"><?= $m1->name; ?></a></li>
        <li><a href="<?= Yii::app()->createUrl('menu2/view', array('id' => $m2->id)); ?>"><?= $m2->name; ?></a></li>
        <li class="active"><?= $model->name; ?></li>
    </ol>

    <h1 class="title-bg head"><?= $model->name; ?></h1>

    <div class="span12 btn-group menu4">
        <?php
        $nav = Menu4::model()->findAllByAttributes(array("menu3" => $model->id));
        if (count($nav)) {
            ?>
            <?php
            foreach ($nav as $item) {
                ?>
                <a class="btn btn-primary"
                   href="<?= Yii::app()->createUrl('menu4/view', array('id' => $item->id)); ?>"><?php echo $item->name; ?></a>
                <?php
            }
            ?>
            <?php
        }
        ?>
    </div>

</div>
<div class="span8">
    <?php

    if (count($posts) == 0)
    echo "В данном разделе статей нет";
    else {
    foreach ($posts as $post) {
        ?>
        <article>
            <h3 class="title-bg back"><a
                        href="<?= Yii::app()->createUrl('post/view', array('id' => $post->id)); ?>"><?= $post->head; ?></a>
            </h3>
            <div class="post-content back">

                <div class="post-body">
                    <?= $post->content; ?>
                </div>

                <div class="post-summary-footer">
                    <ul class="post-data">
                        <li><a href="<?= Yii::app()->createUrl('post/view', array('id' => $post->id)); ?>"
                               class="btn btn-mini btn-default hidden-phone" type="button">Читать далее</a></li>
                        <li><i class="icon-calendar"></i> <?= date('d/m/Y', $post->date); ?></li>
                    </ul>
                </div>
            </div>
        </article>
        <hr>
        <?php
    }

    ?>
    <div class="pagination">
        <?php

        $this->widget('CLinkPager', array(
            'pages' => $pages,
            'header' => "",
            'firstPageLabel' => '<<',
            'prevPageLabel' => '<',
            'nextPageLabel' => '>',
            'lastPageLabel' => '>>',
            'maxButtonCount' => '10',
            'selectedPageCssClass' => 'active',
            'htmlOptions' => array(
                'class' => ''
            ),
        ));
        }
        ?>
    </div>


</div>

<div class="span4 sidebar">
    <h5 class="adv"><?php $adv = Adv::model()->findByPk(1);
        echo $adv->content; ?></h5>
    <h5 class="adv"><?php $adv = Adv::model()->findByPk(2);
        echo $adv->content; ?></h5>

</div>