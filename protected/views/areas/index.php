<?php
/* @var $this AreasController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create Areas', 'url'=>array('create')),
	array('label'=>'Manage Areas', 'url'=>array('admin')),
);
?>

<h1>Areases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
