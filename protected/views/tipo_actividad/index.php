<?php
/* @var $this Tipo_actividadController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Nuevo Tipo de Actividad', 'url'=>array('create')),
);
?>


<div class='contenedor'>
<h1>Tipo de Actividades</h1>
<hr>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Iluminancia A</th>
      <th>Iluminancia C</th>
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	foreach ($tipo_actividades as $tipo_act) {
  		?>
  		<tr>
      		<td><?php echo $tipo_act->id; ?></td>
      		<td><?php echo $tipo_act->nombre; ?></td>
      		<td><?php echo $tipo_act->iluminancia_a; ?></td>
      		<td><?php echo $tipo_act->iluminancia_c; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$tipo_act->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('update', 'id'=>$tipo_act->id)); ?></td></button>
      	</tr>
   	<?php
  	}

  	?>
    
  </tbody>
</table>
</div>