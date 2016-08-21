<?php
/* @var $this SubcategoryController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Подкатегории</h1>

<?php
$subcategories = Subcategory::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="index.php?r=admin/subcategory/create"><i class="fa fa-plus-circle"></i> Новая подкатегория</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($subcategories as $subcategory) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $subcategory->name; ?> (<?php $category = Category::model()->findByPk($subcategory->category_id); echo $category->name; ?>)</td>
			<td class="col-md-3"><a href="index.php?r=admin/subcategory/update&id=<?php echo $subcategory->id;?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="index.php?r=admin/subcategory/del&id=<?php echo $subcategory->id;?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>