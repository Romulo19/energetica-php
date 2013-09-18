<?php
/* @var $this EdificacionesController */
/* @var $model Edificaciones */



$this->menu=array(
	array('label'=>'List Edificaciones', 'url'=>array('index')),
	
);
?>
<div class = 'contenedorForm'>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>