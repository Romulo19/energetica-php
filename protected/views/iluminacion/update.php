<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */

$this->breadcrumbs=array(
	'Iluminacions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Iluminacion', 'url'=>array('index')),
	array('label'=>'Create Iluminacion', 'url'=>array('create')),
	array('label'=>'View Iluminacion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Iluminacion', 'url'=>array('admin')),
);
?>

<h1>Update Iluminacion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>