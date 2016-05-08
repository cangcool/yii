<?php
/* @var $this MonitoringController */
/* @var $model Monitoring */

$this->breadcrumbs=array(
	'Monitorings'=>array('index'),
	$model->id_poin,
);

$this->menu=array(
	array('label'=>'List Monitoring', 'url'=>array('index')),
	array('label'=>'Create Monitoring', 'url'=>array('create')),
	array('label'=>'Update Monitoring', 'url'=>array('update', 'id'=>$model->id_poin)),
	array('label'=>'Delete Monitoring', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_poin),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Monitoring', 'url'=>array('admin')),
);
?>

<h1>View Monitoring #<?php echo $model->id_poin; ?></h1>

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
