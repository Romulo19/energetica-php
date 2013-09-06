<?php
/* @var $this AreasController */
/* @var $model Areas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dimensiones'); ?>
		<?php echo $form->textField($model,'dimensiones',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carga_termica'); ?>
		<?php echo $form->textField($model,'carga_termica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'co2'); ?>
		<?php echo $form->textField($model,'co2',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iluminancia_promedio'); ?>
		<?php echo $form->textField($model,'iluminancia_promedio',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edificaciones_id'); ?>
		<?php echo $form->textField($model,'edificaciones_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_actividad_id'); ?>
		<?php echo $form->textField($model,'tipo_actividad_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->