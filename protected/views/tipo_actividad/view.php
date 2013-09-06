<?php
/* @var $this Tipo_actividadController */
/* @var $model Tipo_actividad */


$this->menu=array(
	array('label'=>'Listas de Actividades', 'url'=>array('index')),
	array('label'=>'Modificar Actividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar esta Actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro que desea eliminar esta actividad?')),
	
);
?>


<div class = 'contenedor'>
<h1>Ver Actividad #<?php echo $model->id." / ".$model->nombre; ?></h1>
<hr>
<table class="table table-bordered table-striped">
  
  <tbody>
  		<tr>
  			<td><b>Codigo</b></td>
      		<td><?php echo $model->id; ?></td>
      	</tr>
      	<tr>
      		<td><b>Nombre</b></td>
      		<td><?php echo $model->nombre; ?></td>      		
      	</tr>	
      	<tr>	
      		<td><b>Iluminancia A</b></td>
      		<td><?php echo $model->iluminancia_a; ?></td>
      	</tr>
        <tr>	
      		<td><b>Iluminancia C</b></td>
      		<td><?php echo $model->iluminancia_c; ?></td>
      	</tr>			
  </tbody>
</table>
</div>