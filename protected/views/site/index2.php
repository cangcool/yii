<?php
/* @var $this SiteController */

/*$this->pageTitle=Yii::app()->name;*/
$this->breadcrumbs=array(
	'Overview Point',
);
?>

<h1>Overview Point</h1>


<html>
<table >
	<tr>
		<tr>
			<td width = "20%">Location</td>
			<td width = "10%">:</td>
			<td width = "40%" ></td>
			<td width = "30%" ></td>
		</tr>
		
		<tr>
			<td width = "20%">Information</td>
			<td width = "10%">:</td>
			<td width = "70%" ></td>
		</tr>
		
		<tr>
			<td width = "20%">Recent Quantity (Today)</td>
			<td width = "10%">:</td>
			<td width = "70%" ></td>
		</tr>
		
		<tr>
			<td width = "20%">Recent Rate</td>
			<td width = "10%">:</td>
			<td width = "70%" ></td>
		</tr>
				
		<tr>
			<td width = "20%">Selected Quantity</td>
			<td width = "10%">:</td>
			<td width = "70%" ></td>
		</tr>
		<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'selected-quantity-form',
				'enableAjaxValidation'=>false,
			)); ?>
		<tr>
			<td></td>
			<td>From:</td>
			<td><input type='text' name='fromdate' /><input type='text' name='fromtime' /></td>
		</tr>
		<tr>
			<td></td>
			<td>To:</td>
			<td><input type='text' name='todate' /><input type='text' name='totime' /></td>
		</tr>
		<?php $this->endWidget(); ?>
	</tr>
</table>

<table>
		<tr>
			<td width = "20%" border = "1" >Selected Rate</td>
			<td width = "10%">:</td>
			<td width = "70%" ></td>
		</tr>
	</tr>			
</table>
</html>