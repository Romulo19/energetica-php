<div id='imp'>
  <button class='btn' id='imprimir'><i class='icon-print'></i></button>
</div>
<br>
<div id='hoja'>
<h1><center>Reporte del Area #<?php echo $model->id." / ".$model->nombre; ?></center></h1>
<hr>
<table class="table table-bordered table-striped">
  
  <tbody>
      <tr>
        <td><b>Codigo</b></td>
          <td><?php echo $model->id; ?></td>
        </tr>
        <tr>        
          <td><b>Edificacion</b></td>
          <td><?php echo $model->edificaciones->nombre; ?></td>
      </tr> 
        <tr>
          <td><b>Nombre</b></td>
          <td><?php echo $model->nombre; ?></td>          
        </tr>             
      <tr>        
          <td><b>Tipo de Actividad</b></td>
          <td><?php echo $model->tipo_Actividad->nombre; ?></td>
      </tr>
      <?php if($model->tipo_Actividad->iluminancia_promedio){?>
      <tr>        
          <td><b>Iluminancia Promedio</b></td>
          <td><?php echo $model->tipo_Actividad->iluminancia_promedio; ?></td>
      </tr>
      <?php } ?>
        <tr>  
          <td><b>Dimension</b></td>
          <td><?php echo $model->dimensiones; ?></td>
        </tr>
                    
  </tbody>
</table>

<br><br>
<table rules='all' border='1' class="table table-bordered table-striped">
<tbody>
  <thead>
    <tr><td colspan="7"><center><h3>Iluminación</h3></center></td></tr>
    <tr height='30px'>
      <td id="campos"><b>Tipo de Luminaria</b></td>      
      <td id="campos"><b>Potencia Luminaria</b></td>
      <td id="campos"><b>Cantidad</b></td>
      <td id="campos"><b>Horas de Operación</b></td>
      <td id="campos"><b>Dias Mensual de Operacición</b></td>
      <td id="campos"><b>Rendimiento Luminico</b></td>
      <td id="campos"><b>Altura de Colocacion</b></td>
    </tr>
  </thead>
</tbody>
<tbody>
    <?php 
      foreach ($model->iluminacions as $iluminacion) {
      ?>
      <tr height='30px'>
          <td><?php echo $iluminacion->tipo_Iluminacion->nombre; ?></td>          
          <td><?php echo $iluminacion->tipo_Iluminacion->potencia; ?> KW</td>
          <td><?php echo $iluminacion->cantidad; ?> Und.</td> 
          <td><?php echo $iluminacion->horas_operacion.' hrs'; ?></td>            
          <td><?php echo $iluminacion->dias_mensual.' dias'; ?></td> 
          <td><?php echo $iluminacion->rendimiento_luminico; ?> Lm/W</td> 
          <td><?php echo $iluminacion->altura_de_colocacion; ?> M</td>    
        </tr>
        <tr height='30px' style="border-top=2px solid ##6E6E6E;">
            <th id="campos">Iluminancia Promedio</th>
            <th id="campos" colspan="2">Consumo Diario</th>
            <th id="campos" colspan="2">Consumo Mensual</th>     
            <th id="campos" colspan="2">Carga Conectada</th>
          </tr>
      <tr height='30px'>
            <td><center><?php echo $iluminacion->iluminancia_promedio; ?></center> </td>  
            <td colspan="2"><center> <?php echo $consumo_diario_iluminacion=$iluminacion->tipo_Iluminacion->potencia*$iluminacion->cantidad*$iluminacion->horas_operacion?> KWH/dia</center> </th>
            <td colspan="2"><center> <?php echo $consumo_mensual_iluminacion=$consumo_diario_iluminacion*$iluminacion->dias_mensual ?> KWH/mes</center> </th>     
            <td colspan="2"><center> <?php echo $carga_iluminacion=$iluminacion->tipo_Iluminacion->potencia*$iluminacion->cantidad;?> KW</center> </th>
        </tr>
    <?php
    }   

    ?>
    
  </tbody>
