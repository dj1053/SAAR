<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->