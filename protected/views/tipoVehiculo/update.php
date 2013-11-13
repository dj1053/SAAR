<?php
/* @var $this TipoVehiculoController */
/* @var $model TipoVehiculo */

$this->breadcrumbs=array(
	'Tipo Vehiculos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoVehiculo', 'url'=>array('index')),
	array('label'=>'Create TipoVehiculo', 'url'=>array('create')),
	array('label'=>'View TipoVehiculo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoVehiculo', 'url'=>array('admin')),
);
?>

<h1>Update TipoVehiculo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>