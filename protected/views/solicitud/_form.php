<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'solicitud-form',
    'htmlOptions'=>array('class'=>'well'),
	));
?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model,'solicitante',array('size'=>60,'maxlength'=>256)); ?>
	
	<?php echo $form->textFieldRow($model, 'fecha_salida', array('class'=>'input-small', 'prepend'=>'<i class="icon-calendar"></i>')); ?>


	<?php echo $form->textFieldRow($model, 'fecha_llegada', array('class'=>'input-small', 'prepend'=>'<i class="icon-calendar"></i>')); ?>

	<?php echo $form->textFieldRow($model, 'hora_salida', array('class'=>'input-small', 'prepend'=>'<i class="icon-time"></i>')); ?>

	<?php echo $form->textFieldRow($model, 'hora_llegada', array('class'=>'input-small', 'prepend'=>'<i class="icon-time"></i>')); ?>

	
	<?php echo $form->textAreaRow($model,'lugar_encuentro',array('rows'=>3, 'cols'=>50)); ?>
	

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
	
	<div class="form-actions">
		<?php $submit = $model->isNewRecord ? 'Registrar' : 'Guardar'; ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$submit)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
