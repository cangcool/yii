
<?php
/* @var $this PointController */
/* @var $model Point */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Point', 'url'=>array('index')),
	array('label'=>'Create Point', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#point-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php /* echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
<!--</div> <!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'point-grid',
	'dataProvider'=>$model->search(),
	
		'columns'=>array(
		
		'pointname',
		'location',
		'information',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
