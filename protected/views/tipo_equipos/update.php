<?php
/* @var $this Tipo_equiposController */
/* @var $model Tipo_equipos */


$this->menu=array(

	array('label'=>'Volver al Equipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Lista de Equipos', 'url'=>array('index')),
);
?>

<div class='contenedor' id='form'>

	<h1>Moificar Equipo #<?php echo $model->id; ?></h1>
	<hr>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>