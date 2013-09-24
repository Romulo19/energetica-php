<?php
$this->menu=array(
	array('label'=>'Eliminar Iluminacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id, 'idA'=>$idA),'confirm'=>'¿Esta seguro que desea eliminar esta iluminación?')),
  );

?>
<div class= 'contenedorForm' >

<?php echo $this->renderPartial('_form', array('model'=>$model, 'idA'=>$idA)); ?>
</div>