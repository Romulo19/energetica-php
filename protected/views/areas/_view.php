<?php
/* @var $this AreasController */
/* @var $data Areas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dimensiones')); ?>:</b>
	<?php echo CHtml::encode($data->dimensiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carga_termica')); ?>:</b>
	<?php echo CHtml::encode($data->carga_termica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('co2')); ?>:</b>
	<?php echo CHtml::encode($data->co2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iluminancia_promedio')); ?>:</b>
	<?php echo CHtml::encode($data->iluminancia_promedio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edificaciones_id')); ?>:</b>
	<?php echo CHtml::encode($data->edificaciones_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_actividad_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_actividad_id); ?>
	<br />

	*/ ?>

</div>