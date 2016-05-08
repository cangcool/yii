<?php
/* @var $this PointController */
/* @var $model Point */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'point-form',
	'enableAjaxValidation'=>false,
)); ?>


	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pointname'); ?>
		<?php echo $form->textField($model,'pointname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'pointname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'information'); ?>
		<?php echo $form->textField($model,'information',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'information'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropdownList($model,'status', array(""=>'Pilih Satu', 0=>"Deactive", 1=>"Active"), array('selected'=>''));
		//echo $form->dropdownList($model,'status', CHtml::listData(Point::model()->findAll(), 'status', 'status'), array('selected'=>'Choose One')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->