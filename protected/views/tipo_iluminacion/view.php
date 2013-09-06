<?php
/* @var $this Tipo_iluminacionController */
/* @var $model Tipo_iluminacion */

$this->breadcrumbs=array(
	'Tipo Iluminacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tipo_iluminacion', 'url'=>array('index')),
	array('label'=>'Create Tipo_iluminacion', 'url'=>array('create')),
	array('label'=>'Update Tipo_iluminacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tipo_iluminacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Tipo_iluminacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'potencia',
	),
)); ?>
