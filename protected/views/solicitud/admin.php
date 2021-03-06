<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicituds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Create Solicitud', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#solicitud-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Consultar Solicitudes</h1>

<!--
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Buscar','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'solicitud-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'template'=>"{items}",
	'type'=>'striped bordered condensed',
	'columns'=>array(
        array('name'=>'solicitante', 'header'=>'Solicitante'),
        array('name'=>'id_destino', 'header'=>'Destino'),
        array('name'=>'fecha_salida', 'header'=>'Fecha de Salida'),
        array('name'=>'fecha_llegada', 'header'=>'Fecha de Llegada'),
		/*'id',
		'fecha_salida',
		'fecha_llegada',
		'hora_salida',
		'hora_llegada',
		'lugar_encuentro',*/
		/*
		'id_destino',
		'id_estatus_solicitud',
		'solicitante',
		*/
		/*array(
			'class'=>'CButtonColumn',
		),*/
		array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
	),
)); ?>
