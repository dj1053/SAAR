<?php
/* @var $this VehiculoMarcaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehiculo Marcas',
);

$this->menu=array(
	array('label'=>'Create VehiculoMarca', 'url'=>array('create')),
	array('label'=>'Manage VehiculoMarca', 'url'=>array('admin')),
);
?>

<h1>Vehiculo Marcas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
