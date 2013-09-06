<?php
/* @var $this ComponentesController */
/* @var $model Componentes */

$this->breadcrumbs=array(
	'Componentes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Componentes', 'url'=>array('index')),
	array('label'=>'Create Componentes', 'url'=>array('create')),
	array('label'=>'View Componentes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Componentes', 'url'=>array('admin')),
);
?>

<h1>Update Componentes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>