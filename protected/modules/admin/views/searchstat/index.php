<?php
/* @var $this SearchstatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Search Stats',
);

$this->menu=array(
	array('label'=>'Create SearchStat', 'url'=>array('create')),
	array('label'=>'Manage SearchStat', 'url'=>array('admin')),
);
?>

<h1>Статистика поиска</h1>

<?php
$posts = SearchStat::model()->findAll(array('order'=>'count DESC'));
?>

<table class="table">
	<tbody>
	<?php
	foreach ($posts as $post) {
		?>
		<tr>
			<td class=""><?php echo $post->keyword; ?></td>
			<td class=""><?= $post->count; ?></td>
			<td class=""><?= date("d.m.Y", $post->last); ?></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
