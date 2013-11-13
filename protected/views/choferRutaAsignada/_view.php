<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $data ChoferRutaAsignada */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_chofer')); ?>:</b>
	<?php echo CHtml::encode($data->id_chofer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ruta_asignada')); ?>:</b>
	<?php echo CHtml::encode($data->id_ruta_asignada); ?>
	<br />


</div>