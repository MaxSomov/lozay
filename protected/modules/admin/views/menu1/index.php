<?php
/* @var $this Menu1Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu1s',
);

$this->menu=array(
	array('label'=>'Create Menu1', 'url'=>array('create')),
	array('label'=>'Manage Menu1', 'url'=>array('admin')),
);
?>

<h1>Меню (уровень 1)</h1>

<?php
$categories = Menu1::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="index.php?r=admin/menu1/create"><i class="fa fa-plus-circle"></i> Добавить</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($categories as $category) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $category->name; ?></td>
			<td class="col-md-3"><a href="index.php?r=admin/menu1/update&id=<?php echo $category->id;?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="index.php?r=admin/menu1/del&id=<?php echo $category->id;?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
