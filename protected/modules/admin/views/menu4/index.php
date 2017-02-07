<?php
/* @var $this Menu4Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu4s',
);

$this->menu=array(
	array('label'=>'Create Menu4', 'url'=>array('create')),
	array('label'=>'Manage Menu4', 'url'=>array('admin')),
);



?>

<h1>Меню (нижнее)</h1>

<?php
$subcategories = Menu4::model()->findAll();
?>

<table class="table">
	<thead>
	<tr>
		<th colspan="3"><a href="<?= Yii::app()->createUrl('admin/menu4/create'); ?>"><i class="fa fa-plus-circle"></i> Добавить</a></th>
	</tr>
	</thead>
	<tbody>
	<?php
	foreach ($subcategories as $subcategory) {
        if ($subcategory->menu3 == 0) {
            if ($subcategory->menu2 == 0) {
                $m1 = Menu1::model()->findByPk($subcategory->menu1);
                $m2 = 0;
                $m3 = 0;
            } else {
                $m2 = Menu2::model()->findByPk($subcategory->menu2);
                $m1 = Menu1::model()->findByPk($m2->parent_id);
                $m3 = 0;
            }
        } else {
            $m3 = Menu3::model()->findByPk($subcategory->menu3);
            $m2 = Menu2::model()->findByPk($m3->parent_id);
            $m1 = Menu1::model()->findByPk($m2->parent_id);
        }
		?>
		<tr>
			<td class="col-md-6"><?php echo $subcategory->name; ?> (<?= $m1->name." - ".$m2->name." - ".$m3->name; ?>)</td>
			<td class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/menu4/update', array('id'=>$subcategory->id)) ?>">Редактировать</a> </td>
			<td class="col-md-3"><a href="<?= Yii::app()->createUrl('admin/menu4/del', array('id'=>$subcategory->id)) ?>">Удалить </a></td>
		</tr>
		<?php
	}
	?>
	</tbody>
</table>
