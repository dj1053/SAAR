<?php
/* @var $this VehiculoController */
/* @var $data Vehiculo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::encode($data->placa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serial_carroceria')); ?>:</b>
	<?php echo CHtml::encode($data->serial_carroceria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio')); ?>:</b>
	<?php echo CHtml::encode($data->anio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_puestos')); ?>:</b>
	<?php echo CHtml::encode($data->n_puestos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_estatus_vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->id_estatus_vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->id_modelo); ?>
	<br />

	*/ ?>

</div>