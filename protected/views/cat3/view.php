<?php
/* @var $this Cat3Controller */
/* @var $model Cat3 */


?>

<div class="section section-breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo $model->name; ?></h1>
			</div>
		</div>
	</div>
</div>

<?php

if($model->subcategory_id==0) $cat3s = Cat3::model()->findAllByAttributes(array("category_id"=>$model->category_id));
else $cat3s = Cat3::model()->findAllByAttributes(array("subcategory_id"=>$model->subcategory_id));

//$cat3s = Cat3::model()->findAllByAttributes(array("category_id"=>$model->id));
if(count($cat3s)) {
	?>
	<div class="navbar navbar-default">
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<?php
				foreach ($cat3s as $cat3){
					?>
					<li><a href="index.php?r=cat3/view&id=<?php echo $cat3->id; ?>"><?php echo $cat3->name; ?></a> </li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
	<?php
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<?php

			if (count($posts)==0) echo "В данном разделе статей нет";
			else {
//            $posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

				foreach ($posts as $post) {
					?>
					<div class="blog-post">
						<div class="post-title">
							<h2><?php echo $post->head; ?></h2>
						</div>
						<div class="post-summary">
							<p>
								<?php echo explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content)[0]; ?>
							</p>
						</div>
						<div class="post-more">
							<a href="index.php?r=post/view&id=<?php echo $post->id; ?>" class="btn btn-small">Читать
								далее</a>
						</div>
					</div>
					<?php
				}


				$this->widget('CLinkPager', array(
					'pages' => $pages,
					'header' => "",
					'firstPageLabel' => '<<',
					'prevPageLabel' => '<',
					'nextPageLabel' => '>',
					'lastPageLabel' => '>>',
					'maxButtonCount' => '10',
					'htmlOptions' => array(
						'class' => 'pagination'
					),
				));
			}
			?>
		</div>

		<div class="col-md-3">
			<div class="blog-post blog-single-post">
				Реклама
			</div>
		</div>
