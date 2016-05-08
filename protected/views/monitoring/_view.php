<?php
/* @var $this MonitoringController */
/* @var $data Monitoring */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_poin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_poin), array('view', 'id'=>$data->id_poin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pointname')); ?>:</b>
	<?php echo CHtml::encode($data->pointname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('information')); ?>:</b>
	<?php echo CHtml::encode($data->information); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>