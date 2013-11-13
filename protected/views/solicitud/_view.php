<?php
/* @var $this SolicitudController */
/* @var $data Solicitud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_salida')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_llegada')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_llegada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_llegada')); ?>:</b>
	<?php echo CHtml::encode($data->hora_llegada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_encuentro')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_encuentro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_destino')); ?>:</b>
	<?php echo CHtml::encode($data->id_destino); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estatus_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->id_estatus_solicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitante')); ?>:</b>
	<?php echo CHtml::encode($data->solicitante); ?>
	<br />

	*/ ?>

</div>