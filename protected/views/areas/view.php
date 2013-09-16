<?php
/* @var $this AreasController */
/* @var $model Areas */


$this->menu=array(
	array('label'=>'Volver a Edificacion', 'url'=>array('/edificaciones/view', 'id'=>$model->edificaciones_id)),
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
      		<td><?php echo $model->tipo_Actividad->nombre; ?></td>
    	</tr>				
  </tbody>
</table>
<hr>
<center><h3>Iluminación</h3></center>
<hr>
<?php
  if (!$model->iluminacions){
    echo "<button class='btn'>".CHtml::link('<i class="icon-plus"></i> Agregar Iluminación', array('/iluminacion/create', 'id'=>$model->id))."</button>";
  }else{
    foreach ($model->iluminacions as $iluminacion) {
      echo "<button class='btn'>".CHtml::link('<i class="icon-pencil"></i> Editar Iluminación', array('/iluminacion/update', 'id'=>$iluminacion->id, 'idA'=>$model->id))."</button>";  
    }
  }
?>
<br>
<br>
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
<tbody>
    <?php 
      foreach ($model->iluminacions as $iluminacion) {
      ?>
      <tr>
          <td><?php echo $iluminacion->tipo_Iluminacion->nombre; ?></td>          
          <td><?php echo $iluminacion->tipo_Iluminacion->potencia; ?></td>
          <td><?php echo $iluminacion->cantidad; ?></td> 
          <td><?php echo $iluminacion->horas_operacion; ?></td>  
          <td><?php echo $iluminacion->iluminancia_promedio; ?></td>  
          <td><?php echo $iluminacion->rendimiento_luminico; ?></td> 
          <td><?php echo $iluminacion->altura_de_colocacion; ?></td>    
        </tr>
    <?php
    }   

    ?>
    
  </tbody>
</table>
<hr>
<center><h3>Equipos</h3></center>
<hr>
<?php echo "<button class='btn'>".CHtml::link('<i class="icon-plus"></i> Agregar Nuevo Equipo', array('/equipos/create', 'id'=>$model->id))."</button>";?>
<br><br>
<table class="table table-bordered table-striped">  
  <tbody>
    <?php
      foreach ($sistemas as $sistema) {
        if (Equipos::model()->findAll('sistemas_id = :idSistema', array(':idSistema'=>$sistema->id))){          
          echo '<thead><th colspan="5"><center><b>'.$sistema->nombre.'</b></center></th></thead>';
          ?>
          <tr>
            <th id="campos">Codigo</th>
            <th id="campos">Tipo de Equipo</th>     
            <th id="campos">Ver</th>
            <th id="campos">Editar</th>
          </tr>
        <?php
        }
        foreach ($model->equipos as $equipo) {
          if ($sistema->id==$equipo->tipo_Equipos->sistemas->id) {          
      ?>
      <tr>
          <td><?php echo '#'.$equipo->id; ?></td>        
          <td><?php echo $equipo->tipo_Equipos->nombre; ?></td>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('/equipos/view', 'id'=>$equipo->id)); ?></td></button>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('/equipos/update', 'id'=>$equipo->id, 'idA'=>$model->id)); ?></td></button>
        </tr>
    <?php          
          }
      }   
    }
    ?>
    
  </tbody>
</table>

</div>