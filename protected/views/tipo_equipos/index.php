<?php
/* @var $this Tipo_equiposController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Nuevo Tipo de Equipo', 'url'=>array('create')),
  array('label'=>'Nuevo Sistema de Equipo', 'url'=>array('sistemas/create')),
);
?>


<div class='contenedor'>
<h1>Tipo de Equipos</h1>
<hr>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Sistemas</th>
      <th>Nombre</th>
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	foreach ($tipo_equipos as $tipo_equipo) {
  		?>
  		<tr>
      		<td><?php echo $tipo_equipo->id; ?></td>      		
      		<td><?php echo $tipo_equipo->sistemas->nombre; ?></td>
      		<td><?php echo $tipo_equipo->nombre; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$tipo_equipo->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('update', 'id'=>$tipo_equipo->id)); ?></td></button>
      	</tr>
   	<?php
  	}

  	?>
    
  </tbody>
</table>
</div>