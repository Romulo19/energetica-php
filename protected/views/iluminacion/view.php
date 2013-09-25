<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */


$this->menu=array(
	array('label'=>'Editar Iluminacion', 'url'=>array('update', 'id'=>$model->id, 'idA'=>$model->areas_id)),
	array('label'=>'Eliminar Iluminacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id, 'idA'=>$model->areas_id),'confirm'=>'¿Deseas eliminar esta iluminacion?')),
);
?>

<h1>Ver Iluminación</h1>
<hr>
<table class="table table-bordered table-striped">
  
  <tbody>
  		<tr>
  			<td><b>Nombre</b></td>
      		<td><?php echo $model->tipo_Iluminacion->nombre; ?></td>
      	</tr>
      	<tr>
  			<td><b>Area</b></td>
      		<td><?php echo $model->areas->nombre; ?></td>
      	</tr>
       <tr>
  			<td><b>Potencia Luminica</b></td>
      		<td><?php echo $model->tipo_Iluminacion->potencia; ?> KW</td>
      	</tr>
        <tr>
  			<td><b>Cantidad</b></td>
      		<td><?php echo $model->cantidad; ?> unidad(es)</td>
      	</tr>  	
      	<tr>
  			<td><b>Horas de Operación</b></td>
      		<td><?php echo $model->horas_operacion; ?> hora(s)</td>
      	</tr> 	
      	<tr>
  			<td><b>Dias de Operación al Mes</b></td>
      		<td><?php echo $model->dias_mensual; ?> dia(s)</td>
      	</tr> 
      	<tr>
  			<td><b>Rendimiento Luminico</b></td>
      		<td><?php echo $model->rendimiento_luminico; ?> Lm/W</td>
      	</tr> 
      	<tr>
  			<td><b>Altura de Colocación</b></td>
      		<td><?php echo $model->altura_de_colocacion; ?> m</td>
      	</tr>			
  </tbody>
</table>

