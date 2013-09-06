<?php
/* @var $this ComponentesController */
/* @var $model Componentes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'componentes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'variable'); ?>
		<?php echo $form->textField($model,'variable',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'variable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_equipos_id'); ?>
		<?php echo $form->textField($model,'tipo_equipos_id'); ?>
		<?php echo $form->error($model,'tipo_equipos_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->