<?php
/* @var $this Tipo_actividadController */
/* @var $model Tipo_actividad */


$this->menu=array(
	array('label'=>'Listas de Actividades', 'url'=>array('index')),
);
?>
<div class='contenedor' id='form'>
<h1>Nuevo Tipo de Actividad</h1>
<hr>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>