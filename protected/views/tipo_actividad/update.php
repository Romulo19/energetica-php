<?php
/* @var $this Tipo_actividadController */
/* @var $model Tipo_actividad */


$this->menu=array(
	array('label'=>'Volver a la Actividad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Lista de Actividades', 'url'=>array('index')),

);
?>

<div class = 'contenedorForm'>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>