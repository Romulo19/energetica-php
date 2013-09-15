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

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'tipo_Iluminacion_id'); ?>
		<?php echo $form->dropDownList($model,'tipo_Iluminacion_id', CHtml::listData(Tipo_iluminacion::model()->findAll(),'id', 'nombre')); ?>		
		<?php echo $form->error($model,'tipo_Iluminacion_id'); ?>
	</div>


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
		<?php echo $form->labelEx($model,'iluminancia_promedio'); ?>
		<?php echo $form->textField($model,'iluminancia_promedio'); ?>
		<?php echo $form->error($model,'iluminancia_promedio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rendimiento_luminico'); ?>
		<?php echo $form->textField($model,'rendimiento_luminico'); ?>
		<?php echo $form->error($model,'rendimiento_luminico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altura_de_colocacion'); ?>
		<?php echo $form->textField($model,'altura_de_colocacion'); ?>
		<?php echo $form->error($model,'altura_de_colocacion'); ?>
	</div>
	
	<div class="row" id='idE'>
		<?php echo $form->labelEx($model,'areas_id'); ?>
		<?php echo $form->textField($model,'areas_id', array('value'=>$idA)); ?>
		<?php echo $form->error($model,'areas_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->