<?php
/* @var $this SuperAdminController */
/* @var $model superAdmin */

$this->breadcrumbs=array(
	'Super Admins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List superAdmin', 'url'=>array('index')),
	array('label'=>'Create superAdmin', 'url'=>array('create')),
	array('label'=>'Update superAdmin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete superAdmin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage superAdmin', 'url'=>array('admin')),
);
?>

<h1>View superAdmin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'level',
	),
)); ?>
