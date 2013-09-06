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
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	foreach ($edificaciones as $edificacion) {
  		?>
  		<tr>
      		<td><?php echo $edificacion->id; ?></td>
      		<td><?php echo $edificacion->nombre; ?></td>
      		<td><?php echo $edificacion->direccion; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$edificacion->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('update', 'id'=>$edificacion->id)); ?></td></button>
      	</tr>
   	<?php
  	}

  	?>
    
  </tbody>
</table>
</div>