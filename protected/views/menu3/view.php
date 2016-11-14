<?php
/* @var $this Menu3Controller */
/* @var $model Menu3 */

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
$nav = Menu4::model()->findAllByAttributes(array("menu3"=>$model->id));
if(count($nav)){
	?>
	<nav class="navbar navbar-default">
		<div class="navbar-fluid">
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php
					foreach ($nav as $item){
						?>
						<li>
							<a href="<?= Yii::app()->createUrl('menu4/view', array('id'=>$item->id)); ?>"><?php echo $item->name; ?></a>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
	</nav>
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

<!--								@TODO: !!-->
								<?php $a = explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content)[0]; ?>
							</p>
						</div>
						<div class="post-more">
							<a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>" class="btn btn-small">Читать
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
