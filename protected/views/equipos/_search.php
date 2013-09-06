<?php
/* @var $this EquiposController */
/* @var $model Equipos */
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
		<?php echo $form->label($model,'hora_diarias'); ?>
		<?php echo $form->textField($model,'hora_diarias'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dias_mensual'); ?>
		<?php echo $form->textField($model,'dias_mensual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'potencia'); ?>
		<?php echo $form->textField($model,'potencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eficiencia'); ?>
		<?php echo $form->textField($model,'eficiencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_equipos_id'); ?>
		<?php echo $form->textField($model,'tipo_equipos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'areas_id'); ?>
		<?php echo $form->textField($model,'areas_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->