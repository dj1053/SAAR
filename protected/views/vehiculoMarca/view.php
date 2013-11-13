<?php
/* @var $this VehiculoMarcaController */
/* @var $model VehiculoMarca */

$this->breadcrumbs=array(
	'Vehiculo Marcas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List VehiculoMarca', 'url'=>array('index')),
	array('label'=>'Create VehiculoMarca', 'url'=>array('create')),
	array('label'=>'Update VehiculoMarca', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete VehiculoMarca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VehiculoMarca', 'url'=>array('admin')),
);
?>

<h1>View VehiculoMarca #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marca',
	),
)); ?>
