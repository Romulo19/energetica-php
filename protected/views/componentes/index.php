<?php
/* @var $this ComponentesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Componentes',
);

$this->menu=array(
	array('label'=>'Create Componentes', 'url'=>array('create')),
	array('label'=>'Manage Componentes', 'url'=>array('admin')),
);
?>

<h1>Componentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
