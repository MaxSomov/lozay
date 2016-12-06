<?php
/* @var $this Menu1Controller */
/* @var $model Menu1 */


?>

<h1 class="title-bg"><?= $model->name; ?></h1>

<?php
$nav = Menu4::model()->findAllByAttributes(array("menu1"=>$model->id));
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


<div class="span8">
	<?php

	if (count($posts)==0) echo "В данном разделе статей нет";
	else {
	//            $posts = Post::model()->findAll(array('order'=>'date DESC', 'limit'=>5));

	foreach ($posts as $post) {
		?>
		<article>
			<div class="row">
				<div class="span2 blog-style-2">
					<h4 class="title-bg"><?= date('d/m/Y', $post->date); ?></h4>
					<!--						<ul class="post-data">-->
					<!--							<li><i class="icon-user"></i> <a href="#">Admin</a></li>-->
					<!--							<li><i class="icon-comment"></i> <a href="#">5 Comments</a></li>-->
					<!--							<li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a href="#">tutorials</a>, <a href="#">illustration</a>, <a href="#">events</a></li>-->
					<!--						</ul>-->
					<a class="btn btn-small btn-inverse" type="button" href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>">Читать далее</a>
				</div>
				<div class="span6">
					<h3 class="title-bg"><a href="<?= Yii::app()->createUrl('post/view', array('id'=>$post->id)); ?>"><?= $post->head; ?></a></h3>
					<p><?php echo explode("<div style=\"page-break-after: always\"><span style=\"display:none\">&nbsp;</span></div>", $post->content)[0];?></p>
				</div>
			</div>
		</article>
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

	<!--Search-->
	<section>
		<div class="input-append">
			<form action="<?= Yii::app()->createUrl('/site/page', array('view'=>'search')); ?>" method="post">
				<input name="keyword" id="appendedInputButton" size="16" type="text" placeholder="Поиск..."><button class="btn" type="submit"><i class="icon-search"></i></button>
			</form>
		</div>
	</section>

	<!--Categories-->
	<h5 class="title-bg">Реклама</h5>

</div>

