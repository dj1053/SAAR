<?php
/* @var $this ChoferController */
/* @var $model Chofer */

$this->breadcrumbs=array(
	'Chofers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Chofer', 'url'=>array('index')),
	array('label'=>'Create Chofer', 'url'=>array('create')),
	array('label'=>'Update Chofer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Chofer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Chofer', 'url'=>array('admin')),
);
?>

<h1>Chofer <?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'cedula',
		'id_tipo_chofer',
		'id_estatus_chofer',
	),
)); ?>
