<?php
/* @var $this Tipo_iluminacionController */
/* @var $model Tipo_iluminacion */


$this->menu=array(
	array('label'=>'Listas de iluminacion', 'url'=>array('index')),
);
?>

<div class='contenedor' id='form'>

<h1>Nuevo Tipo de Iluminacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>