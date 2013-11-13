<?php
/* @var $this ChoferController */
/* @var $data Chofer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_chofer')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_chofer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estatus_chofer')); ?>:</b>
	<?php echo CHtml::encode($data->id_estatus_chofer); ?>
	<br />


</div>