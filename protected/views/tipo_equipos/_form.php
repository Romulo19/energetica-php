<?php
/* @var $this Tipo_equiposController */
/* @var $model Tipo_equipos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-equipos-form',
	'enableAjaxValidation'=>false,
)); ?>
<div id = 'form2'>
	<h1>Tipo de Equipo</h1>
	<hr>
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemas_id'); ?>
		<?php echo $form->dropDownList($model,'sistemas_id', CHtml::listData(Sistemas::model()->findAll(),'id', 'nombre')); ?>
		<?php echo $form->error($model,'sistemas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
</div>
	<div class="modal-footer">
		<input class='btn' type="submit" value="Guardar">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->