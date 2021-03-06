<?php
/* @var $this AreasController */
/* @var $model Areas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'areas-form',
	'enableAjaxValidation'=>false,
)); ?>
<div id='form2'>
<h1>Area</h1>
<hr>
	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_actividad_id'); ?>
		<?php echo $form->dropDownList($model,'tipo_actividad_id', CHtml::listData(Tipo_actividad::model()->findAll(),'id', 'nombre')); ?>		
		<?php echo $form->error($model,'tipo_actividad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dimensiones'); ?>
		<?php echo $form->textField($model,'dimensiones',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'dimensiones'); ?>
	</div>

	<div class="row" id='idE'>
		<?php echo $form->labelEx($model,'edificaciones_id'); ?>
		<?php echo $form->textField($model,'edificaciones_id', array('value'=>$idE)); ?>
		<?php echo $form->error($model,'edificaciones_id'); ?>
	</div>
	
</div>
	<div class="modal-footer">
		<input class='btn' type="submit" value="Guardar">
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->