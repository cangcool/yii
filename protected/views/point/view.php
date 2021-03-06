<?php
/* @var $this PointController */
/* @var $model Point */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->id_poin,
);

$this->menu=array(
	array('label'=>'List Point', 'url'=>array('index')),
	array('label'=>'Create Point', 'url'=>array('create')),
	array('label'=>'Update Point', 'url'=>array('update', 'id'=>$model->id_poin)),
	array('label'=>'Delete Point', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_poin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Point', 'url'=>array('admin')),
);
?>

<h1>View Point #<?php echo $model->id_poin; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_poin',
		'pointname',
		'location',
		'information',
		'status',
	),
)); ?>
