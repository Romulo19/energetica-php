<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */

$this->breadcrumbs=array(
	'Iluminacions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Iluminacion', 'url'=>array('index')),
	array('label'=>'Create Iluminacion', 'url'=>array('create')),
	array('label'=>'Update Iluminacion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Iluminacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Iluminacion', 'url'=>array('admin')),
);
?>

<h1>View Iluminacion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cantidad',
		'horas_operacion',
		'dias_mensual',
		'iluminancia_pro',
		'rendimien_lu',
		'altura_colo',
		'tipo_Iluminacion_id',
	),
)); ?>
