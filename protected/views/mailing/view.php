<?php
/* @var $this MailingController */
/* @var $model Mailing */
?>

<?php

if ($model->code != $model->verification) {

    ?>

    <h1>Подтверждение подписки</h1>

    <form action="<?= Yii::app()->createUrl('mailing/submit', array('id' => $model->id)); ?>" method="post">
        <input placeholder="Код из письма" type="text" name="verification"><br>
        <button class="btn" type="submit">Продолжить</button>
    </form>

    <?php
}

else {
    ?>

    <h1>Подписка оформлена</h1>
    <p><?= $model->email; ?></p>
    <a class="btn">Отписаться</a>
    <?php
}
    ?>
