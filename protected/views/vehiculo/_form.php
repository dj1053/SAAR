<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'vehiculo-form',
    'htmlOptions'=>array('class'=>'well'),
	));
?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serial_carroceria'); ?>
		<?php echo $form->textField($model,'serial_carroceria',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'serial_carroceria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio'); ?>
		<?php echo $form->textField($model,'anio',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'anio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_puestos'); ?>
		<?php echo $form->textField($model,'n_puestos'); ?>
		<?php echo $form->error($model,'n_puestos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_vehiculo'); ?>
		<?php echo $form->textField($model,'id_tipo_vehiculo'); ?>
		<?php echo $form->error($model,'id_tipo_vehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estatus_vehiculo'); ?>
		<?php echo $form->textField($model,'id_estatus_vehiculo'); ?>
		<?php echo $form->error($model,'id_estatus_vehiculo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_modelo'); ?>
		<?php echo $form->textField($model,'id_modelo'); ?>
		<?php echo $form->error($model,'id_modelo'); ?>
	</div>

	<div class="form-actions">
		<?php $submit = $model->isNewRecord ? 'Registrar' : 'Guardar'; ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$submit)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