</table>
<center>
<br>
<table width='675px' rules='all' border='1' class="table table-bordered table-striped">  
  <thead>
  <tr><td colspan='5'><center><h3>Equipos</h3></center></td></tr>
  </thead>
  <tbody>
    <?php
    $carga_area_total=0;
    $carga_sistemas_total=0;
    $consumo_diario_sistema=0;
    $consumo_diario_area=0;    
    $consumo_mensual_sistema=0;
    $consumo_mensual_area=0;
      foreach ($equiposSis as $equipoSis) {
        if (Equipos::model()->findAll('sistemas_id = :idSistema', array(':idSistema'=>$equipoSis->sistemas_id))){          
          echo '<thead><td height="30px" colspan="5" id="campos"><center><b>'.$equipoSis->sistemas->nombre.'</b></center></td></thead>';
          ?>
          <tr height='30px'>               
            
            <th id="campos">Codigo</th>
            <th id="campos">Tipo de Equipo</th> 
            <th id="campos">Consumo Diario</th>
            <th id="campos">Consumo Mensual</th>     
            <th id="campos">Carga Conectada</th> 
          </tr>
        <?php
        foreach ($model->equipos as $equipo) {
          if ($equipoSis->sistemas_id==$equipo->sistemas_id) {          
      ?>
      <tr height='30px'>
          <td><?php echo '#'.$equipo->id; ?></td>        
          <td><?php echo $equipo->tipo_Equipos->nombre; ?></td>
          <td><?php echo $consumo_diario_equipo=$equipo->potencia*$equipo->hora_diarias;?> KWH/dia</th>
          <td><?php echo $consumo_mensual_equipo=$consumo_diario_equipo*$equipo->dias_mensual; ?> KWH/mes</th>     
          <td><?php echo $equipo->potencia?> KW</th>
          <?php $carga_sistemas_total=$carga_sistemas_total+$equipo->potencia; 
                $consumo_diario_sistema=$consumo_diario_sistema+$consumo_diario_equipo;
                $consumo_mensual_sistema=$consumo_mensual_sistema+$consumo_mensual_equipo;
          ?>
        </tr>
    <?php          
          } 
      }
      ?>
      <tr style="border-top=2px solid ##6E6E6E;" height='30px'>
            <td colspan="2" rowspan="2" id='gris'><center><b>Total del Sistema</b></center></td>
            <th id="campos">Consumo Diario</th>
            <th id="campos">Consumo Mensual</th>     
            <th id="campos">Carga Conectada</th>
          </tr>
      <tr height='30px'>
            <td><?php echo $consumo_diario_sistema;?> KWH/dia</th>
            <td><?php echo $consumo_mensual_sistema;?> KWH/mes</th>     
            <td ><?php echo $carga_sistemas_total; ?> KW</th>
        </tr>
      <?Php  
      $carga_area_total=$carga_area_total+$carga_sistemas_total;
      $consumo_diario_area=$consumo_diario_area+$consumo_diario_sistema;
      $consumo_mensual_area=$consumo_mensual_area+$consumo_mensual_sistema;
      $carga_sistemas_total=0;
      $consumo_diario_sistema=0;
      $consumo_mensual_sistema=0;
    }    
    }
    ?>
    <tbody><td colspan="5" id="campos"><center><b>Resultado</b></center></td></tbody>
    <tr height='30px' style="border-top=2px solid ##6E6E6E;">
            <td colspan="2" rowspan="2" id='gris'><center><b>Total del Area</b></center></td>
            <th id="campos">Consumo Diario</th>
            <th id="campos">Consumo Mensual</th>     
            <th id="campos" colspan="2">Carga Conectada</th>
          </tr>
      <tr height='30px'>
            <td><?php echo $consumo_diario_area+$consumo_diario_iluminacion; ?> KWH/dia</th>
            <td><?php echo $consumo_mensual_area+$consumo_mensual_iluminacion?> KWH/mes</th>     
            <td ><?php echo $carga_area_total+$carga_iluminacion; ?> KW</th>
        </tr>
  </tbody>
</table>
</center>
</div>