<?php
/* @var $this Tipo_actividadController */
/* @var $model Tipo_actividad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-actividad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iluminancia_a'); ?>
		<?php echo $form->textField($model,'iluminancia_a'); ?>
		<?php echo $form->error($model,'iluminancia_a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iluminancia_c'); ?>
		<?php echo $form->textField($model,'iluminancia_c'); ?>
		<?php echo $form->error($model,'iluminancia_c'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->