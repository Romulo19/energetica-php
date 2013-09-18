<?php
/* @var $this Tipo_iluminacionController */
/* @var $model Tipo_iluminacion */



$this->menu=array(
	array('label'=>'Lista de Tipo iluminacion', 'url'=>array('index')),)
	
?>

<div class='contenedorForm'>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>