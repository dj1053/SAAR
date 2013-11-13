<?php
/* @var $this TipoChoferController */
/* @var $model TipoChofer */

$this->breadcrumbs=array(
	'Tipo Chofers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoChofer', 'url'=>array('index')),
	array('label'=>'Create TipoChofer', 'url'=>array('create')),
	array('label'=>'Update TipoChofer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoChofer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoChofer', 'url'=>array('admin')),
);
?>

<h1>View TipoChofer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipo',
	),
)); ?>
