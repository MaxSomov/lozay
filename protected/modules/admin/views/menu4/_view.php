<?php
/* @var $this Menu4Controller */
/* @var $data Menu4 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu1')); ?>:</b>
	<?php echo CHtml::encode($data->menu1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu2')); ?>:</b>
	<?php echo CHtml::encode($data->menu2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu3')); ?>:</b>
	<?php echo CHtml::encode($data->menu3); ?>
	<br />


</div>