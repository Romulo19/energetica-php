<?php
/* @var $this EdificacionesController */
/* @var $model Edificaciones */



$this->menu=array(
	array('label'=>'List Edificaciones', 'url'=>array('index')),
	
);
?>
<div class = 'contenedor' id='form'>
<h1>Modificar Edificacion #<?php echo $model->id; ?></h1>
<hr>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>