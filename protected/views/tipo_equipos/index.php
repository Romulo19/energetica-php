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
  <tbody>
  	<?php 
  foreach ($sistemas as $sistema) {
    if(Equipos::model()->findAllBySql('SELECT * FROM tipo_equipos WHERE sistemas_id ='.$sistema->id)){  
    //echo $sistema->id.' - ';        
          echo '<thead><th colspan="4"><center><b>'.$sistema->nombre.'</b></center></th></thead>';
    ?>
      <tbody>
        <tr>
          <td>Codigo</td>
          <td>Nombre</td>
          <td>Ver</td>
          <td>Editar</td>
        </tr>
      </tbody>
    <?php
    
  	foreach ($tipo_equipos as $tipo_equipo) {
      if ($sistema->id==$tipo_equipo->sistemas->id) {
    		?>
    		<tr>
      		<td><?php echo $tipo_equipo->id; ?></td>      		
      		<td><?php echo $tipo_equipo->nombre; ?></td>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-eye-open"></i>', array('view', 'id'=>$tipo_equipo->id)); ?></td></button>
      		<td><button class='btn'><?php echo CHtml::link('<i class=" icon-pencil"></i>', array('update', 'id'=>$tipo_equipo->id)); ?></td></button>
      	</tr>
      	<?php
        }
      }
  	}
  }
  	?>
    
  </tbody>
</table>
</div>