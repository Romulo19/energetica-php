<?php
/* @var $this EquiposController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Equipos', 'url'=>array('create')),
	
);
?>

<h1>Equipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
