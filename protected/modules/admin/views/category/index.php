<?php
/* @var $this CategoryController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>Категории</h1>

<?php
$categories = Category::model()->findAll();
?>

<table class="table">
    <thead>
    <tr>
        <th colspan="3"><a href="index.php?r=admin/category/create"><i class="fa fa-plus-circle"></i> Новая категория</a></th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($categories as $category) {
        ?>
        <tr>
            <td class="col-md-6"><?php echo $category->name; ?></td>
            <td class="col-md-3"><a href="index.php?r=admin/category/update&id=<?php echo $category->id;?>">Редактировать</a> </td>
            <td class="col-md-3"><a href="index.php?r=admin/category/del&id=<?php echo $category->id;?>">Удалить </a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
