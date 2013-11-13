<?php
/* @var $this VehiculoMarcaController */
/* @var $model VehiculoMarca */

$this->breadcrumbs=array(
	'Vehiculo Marcas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VehiculoMarca', 'url'=>array('index')),
	array('label'=>'Create VehiculoMarca', 'url'=>array('create')),
	array('label'=>'View VehiculoMarca', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage VehiculoMarca', 'url'=>array('admin')),
);
?>

<h1>Update VehiculoMarca <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>