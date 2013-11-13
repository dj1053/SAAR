<?php
/* @var $this DestinoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Destinos',
);

$this->menu=array(
	array('label'=>'Create Destino', 'url'=>array('create')),
	array('label'=>'Manage Destino', 'url'=>array('admin')),
);
?>

<h1>Destinos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
