<?php
/* @var $this Menu3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu3s',
);

$this->menu=array(
	array('label'=>'Create Menu3', 'url'=>array('create')),
	array('label'=>'Manage Menu3', 'url'=>array('admin')),
);
?>

<h1>Меню (уровень 3)</h1>

<?php
$subcategories = Menu3::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="<?= Yii::app()->createUrl('admin/menu3/create') ?>"><i class="fa fa-plus-circle"></i> Добавить</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($subcategories as $subcategory) {
		?>
		<tr>
			<td class="col-md-6"><?php echo $subcategory->name; ?> (<?php $category = Menu2::model()->findByPk($subcategory->parent_id); $i = Menu1::model()->findByPk($category->parent_id); echo $category->name." - ".$i->name; ?>)</td>
			<td class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/menu3/update', array('id'=>$subcategory->id)) ?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/menu3/del', array('id'=>$subcategory->id)) ?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
