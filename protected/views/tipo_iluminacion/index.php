<?php
/* @var $this Tipo_iluminacionController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Nuevo Tipo Iluminacion', 'url'=>array('create')),
);
?>

<h1>Tipo Iluminacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


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
  	foreach ($tipo_equipos as $tipo_equipo) {
  		?>
  		<tr>
      		<td><?php echo $tipo_equipo->id; ?></td>      		
      		<td><?php echo $tipo_equipo->sistemas_id; ?></td>
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