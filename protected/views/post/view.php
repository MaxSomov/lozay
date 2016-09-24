<?php
/* @var $this PostController */
/* @var $model Post */

//$this->pageKeywords = $model->meta;
Yii::app()->clientScript->registerMetaTag($model->meta, "keywords");
?>

<div class="container">


    <div class="col-md-9">
        <div class="blog-post blog-single-post">
            <div class="single-post-title">
                <h3><?php echo $model->head; ?></h3>
            </div>
            <div class="single-post-info" style="background: #eee; color: #777; margin-top: 10px;">
                <i class="fa fa-clock-o"></i><?php echo date('d.m.Y', $model->date); ?>
            </div>
            <div class="single-post-content">
                <?php echo $model->content; ?>
            </div>
            <div class="post-comments">

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="blog-post blog-single-post">
            <?php echo $model->adv; ?>
        </div>
    </div>

</div>