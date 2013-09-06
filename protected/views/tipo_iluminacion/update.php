<?php
/* @var $this Tipo_iluminacionController */
/* @var $model Tipo_iluminacion */

$this->breadcrumbs=array(
	'Tipo Iluminacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipo_iluminacion', 'url'=>array('index')),
	array('label'=>'Create Tipo_iluminacion', 'url'=>array('create')),
	array('label'=>'View Tipo_iluminacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipo_iluminacion', 'url'=>array('admin')),
);
?>

<h1>Update Tipo_iluminacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>