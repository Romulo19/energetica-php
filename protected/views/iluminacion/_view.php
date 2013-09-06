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

	<b><?php echo CHtml::encode($data->getAttributeLabel('iluminancia_pro')); ?>:</b>
	<?php echo CHtml::encode($data->iluminancia_pro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rendimien_lu')); ?>:</b>
	<?php echo CHtml::encode($data->rendimien_lu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('altura_colo')); ?>:</b>
	<?php echo CHtml::encode($data->altura_colo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_Iluminacion_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_Iluminacion_id); ?>
	<br />

	*/ ?>

</div>