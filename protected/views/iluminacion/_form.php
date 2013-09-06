<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'iluminacion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horas_operacion'); ?>
		<?php echo $form->textField($model,'horas_operacion'); ?>
		<?php echo $form->error($model,'horas_operacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_mensual'); ?>
		<?php echo $form->textField($model,'dias_mensual'); ?>
		<?php echo $form->error($model,'dias_mensual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iluminancia_pro'); ?>
		<?php echo $form->textField($model,'iluminancia_pro'); ?>
		<?php echo $form->error($model,'iluminancia_pro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rendimien_lu'); ?>
		<?php echo $form->textField($model,'rendimien_lu'); ?>
		<?php echo $form->error($model,'rendimien_lu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altura_colo'); ?>
		<?php echo $form->textField($model,'altura_colo'); ?>
		<?php echo $form->error($model,'altura_colo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_Iluminacion_id'); ?>
		<?php echo $form->textField($model,'tipo_Iluminacion_id'); ?>
		<?php echo $form->error($model,'tipo_Iluminacion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->