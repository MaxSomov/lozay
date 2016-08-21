<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Статьи</h1>

<?php
$posts = Post::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="index.php?r=admin/post/create"><i class="fa fa-plus-circle"></i> Новая статья</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($posts as $post) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $post->head; ?></td>
			<td class="col-md-3"><a href="index.php?r=admin/post/update&id=<?php echo $post->id;?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="index.php?r=admin/post/del&id=<?php echo $post->id;?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
