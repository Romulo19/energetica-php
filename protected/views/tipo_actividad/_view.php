<?php
/* @var $this Tipo_actividadController */
/* @var $data Tipo_actividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iluminancia_a')); ?>:</b>
	<?php echo CHtml::encode($data->iluminancia_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iluminancia_c')); ?>:</b>
	<?php echo CHtml::encode($data->iluminancia_c); ?>
	<br />


</div>