<?php
/* @var $this LogPointController */
/* @var $model LogPoint */

$this->breadcrumbs=array(
	'Log Points'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LogPoint', 'url'=>array('index')),
	array('label'=>'Create LogPoint', 'url'=>array('create')),
);/*
$this->menu=array(
if (!empty($allpoint)){
	foreach ($allpoint as $point){
		array('label'=>$point->pointname, 'url'=>array('admin/'.$point->id_poin));
	}
}
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#log-point-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Log Points</h1>

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
	'id'=>'log-point-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_poin',
		'time',
		'quantity',
		'rate',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
