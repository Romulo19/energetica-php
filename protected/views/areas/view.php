<?php
/* @var $this AreasController */
/* @var $model Areas */


$this->menu=array(
	array('label'=>'Volver a Edificacion', 'url'=>array('/edificaciones/view', 'id'=>$model->edificaciones_id)),
	array('label'=>'Crear Nuevo Equipo', 'url'=>array('/equipos/create', 'id'=>$model->id)),
	array('label'=>'Eliminar Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro que desea eliminar esta area?')),
	);
?>

<div class = 'contenedor'>
<h1>Ver Area #<?php echo $model->id." / ".$model->nombre; ?></h1>
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
      		<td><b>Dimension</b></td>
      		<td><?php echo $model->dimensiones; ?></td>
      	</tr>
      	<tr>      		
      		<td><b>Carga Termica</b></td>
      		<td><?php echo $model->carga_termica; ?></td>
      	</tr>	
    	<tr>    		
      		<td><b>CO2</b></td>
      		<td><?php echo $model->co2; ?></td>
    	</tr>
    	<tr>    		
      		<td><b>Edificacion</b></td>
      		<td><?php echo $model->edificaciones->nombre; ?></td>
    	</tr>    	
    	<tr>    		
      		<td><b>Tipo de Actividad</b></td>
      		<td><?php echo $model->tipoActividad->nombre; ?></td>
    	</tr>				
  </tbody>
</table>
<hr>
<center><h3>Iluminación</h3></center>
<hr>
<table class="table table-bordered table-striped">
<tbody>
  <thead>
    <tr>
      <th>Tipo de Luminaria</th>      
      <th>Potencia Luminaria</th>
      <th>Cantidad</th>
      <th>Horas de Operacición</th>
      <th>Iluminancia Promedio</th>
      <th>Rendimiento Luminico</th>
      <th>Altura de Colocacion</th>
    </tr>
  </thead>
</tbody>
</table>
<hr>
<center><h3>Equipos</h3></center>
<hr>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Sistema</th>
      <th>Tipo de Equipo</th>     
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      foreach ($model->equipos as $equipo) {
      ?>
      <tr>
          <td><?php echo 'Equipo #'.$equipo->id; ?></td>          
          <td><?php echo $equipo->tipo_Equipos->nombre; ?></td>
          <td><?php echo $equipo->sistemas->nombre; ?></td>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('/equipos/view', 'id'=>$equipo->id)); ?></td></button>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('/equipos/update', 'id'=>$equipo->id)); ?></td></button>
        </tr>
    <?php
    }   

    ?>
    
  </tbody>
</table>

</div>