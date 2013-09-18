<?php
/* @var $this Tipo_iluminacionController */
/* @var $model Tipo_iluminacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-iluminacion-form',
	'enableAjaxValidation'=>false,
)); ?>
<div id='form2'>
<h1>Tipo de Iluminacion</h1>
<hr>
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'potencia'); ?>
		<?php echo $form->textField($model,'potencia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'potencia'); ?>
	</div>
</div>
	<div class="modal-footer">
		<input class='btn' type="submit" value="Guardar">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->