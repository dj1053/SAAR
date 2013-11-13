<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_salida'); ?>
		<?php echo $form->textField($model,'fecha_salida'); ?>
		<?php echo $form->error($model,'fecha_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_llegada'); ?>
		<?php echo $form->textField($model,'fecha_llegada'); ?>
		<?php echo $form->error($model,'fecha_llegada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_salida'); ?>
		<?php echo $form->textField($model,'hora_salida'); ?>
		<?php echo $form->error($model,'hora_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_llegada'); ?>
		<?php echo $form->textField($model,'hora_llegada'); ?>
		<?php echo $form->error($model,'hora_llegada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_encuentro'); ?>
		<?php echo $form->textArea($model,'lugar_encuentro',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'lugar_encuentro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_destino'); ?>
		<?php echo $form->textField($model,'id_destino'); ?>
		<?php echo $form->error($model,'id_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_estatus_solicitud'); ?>
		<?php echo $form->textField($model,'id_estatus_solicitud'); ?>
		<?php echo $form->error($model,'id_estatus_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitante'); ?>
		<?php echo $form->textField($model,'solicitante',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'solicitante'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->