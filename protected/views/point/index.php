<?php
/* @var $this PointController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Points',
);

/*$this->menu=array(
	array('label'=>'Create Point', 'url'=>array('create')),
	array('label'=>'Manage Point', 'url'=>array('admin')),
);*/
?>

<h1>Overview Point</h1>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */?>

<?php
if (!empty($allpoint)){
foreach ($allpoint as $point){
?>
<table>
	<tr>
		<td colspan=4><h3><?php echo $point->pointname;?></h3></td>
	</tr>
	<tr>
		<td width = "20%">Location</td>
		<td width = "10%">:</td>
		<td width = "40%" ><?php echo $point->location;?></td>
		<td width = "30%" ></td>
	</tr>
	
	<tr>
		<td>Information</td>
		<td>:</td>
		<td><?php echo $point->information;?></td>
		<td></td>
	</tr>
	
	<tr>
		<td>Recent Quantity (Today)</td>
		<td>:</td>
		<td><?php 	
		//$log=LogPoint::model()->find('id_poin=? order by id desc', array($point->id_poin));
		//$log=$point->with('log')->findAll();	
		//foreach ($log as $l)
			//echo $l->quantity;
		$log=$point->lastlog;
		if (!empty($log))
			echo $log->quantity;
		else
			echo "-";
		?></td>
		<td></td>
	</tr>
	
	<tr>
		<td>Recent Rate</td>
		<td>:</td>		
		<td>
		<?php 	
		$log=$point->lastlog;
		if (!empty($log))
			echo $log->rate;
		else
			echo "-";
		?>
		</td>
		<td></td>
	</tr>
	<!--		
	<tr>
		<td>Selected Quantity</td>
		<td>:</td>
		<td></td>
		<td></td>
	</tr>
	<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'selected-quantity-form',
			'enableAjaxValidation'=>false,
		)); ?>
	<tr>
		<td></td>
		<td>From:</td>
		<td><input type='text' name='fromdate' /><input type='text' name='fromtime' /></td>
		<td><input type='text' name='output' disabled='true'/></td>
	</tr>
	<tr>
		<td></td>
		<td>To:</td>
		<td><input type='text' name='todate' /><input type='text' name='totime' /></td>
		<td></td>
	</tr>
	<?php $this->endWidget(); ?>
	<tr>	
		<td>Selected Rate</td>
		<td>:</td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>At:</td>
		<td><input type='text' name='fromdate' /><input type='text' name='fromtime' /></td>
		<td><input type='text' name='output' disabled='true'/></td>
	</tr>	
	-->	
</table>
<?php }
}else echo "<h2>Tidak Ada Point yang Aktif</h2>";
?>
