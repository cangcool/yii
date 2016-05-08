<?php
/* @var $this LogPointController */
/* @var $model LogPoint */

$this->breadcrumbs=array(
	'Log Points'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogPoint', 'url'=>array('index')),
	array('label'=>'Create LogPoint', 'url'=>array('create')),
	array('label'=>'Update LogPoint', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LogPoint', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LogPoint', 'url'=>array('admin')),
);
?>

<h1>View LogPoint #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_poin',
		'time',
		'quantity',
		'rate',
	),
)); ?>
