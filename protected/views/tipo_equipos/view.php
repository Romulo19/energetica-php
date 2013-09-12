<?php
/* @var $this Tipo_equiposController */
/* @var $model Tipo_equipos */

$this->menu=array(
	array('label'=>'Lista de Equipos', 'url'=>array('index')),
	array('label'=>'Modificar Equipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro que desea eliminar este equipo?')),
);
?>

<div class = 'contenedor'>
<h1>Ver Equipo #<?php echo $model->id; ?></h1>
<hr>
<table class="table table-bordered table-striped">
  
  <tbody>
  		<tr>
  			<td><b>Codigo</b></td>
      		<td><?php echo $model->id; ?></td>
      	</tr>
      	<tr>
      		<td><b>Sistema</b></td>
      		<td><?php echo $model->sistemas->nombre; ?></td>      		
      	</tr>	
      	<tr>	
      		<td><b>Nombre</b></td>
      		<td><?php echo $model->nombre; ?></td>
      	</tr>			
  </tbody>
</table>
</div>