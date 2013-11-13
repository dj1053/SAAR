<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $model ChoferRutaAsignada */

$this->breadcrumbs=array(
	'Chofer Ruta Asignadas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ChoferRutaAsignada', 'url'=>array('index')),
	array('label'=>'Create ChoferRutaAsignada', 'url'=>array('create')),
	array('label'=>'Update ChoferRutaAsignada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ChoferRutaAsignada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ChoferRutaAsignada', 'url'=>array('admin')),
);
?>

<h1>View ChoferRutaAsignada #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_chofer',
		'id_ruta_asignada',
		'id',
	),
)); ?>
