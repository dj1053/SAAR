<?php
/* @var $this ChoferController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Chofers',
);

$this->menu=array(
	array('label'=>'Create Chofer', 'url'=>array('create')),
	array('label'=>'Manage Chofer', 'url'=>array('admin')),
);
?>

<h1>Chofers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
