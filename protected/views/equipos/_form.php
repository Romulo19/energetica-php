<?php
/* @var $this EquiposController */
/* @var $model Equipos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sistemas_id'); ?>
		<?php echo $form->dropDownList($model,'sistemas_id', CHtml::listData(Sistemas::model()->findAll(),'id', 'nombre'),
			array(
				'empty'=>'-- Seleccione un sistema --',
				'ajax'=>array(
					'type'=>'POST',
					'url'=>CController::createUrl('equipos/tipo'),
					'update'=>'#'.CHtml::activeId($model,'tipo_equipos_id'),
				),
			)
		); ?>		
		<?php echo $form->error($model,'sistemas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_equipos_id'); ?>
		<?php echo $form->dropDownList($model,'tipo_equipos_id', array(), array('empty' => '-- Seleccione un tipo --' )); ?>		
		<?php echo $form->error($model,'tipo_equipos_id'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'hora_diarias'); ?>
		<?php echo $form->textField($model,'hora_diarias'); ?>
		<?php echo $form->error($model,'hora_diarias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dias_mensual'); ?>
		<?php echo $form->textField($model,'dias_mensual'); ?>
		<?php echo $form->error($model,'dias_mensual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'potencia (Kw)'); ?> 
		<?php echo $form->textField($model,'potencia'); ?>
		<?php echo $form->error($model,'potencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eficiencia'); ?>
		<?php echo $form->textField($model,'eficiencia'); ?>
		<?php echo $form->error($model,'eficiencia'); ?>
	</div>

	<div class="row" id="idE">
		<?php echo $form->labelEx($model,'areas_id'); ?>
		<?php echo $form->textField($model,'areas_id', array('value'=>$idA)); ?>
		<?php echo $form->error($model,'areas_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->