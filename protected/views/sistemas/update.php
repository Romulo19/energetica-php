<?php
/* @var $this SistemasController */
/* @var $model Sistemas */

$this->breadcrumbs=array(
	'Sistemases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sistemas', 'url'=>array('index')),
	array('label'=>'Create Sistemas', 'url'=>array('create')),
	array('label'=>'View Sistemas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sistemas', 'url'=>array('admin')),
);
?>

<h1>Update Sistemas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>