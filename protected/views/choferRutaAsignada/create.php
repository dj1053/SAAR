<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $model ChoferRutaAsignada */

$this->breadcrumbs=array(
	'Chofer Ruta Asignadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ChoferRutaAsignada', 'url'=>array('index')),
	array('label'=>'Manage ChoferRutaAsignada', 'url'=>array('admin')),
);
?>

<h1>Create ChoferRutaAsignada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>