<?php
/* @var $this EdificacionesController */
/* @var $model Edificaciones */


$this->menu=array(
	array('label'=>'Lista de Edificaciones', 'url'=>array('index')),
	
);
?>
<div class = 'contenedor' id='form'>
<h1>Nueva Edificación</h1>
<hr>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>