<?php
/* @var $this DestinoController */
/* @var $model Destino */

$this->breadcrumbs=array(
	'Destinos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Destino', 'url'=>array('index')),
	array('label'=>'Manage Destino', 'url'=>array('admin')),
);
?>

<h1>Registrar Destino</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
