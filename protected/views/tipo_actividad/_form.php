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
<div id='form2'>
<h1>Tipo de Actividad</h1>
<hr>
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iluminancia_promedio'); ?>
		<?php echo $form->textField($model,'iluminancia_promedio'); ?>
		<?php echo $form->error($model,'iluminancia_promedio'); ?>
	</div>
</div>
	<div class="modal-footer">
		<input class='btn' type="submit" value="Guardar">
	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->