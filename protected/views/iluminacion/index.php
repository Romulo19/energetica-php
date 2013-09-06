<?php
/* @var $this IluminacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iluminacions',
);

$this->menu=array(
	array('label'=>'Create Iluminacion', 'url'=>array('create')),
	array('label'=>'Manage Iluminacion', 'url'=>array('admin')),
);
?>

<h1>Iluminacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
