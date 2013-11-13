<?php
/* @var $this ChoferController */
/* @var $model Chofer */

$this->breadcrumbs=array(
	'Chofers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Chofer', 'url'=>array('index')),
	array('label'=>'Manage Chofer', 'url'=>array('admin')),
);
?>

<h1>Create Chofer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>