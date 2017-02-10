<div class="col-md-12">
<?php

$fp = fopen(dirname(__FILE__).'/../../../../runtime/application.log', 'r');
$str = "";
if($fp){
    while(!feof($fp)){
        $text = fgets($fp, 999);
        $str = $str.$text."<br>";
    }
}
fclose($fp);
$log = array_reverse(explode("---", $str));

foreach ($log as $item){
    echo $item."<hr>";
}
?>
    <a href="<?= Yii::app()->createUrl('admin/default/clear'); ?>">Очистить</a>
</div>
