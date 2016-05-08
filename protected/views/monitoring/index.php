<script type="text/javascript">
    window.onload = setupRefresh;

    function setupRefresh() {
      setTimeout("refreshPage();", 10000); // milliseconds
    }
    function refreshPage() {
       window.location = location.href;
    }
 </script> 
 <script>
 setTimeout(function(){window.location="<URL>";},50*60*1000);
 </script>
 <?php 
 $self=$this->redirect(Yii::app()->request->urlReferrer);
 header("Refresh: 1800; URL=http://localhost/yii-polri4/monitoring/index");
 //header("Refresh: 1800; URL=", $self);
 ?>
<!--<body onload="refreshPage()">-->

<?php
/* @var $this MonitoringController */

$this->breadcrumbs=array(
	'Monitoring',
);


//$baseUrl = Yii::app()->baseUrl; 
//$cs = Yii::app()->getClientScript();
//$cs->registerCssFile($baseUrl.'/css/monitoring.css');

?>

<?php
Yii::app()->clientScript->registerCoreScript('jquery');
?>
 
<script language ="javascript" type="text/javascript">
update();

function update(vartext)
{
	
	//$("#updating1").append("<?php	echo "-";?>");
	//$("#updating2").append("<?php	echo "-";?>");
	//$("#updating3").append("<?php	echo "-";?>");
	//$("#updating4").append("<?php	echo "-";?>");
	setTimeout('update()',1000);
}
</script>



<div align="center" align="center" style="text-align:center" >
<table width="100%" align="centre"> 
	<tr>
	<td width="33%"></td>
	<td width="33%"></td>
	<td width="33%"></td>
	</tr>
	<?php
	if(!empty($allmonitor)){
		$i=1;
		$j=0;		
		$totalmonitor=count($allmonitor);
			//echo $totalmonitor;
		$intvalue=floor($totalmonitor/3);
			//echo $intvalue;		
		$returnvalue=$totalmonitor%3;
			//echo $returnvalue;
	$j=0;
	$i=0;
	$k=0;
	
	foreach($allmonitor as $point)
	{
	
	//$log=$point->lastlog;
	
	//$log=LogPoint::model()->find('id_poin=? order by id desc', array($point->id_poin));
	//foreach ($log as $l)
			//echo $l->quantity;
		//if (!empty($log))
			//echo $log->quantity;
		//else
			//echo "-";
	
	//echo $log->quantity;
	if ($intvalue<>0){
	
	if ($point->id_poin<=($intvalue*3)){
	switch($j){
		case 0:
		//echo "case 0";
	?>	
		<tr>
		<td>
			<table style="border:2px solid black">
			<tr><td bgcolor="#265893" ><font size=4 color="white"><p align="center" valign="center"><?php echo $point->pointname; ?></font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Quantity :'?></td></tr>
			<tr><td><p align="center"><font size=24 color="#264c78">
			<?php
			$log=$point->lastlog;
			if (!empty($log)) echo $log->quantity;
			else echo "-";
			$db=$log->quantity;
			?>		
			
			
			</font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Rate (per hour) :'?></td></tr>
			<tr><td><h3><p align="center"><font size=24 color="#efb436">
			<?php 
			$log=$point->lastlog;
			if (!empty($log))	echo $log->rate;
			else echo "-";	
			?>
			</font></p></h3></td></tr>
			</table>
		</td>
	<?php
		$j=$j+1; 		
		break;
		case 1:	
		//echo "case 1";		
	?>		
		<td>
			<table style="border:2px solid black">
			<tr><td bgcolor="#265893" ><font size=4 color="white"><p align="center" valign="center"><?php echo $point->pointname; ?></font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Quantity :'?></td></tr>
			<tr><td><p align="center"><font size=24 color="#264c78">
			<?php
			$log=$point->lastlog;
			if (!empty($log)) echo $log->quantity;
			else echo "-";
			?>
			<!--<div id='updating1'></div>;-->
			
			</font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Rate (per hour) :'?></td></tr>
			<tr><td><h3><p align="center"><font size=24 color="#efb436">
			<?php 
			$log=$point->lastlog;
			if (!empty($log))	echo $log->rate;
			else echo "-";	
			?>
			</font></p></h3></td></tr>
			</table>
		</td>
	<?php
		$j=$j+1; 
		break;
		case 2:	
		//echo "case 2";
	?>	
		<td>
			<table style="border:2px solid black">
			<tr><td bgcolor="#265893" ><font size=4 color="white"><p align="center" valign="center"><?php echo $point->pointname; ?></font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Quantity :'?></td></tr>
			<tr><td><p align="center"><font size=24 color="#264c78">
			<?php
			$log=$point->lastlog;
			if (!empty($log)) echo $log->quantity;
			else echo "-";
			?>
			<!--<div id='updating1'></div>;-->
			
			</font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Rate (per hour) :'?></td></tr>
			<tr><td><h3><p align="center"><font size=24 color="#efb436">
			<?php 
			$log=$point->lastlog;
			if (!empty($log))	echo $log->rate;
			else echo "-";	
			?>
			</font></p></h3></td></tr>
			</table>
		</td>
	</tr>	
	<?php
		$j=0;		
		break;
		}		
	}	
	
	}// end if intvalue<>0
	
	//Process other the return rectangle
	if ($returnvalue<>0)
	{
	?>
	
	<?php
		if ($point->id_poin>($intvalue*3))
		{
		if ($k==0){?> <tr> <?php } ?>
		
		<td>
			<table style="border:2px solid black">
			<tr><td bgcolor="#265893" ><font size=4 color="white"><p align="center" valign="center"><?php echo $point->pointname; ?></font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Quantity :'?></td></tr>
			<tr><td><p align="center"><font size=24 color="#264c78">
			<?php
			$log=$point->lastlog;
			if (!empty($log)) echo $log->quantity;
			else echo "-";
			?>
			<!--<div id='updating1'></div>;-->
			
			</font></p></td></tr>
			<tr><td bgcolor="#F8F8F8"><?php echo 'Rate (per hour) :'?></td></tr>
			<tr><td><h3><p align="center"><font size=24 color="#efb436">
			<?php 
			$log=$point->lastlog;
			if (!empty($log))	echo $log->rate;
			else echo "-";	
			?>
			</font></p></h3></td></tr>
			</table>
		</td>		
		<?php
		$k=$k+1;		
		}
	}	
	} //end foreach	
	
	?>
	</tr>
		
</table>

</div>



<?php
}
?>

