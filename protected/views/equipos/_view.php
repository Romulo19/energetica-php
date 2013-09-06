<?php
/* @var $this EquiposController */
/* @var $data Equipos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_diarias')); ?>:</b>
	<?php echo CHtml::encode($data->hora_diarias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_mensual')); ?>:</b>
	<?php echo CHtml::encode($data->dias_mensual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('potencia')); ?>:</b>
	<?php echo CHtml::encode($data->potencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eficiencia')); ?>:</b>
	<?php echo CHtml::encode($data->eficiencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_equipos_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_equipos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areas_id')); ?>:</b>
	<?php echo CHtml::encode($data->areas_id); ?>
	<br />


</div>