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
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Dimensiones</th>
      <th>Ver</th>
      <th>Editar</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		foreach ($model->areases as $area) {
  		?>
  		<tr>
      		<td><?php echo 'Area #'.$area->id; ?></td>
      		<td><?php echo $area->nombre; ?></td>
      		<td><?php echo $area->dimensiones; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('/areas/view', 'id'=>$area->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('/areas/update', 'id'=>$area->id, 'idE'=>$model->id)); ?></td></button>
      	
      	</tr>
   	<?php
   	}  	

  	?>
    
  </tbody>
</table>
</div>