<?php
/* @var $this PointController */
/* @var $model Point */

$this->breadcrumbs=array(
	'Points'=>array('index'),
	$model->id_poin=>array('view','id'=>$model->id_poin),
	'Update',
);

$this->menu=array(
	array('label'=>'List Point', 'url'=>array('index')),
	array('label'=>'Create Point', 'url'=>array('create')),
	array('label'=>'View Point', 'url'=>array('view', 'id'=>$model->id_poin)),
	array('label'=>'Manage Point', 'url'=>array('admin')),
);
?>

<h1>Update Point <?php echo $model->id_poin; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>