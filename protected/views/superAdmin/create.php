<?php
/* @var $this SuperAdminController */
/* @var $model superAdmin */

$this->breadcrumbs=array(
	'Super Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List superAdmin', 'url'=>array('index')),
	array('label'=>'Manage superAdmin', 'url'=>array('admin')),
);
?>

<h1>Create superAdmin</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>