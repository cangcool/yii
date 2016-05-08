<?php
/* @var $this LogPointController */
/* @var $model LogPoint */

$this->breadcrumbs=array(
	'Log Points'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogPoint', 'url'=>array('index')),
	array('label'=>'Manage LogPoint', 'url'=>array('admin')),
);
?>

<h1>Create LogPoint</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>