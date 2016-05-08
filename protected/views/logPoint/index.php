<?php
/* @var $this LogPointController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Points',
);

$this->menu=array(
	array('label'=>'Create LogPoint', 'url'=>array('create')),
	array('label'=>'Manage LogPoint', 'url'=>array('admin')),
);
?>

<h1>Log Points</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
