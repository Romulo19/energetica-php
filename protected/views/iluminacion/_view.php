<?php
/* @var $this IluminacionController */
/* @var $data Iluminacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horas_operacion')); ?>:</b>
	<?php echo CHtml::encode($data->horas_operacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dias_mensual')); ?>:</b>
	<?php echo CHtml::encode($data->dias_mensual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iluminancia_promedio')); ?>:</b>
	<?php echo CHtml::encode($data->iluminancia_promedio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rendimiento_luminico')); ?>:</b>
	<?php echo CHtml::encode($data->rendimiento_luminico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura_de_colocacion')); ?>:</b>
	<?php echo CHtml::encode($data->altura_de_colocacion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_Iluminacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_Iluminacion_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areas_id')); ?>:</b>
	<?php echo CHtml::encode($data->areas_id); ?>
	<br />

	*/ ?>

</div>