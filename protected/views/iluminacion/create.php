<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */

$this->breadcrumbs=array(
	'Iluminacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Iluminacion', 'url'=>array('index')),
	array('label'=>'Manage Iluminacion', 'url'=>array('admin')),
);
?>

<h1>Create Iluminacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>