<?php
/* @var $this Cat3Controller */
/* @var $dataProvider CActiveDataProvider */


?>

<h1>Нижнее меню</h1>

<?php
$cat3s = Cat3::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="index.php?r=admin/cat3/create"><i class="fa fa-plus-circle"></i> Новый пункт</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($cat3s as $cat3) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $cat3->name; ?> (<?php $cat = Category::model()->findByPk($cat3->category_id); $cat2 = Subcategory::model()->findByPk($cat3->subcategory_id); echo $cat->name; if($cat2) echo " - ".$cat2->name; ?>)</td>
			<td class="col-md-3"><a href="index.php?r=admin/cat3/update&id=<?php echo $cat3->id;?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="index.php?r=admin/cat3/del&id=<?php echo $cat3->id;?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
