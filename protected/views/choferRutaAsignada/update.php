<?php
/* @var $this ChoferRutaAsignadaController */
/* @var $model ChoferRutaAsignada */

$this->breadcrumbs=array(
	'Chofer Ruta Asignadas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ChoferRutaAsignada', 'url'=>array('index')),
	array('label'=>'Create ChoferRutaAsignada', 'url'=>array('create')),
	array('label'=>'View ChoferRutaAsignada', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ChoferRutaAsignada', 'url'=>array('admin')),
);
?>

<h1>Update ChoferRutaAsignada <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>