<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $model ChoferRutaAsignada */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_chofer'); ?>
		<?php echo $form->textField($model,'id_chofer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ruta_asignada'); ?>
		<?php echo $form->textField($model,'id_ruta_asignada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->