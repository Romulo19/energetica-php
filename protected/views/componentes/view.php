<?php
/* @var $this ComponentesController */
/* @var $model Componentes */

$this->breadcrumbs=array(
	'Componentes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Componentes', 'url'=>array('index')),
	array('label'=>'Create Componentes', 'url'=>array('create')),
	array('label'=>'Update Componentes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Componentes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Componentes', 'url'=>array('admin')),
);
?>

<h1>View Componentes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'variable',
		'valor',
		'tipo_equipos_id',
	),
)); ?>
