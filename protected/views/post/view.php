<?php
/* @var $this PostController */
/* @var $model Post */

//$this->pageKeywords = $model->meta;
Yii::app()->clientScript->registerMetaTag($model->meta, "keywords");
?>

<div class="span8 blog">

    <!-- Blog Post 1 -->
    <article>
        <h3 class="title-bg"><a href=""><?= $model->head; ?></a></h3>
        <div class="post-content">

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

</div><!--Close container row-->

<!-- Blog Sidebar
================================================== -->
<div class="span4 sidebar">

    <!--Search-->
    <section>
        <div class="input-append">
            <form action="<?= Yii::app()->createUrl('/site/page', array('view'=>'search')); ?>" method="post">
                <input name="keyword" id="appendedInputButton" size="16" type="text" placeholder="Поиск..."><button class="btn" type="submit"><i class="icon-search"></i></button>
            </form>
        </div>
    </section>

    <!--Categories-->
    <h5 class="title-bg"><?= $model->adv; ?></h5>

</div>