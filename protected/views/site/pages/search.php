

<div class="container">

    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <h1>Результаты поиска <code><?php echo $_POST['keyword']; ?></code></h1>
            <?php

            $kw = strtolower(trim($_POST['keyword']));
//            echo $kw;

            if($kw!=""){
                $results = SearchStat::model()->findByAttributes(array('keyword'=>$kw));
                if(!isset($results)){
                    $s = new SearchStat;
                    $s->keyword = $kw;
                    $s->count = 1;
                    $s->last = time();
                    $s->save();
                }
                else {
                    $results->count++;
                    $results->save();
                }
            }

            $match = addcslashes($kw, '%_');
            $posts = Post::model()->findAll('content LIKE :match', array(':match'=>"%$match%"), array('order'=>'date DESC', 'limit'=>5));

            foreach ($posts as $post){
                ?>
                <div class="blog-post">
                    <div class="post-title">
                        <h2><?php echo $post->head; ?></h2>
                    </div>
                    <div class="post-summary">
                        <p>
                            <?php echo explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content)[0];?>
                        </p>
                    </div>
                    <div class="post-more">
                        <a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>" class="btn btn-small">Читать далее</a>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>

        <div class="col-md-3">
            <div class="blog-post blog-single-post">
                Реклама
            </div>
        </div>
    </div>
</div>