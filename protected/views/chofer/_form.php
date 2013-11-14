<?php
/* @var $this ChoferController */
/* @var $model Chofer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'chofer-form',
    'htmlOptions'=>array('class'=>'well'),
	));
?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->textFieldRow($model, 'nombre', array('class'=>'span3','maxlength'=>256)); ?>

	<?php echo $form->textFieldRow($model, 'cedula', array('class'=>'span2','maxlength'=>16)); ?>

	<?php echo $form->dropDownListRow($model, 'id_tipo_chofer',
										CHtml::listData($model->getListaTipoChofer(),'id','tipo'),
										array('empty' => 'Seleccione...')); ?>

	<?php echo $form->dropDownListRow($model, 'id_estatus_chofer',
										CHtml::listData($model->getListaEstatusChofer(),'id','estatus'),
										array('empty' => 'Seleccione...')); ?>

	<div class="form-actions">
		<?php $submit = $model->isNewRecord ? 'Registrar' : 'Guardar'; ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$submit)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Limpiar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
