<?php
/* @var $this TipoChoferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Chofers',
);

$this->menu=array(
	array('label'=>'Create TipoChofer', 'url'=>array('create')),
	array('label'=>'Manage TipoChofer', 'url'=>array('admin')),
);
?>

<h1>Tipo Chofers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
