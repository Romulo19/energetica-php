<?php
/* @var $this EquiposController */
/* @var $model Equipos */


$this->menu=array(
	
	array('label'=>'Volver a Area', 'url'=>array('/areas/view/','id'=>$model->areas_id)),
	array('label'=>'Modificar Equipo', 'url'=>array('update', 'id'=>$model->id, 'idA'=>$model->areas_id)),
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
          <td><b>Area</b></td>
          <td><?php echo $model->areas->nombre; ?></td>
      </tr> 
        <tr>        
            <td><b>Sistema</b></td>
            <td><?php echo $model->sistemas->nombre; ?></td>
        </tr>     
        <tr>        
            <td><b>Tipo de Equipo</b></td>
            <td><?php echo $model->tipo_Equipos->nombre; ?></td>
        </tr>
        <tr>        
          <td><b>Potencia</b></td>
          <td><?php echo $model->potencia; ?> KW</td>
      </tr>
      <?php if($model->sistemas->eficiencia){?> 
      <tr>        
          <td><b>Eficiencia</b></td>
          <td><?php echo $model->sistemas->eficiencia; ?> BTU/h/W</td>
      </tr> 
      <?php } ?>
      	<tr>
      		<td><b>Horas Diarias</b></td>
      		<td><?php echo $model->hora_diarias.' hora(s)'; ?></td>      		
      	</tr>	
      	<tr>	
      		<td><b>Dias Mensual</b></td>
      		<td><?php echo $model->dias_mensual.' dia(s)'; ?></td>
      	</tr>  
        <tr>
          <td><b>Consumo Diario</b></td>
          <td><?php echo $consumo_diario_equipo=$model->potencia*$model->hora_diarias;?> KWH/dia</td>         
        </tr> 
          <td><b>Consumo Mensual</b></td>
          <td><?php echo $consumo_diario_equipo*$model->dias_mensual;?> KWH/mes</td>         
        </tr>         
        <tr>
          <td><b>Carga Conectada</b></td>
          <td><?php echo $model->potencia; ?> KW</td>         
        </tr> 
        <tr>
        <tr>        			
  </tbody>
</table>
</div>