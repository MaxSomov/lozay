<?php
/* @var $this PostController */
/* @var $model Post */


?>

<div class="container">
    <div class="col-md-3">

    </div>

    <div class="col-md-6">
        <div class="blog-post blog-single-post">
            <div class="single-post-title">
                <h3><?php echo $model->head; ?></h3>
            </div>
            <div class="single-post-info">
                <i class="fa fa-clock-o"></i> <?php echo date('d.m.Y', $model->date); ?>
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
            Реклама
        </div>
    </div>

</div>