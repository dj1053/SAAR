<?php
/* @var $this VehiculoMarcaController */
/* @var $model VehiculoMarca */

$this->breadcrumbs=array(
	'Vehiculo Marcas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VehiculoMarca', 'url'=>array('index')),
	array('label'=>'Manage VehiculoMarca', 'url'=>array('admin')),
);
?>

<h1>Create VehiculoMarca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>