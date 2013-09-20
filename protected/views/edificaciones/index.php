<?php
/* @var $this EdificacionesController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Nueva Edificación', 'url'=>array('create')),
);
?>
<div class='contenedor'>
<h1>Edificaciones</h1>
<hr>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Ver</th>
      <th>Nombre</th>      
      <th>Consumo Diario</th>
      <th>Consumo Mensual</th>     
      <th>Carga Conectada</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
    $carga_area_total=0;
    $carga_edi_total=0;
    $carga_total=0;
    $consumo_diario_area=0;
    $consumo_diario_edi=0;  
    $consumo_diario_total=0;
    $consumo_mensual_area=0;
    $consumo_mensual_edi=0;
    $consumo_mensual_total=0;
  	foreach ($edificaciones as $edificacion) {    
      foreach ($edificacion->areases as $area) {
        foreach ($area->equipos as $equipo) {
          $carga_area_total=$carga_area_total+$equipo->potencia;
          $consumo_diario_equipo=$equipo->potencia*$equipo->hora_diarias;
          $consumo_diario_area=$consumo_diario_area+$consumo_diario_equipo;
          $consumo_mensual_equipo=$consumo_diario_equipo*$equipo->dias_mensual;
          $consumo_mensual_area=$consumo_mensual_area+$consumo_mensual_equipo;
        }
        foreach ($area->iluminacions as $iluminacion) {
        $consumo_diario_iluminacion=$iluminacion->tipo_Iluminacion->potencia*$iluminacion->cantidad*$iluminacion->horas_operacion;
        $consumo_mensual_iluminacion=$consumo_diario_iluminacion*$iluminacion->dias_mensual;     
        $carga_iluminacion=$iluminacion->tipo_Iluminacion->potencia*$iluminacion->cantidad;
      }
        $carga_edi_total=$carga_edi_total+$carga_area_total;
        $consumo_diario_edi=$consumo_diario_edi+$consumo_diario_area;
        $consumo_mensual_edi=$consumo_mensual_edi+$consumo_mensual_area;
        $carga_area_total=0;
        $consumo_diario_area=0;
        $consumo_mensual_area=0;
      }
  		?>
  		<tr>
          <td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$edificacion->id)); ?></td></button>
      		<td><?php echo $edificacion->nombre; ?></td>
          <td><?php echo $consumo_diario_edi=$consumo_diario_edi+$consumo_diario_iluminacion; ?> KWH/dia</td>
          <td><?php echo $consumo_mensual_edi=$consumo_mensual_edi+$consumo_mensual_iluminacion; ?> KWH/mes</td>
          <td><?php echo $carga_edi_total=$carga_edi_total+$carga_iluminacion; ?> KW</td>
      </tr>
   	<?php
      $consumo_mensual_total=$consumo_mensual_total+$consumo_mensual_edi;
      $consumo_diario_total=$consumo_diario_total+$consumo_diario_edi;
      $carga_total=$carga_total+$carga_edi_total;
      $consumo_mensual_edi=0;
      $carga_edi_total=0;
      $consumo_diario_edi=0;
      $consumo_diario_iluminacion=0;
      $consumo_mensual_iluminacion=0;  
      $carga_iluminacion=0; 
  	}

  	?>
    <thead>
      <tr>
        <th colspan='6' id='tituloResultado'><center>Resultado</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>      
        <th rowspan="2" colspan="2" id="gris"><b>Total Registrado</b></td>
        <th id="campos">Consumo Diario</th>
        <th id="campos">Consumo Mensual</th>     
        <th id="campos" >Carga Conectada</th>
      </tr>
      <tr>
            <td><?php echo $consumo_diario_total; ?> KWH/dia</td>          
            <td><?php echo $consumo_mensual_total;?> KWH/mes</td>
            <td><?php echo $carga_total; ?> KW</td>
          </tr>
    </tbody>
  </tbody>
</table>
</div>