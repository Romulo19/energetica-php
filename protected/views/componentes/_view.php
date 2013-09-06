<?php
/* @var $this ComponentesController */
/* @var $data Componentes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('variable')); ?>:</b>
	<?php echo CHtml::encode($data->variable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_equipos_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_equipos_id); ?>
	<br />


</div>