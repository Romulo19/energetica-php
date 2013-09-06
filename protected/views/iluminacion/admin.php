<?php
/* @var $this IluminacionController */
/* @var $model Iluminacion */

$this->breadcrumbs=array(
	'Iluminacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Iluminacion', 'url'=>array('index')),
	array('label'=>'Create Iluminacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#iluminacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Iluminacions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'iluminacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cantidad',
		'horas_operacion',
		'dias_mensual',
		'iluminancia_pro',
		'rendimien_lu',
		/*
		'altura_colo',
		'tipo_Iluminacion_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
