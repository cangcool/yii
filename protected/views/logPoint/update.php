<?php
/* @var $this LogPointController */
/* @var $model LogPoint */

$this->breadcrumbs=array(
	'Log Points'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogPoint', 'url'=>array('index')),
	array('label'=>'Create LogPoint', 'url'=>array('create')),
	array('label'=>'View LogPoint', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogPoint', 'url'=>array('admin')),
);
?>

<h1>Update LogPoint <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>