<?php
/* @var $this Menu2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu2s',
);

$this->menu=array(
	array('label'=>'Create Menu2', 'url'=>array('create')),
	array('label'=>'Manage Menu2', 'url'=>array('admin')),
);
?>

<h1>Меню (уровень 2)</h1>

<?php
$subcategories = Menu2::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="index.php?r=admin/menu2/create"><i class="fa fa-plus-circle"></i> Добавить</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($subcategories as $subcategory) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $subcategory->name; ?> (<?php $category = Menu1::model()->findByPk($subcategory->parent_id); echo $category->name; ?>)</td>
			<td class="col-md-3"><a href="index.php?r=admin/menu2/update&id=<?php echo $subcategory->id;?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="index.php?r=admin/menu2/del&id=<?php echo $subcategory->id;?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
