<?php
/* @var $this TipoChoferController */
/* @var $model TipoChofer */

$this->breadcrumbs=array(
	'Tipo Chofers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoChofer', 'url'=>array('index')),
	array('label'=>'Manage TipoChofer', 'url'=>array('admin')),
);
?>

<h1>Create TipoChofer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>