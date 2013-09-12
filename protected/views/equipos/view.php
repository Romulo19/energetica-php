<?php
/* @var $this EquiposController */
/* @var $model Equipos */


$this->menu=array(
	
	array('label'=>'Volver a Area', 'url'=>array('/areas/view/','id'=>$model->areas_id)),
	array('label'=>'Modificar Equipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Equipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro que desea eliminar este equipo?')),
	
);
?>

<div class = 'contenedor'>
<h1>Ver Equipos #<?php echo $model->id; ?></h1>
<hr>
<table class="table table-bordered table-striped">
  
  <tbody>
  		<tr>
  			<td><b>Codigo</b></td>
      		<td><?php echo $model->id; ?></td>
      	</tr>        
        <tr>        
            <td><b>tipo de Equipo</b></td>
            <td><?php echo $model->tipoEquipos->nombre; ?></td>
        </tr>
      	<tr>
      		<td><b>Horas Diarias</b></td>
      		<td><?php echo $model->hora_diarias; ?></td>      		
      	</tr>	
      	<tr>	
      		<td><b>Dias Mensual</b></td>
      		<td><?php echo $model->dias_mensual; ?></td>
      	</tr>
      	<tr>      		
      		<td><b>Potencia</b></td>
      		<td><?php echo $model->potencia; ?></td>
      	</tr>	
    	<tr>    		
      		<td><b>Eficiencia</b></td>
      		<td><?php echo $model->eficiencia; ?></td>
    	</tr>
    	<tr>    		
      		<td><b>Area</b></td>
      		<td><?php echo $model->areas->nombre; ?></td>
    	</tr>    			
  </tbody>
</table>
</div>