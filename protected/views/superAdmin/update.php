<?php
/* @var $this SuperAdminController */
/* @var $model superAdmin */

$this->breadcrumbs=array(
	'Super Admins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List superAdmin', 'url'=>array('index')),
	array('label'=>'Create superAdmin', 'url'=>array('create')),
	array('label'=>'View superAdmin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage superAdmin', 'url'=>array('admin')),
);
?>

<h1>Update superAdmin <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>