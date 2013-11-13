<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chofer Ruta Asignadas',
);

$this->menu=array(
	array('label'=>'Create ChoferRutaAsignada', 'url'=>array('create')),
	array('label'=>'Manage ChoferRutaAsignada', 'url'=>array('admin')),
);
?>

<h1>Chofer Ruta Asignadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
