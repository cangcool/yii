<?php
/* @var $this SuperAdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Super Admins',
);

$this->menu=array(
	array('label'=>'Create superAdmin', 'url'=>array('create')),
	array('label'=>'Manage superAdmin', 'url'=>array('admin')),
);
?>

<h1>Super Admins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
