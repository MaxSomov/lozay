<?php
/* @var $this SubscribeController */
/* @var $model Subscribe */
?>

<?php
    if($model->status == 0){
        ?>
        <h1>Подтверждение подписки</h1>
        <form action="<?= Yii::app()->createUrl('subscribe/submit', array('id'=>$model->id)); ?>" method="post">
            <input name="verification" placeholder="Код подтверждения"><br>
            <button class="btn" type="submit">Продолжить</button>
        </form>
<?php
    }
?>

<?php
if($model->status == 1){
    ?>
    <h1>Подписка оформлена</h1>
    <p><?= $model->email; ?></p>
    <a class="btn" href="<?= Yii::app()->createUrl('subscribe/unsubscribe', array('id'=>$model->id)); ?>">Отписаться</a>
    <?php
}
?>

<?php
if($model->status == 2){
    ?>
    <h1>Подтверждение отписки</h1>
    <form action="<?= Yii::app()->createUrl('subscribe/submit', array('id'=>$model->id)); ?>" method="post">
        <input name="verification" placeholder="Код подтверждения"><br>
        <button class="btn" type="submit">Продолжить</button>
    </form>
    <?php
}
?>