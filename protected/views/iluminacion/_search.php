<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */
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
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horas_operacion'); ?>
		<?php echo $form->textField($model,'horas_operacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_mensual'); ?>
		<?php echo $form->textField($model,'dias_mensual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iluminancia_pro'); ?>
		<?php echo $form->textField($model,'iluminancia_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rendimien_lu'); ?>
		<?php echo $form->textField($model,'rendimien_lu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altura_colo'); ?>
		<?php echo $form->textField($model,'altura_colo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_Iluminacion_id'); ?>
		<?php echo $form->textField($model,'tipo_Iluminacion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->