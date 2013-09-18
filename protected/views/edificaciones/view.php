<?php
/* @var $this EdificacionesController */
/* @var $model Edificaciones */


$this->menu=array(
	array('label'=>'Lista de Edificaciones', 'url'=>array('index')),
	array('label'=>'Crear Nueva Area', 'url'=>array('/areas/create', 'idE'=>$model->id)),
  array('label'=>'Eliminar Edificación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Esta seguro que desea eliminar esta edificación?')),
	
);
?>
<div class = 'contenedor'>
<h1>Ver Edificación #<?php echo $model->id; ?></h1>
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
      		<td><b>Dirección</b></td>
      		<td><?php echo $model->direccion; ?></td>
      	</tr>
      	<tr>      		
      		<td><b>Rif</b></td>
      		<td><?php echo $model->rif; ?></td>
      	</tr>	
    	<tr>    		
      		<td><b>Telefono</b></td>
      		<td><?php echo $model->telefono; ?></td>
    	</tr>	
  </tbody>
</table>
<hr>
<center><h3>Areas</h3></center>
<hr>
<?php echo "<button class='btn'>".CHtml::link('<i class="icon-plus"></i> Agregar Nueva Area', array('/areas/create', 'idE'=>$model->id))."</button>";?>
<br><br>
<table class="table table-bordered table-striped">  
  	<?php 
    $carga_area_total=0;
    $carga_edi_total=0;
    $consumo_diario_area=0;
    $consumo_diario_edi=0;    
    $consumo_mensual_area=0;
    $consumo_mensual_edi=0;
  		foreach ($model->areases as $area) {
        foreach ($area->equipos as $equipo) {
          $carga_area_total=$carga_area_total+$equipo->potencia;
          $consumo_diario_equipo=$equipo->potencia*$equipo->hora_diarias;
          $consumo_diario_area=$consumo_diario_area+$consumo_diario_equipo;
          $consumo_mensual_equipo=$consumo_diario_equipo*$equipo->dias_mensual;
          $consumo_mensual_area=$consumo_mensual_area+$consumo_mensual_equipo;
        }
  		?>
  <thead>
      <tr>
        <th colspan='5' id='tituloEquipo'><center><?php echo 'Area #'.$area->id; ?></center></th>
      </tr>
  </thead>
  <tbody>
    <tr>      
      <th id="campos">Ver</th>
      <th id="campos">Nombre</th>
      <th id="campos">Consumo Diario</th>
      <th id="campos">Consumo Mensual</th>     
      <th id="campos">Carga Conectada</th>
    </tr>
  		<tr>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('/areas/view', 'id'=>$area->id)); ?></td></button>
      		<td><?php echo $area->nombre; ?></td>
          <td><?php echo $consumo_diario_area; ?> KWH/dia</td>      		
          <td><?php echo $consumo_mensual_area;?> KWH/mes</td>
          <td><?php echo $carga_area_total; ?> KW</td>
      	</tr>
   	<?php    
      $carga_edi_total=$carga_edi_total+$carga_area_total;
      $consumo_diario_edi=$consumo_diario_edi+$consumo_diario_area;
      $consumo_mensual_edi=$consumo_mensual_edi+$consumo_mensual_area;
      $carga_area_total=0;
      $consumo_diario_area=0;
      $consumo_mensual_area=0;
   	}  	

  	?>
    
  </tbody>
   <thead>
      <tr>
        <th colspan='6' id='tituloResultado'><center>Resultado</center></th>
      </tr>
  </thead>
  <tbody>
    <tr>      
      <td rowspan='2' colspan="2" id="gris"><b>Total de la Edificación</b></td>
      <th id="campos">Consumo Diario</th>
      <th id="campos">Consumo Mensual</th>     
      <th id="campos" >Carga Conectada</th>
    </tr>
    <tr>
          <td><?php echo $consumo_diario_edi; ?> KWH/dia</td>          
          <td><?php echo $consumo_mensual_edi;?> KWH/mes</td>
          <td><?php echo $carga_edi_total; ?> KW</td>
        </tr>
  </tbody>
</table>
</div>