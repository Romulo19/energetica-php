<?php
/* @var $this Tipo_iluminacionController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Nuevo Tipo Iluminacion', 'url'=>array('create')),
);
?>


<div class='contenedor'>
<h1>Tipo de Iluminaciones</h1>
<hr>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Potencia Luminica</th>
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	foreach ($tIluminaciones as $tIluminacion) {
  		?>
  		<tr>
      		<td><?php echo $tIluminacion->id; ?></td>      		
      		<td><?php echo $tIluminacion->nombre; ?></td>
      		<td><?php echo $tIluminacion->potencia; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$tIluminacion->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('update', 'id'=>$tIluminacion->id)); ?></td></button>
      	</tr>
   	<?php
  	}

  	?>
    
  </tbody>
</table>
</div>