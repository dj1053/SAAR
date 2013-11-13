<?php
/* @var $this TipoChoferController */
/* @var $model TipoChofer */

$this->breadcrumbs=array(
	'Tipo Chofers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoChofer', 'url'=>array('index')),
	array('label'=>'Create TipoChofer', 'url'=>array('create')),
	array('label'=>'View TipoChofer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoChofer', 'url'=>array('admin')),
);
?>

<h1>Update TipoChofer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>