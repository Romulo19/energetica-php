<div id='hoja'>
<center><h1>Reporte de la Edificación #<?php echo $model->id; ?></h1></center>
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
        <td colspan='4'><center><b><?php echo 'Area #'.$area->id; ?></b></center></td>
      </tr>
  </thead>
  <tbody>
    <tr>      
      <th id="campos">Nombre</th>
      <th id="campos">Consumo Diario</th>
      <th id="campos">Consumo Mensual</th>     
      <th id="campos">Carga Conectada</th>
    </tr>
  		<tr>
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
        <td colspan='6'><center><b>Resultado</b></center></td>
      </tr>
  </thead>
  <tbody>
    <tr>      
      <td rowspan='2' id="gris"><b>Total de la Edificación</b></td>
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