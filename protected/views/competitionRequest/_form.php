<?php
/* @var $this CompetitionRequestController */
/* @var $model CompetitionRequest */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'competition-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->hiddenField($model,'competition_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($model,'group_id'); ?>
                <?php 
                    echo CHtml::dropDownList('group_id', $model, 
                              $model->getAllGroupName(),
                              array(0 => ''));
                ?>
            <?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chip'); ?>
		<?php echo $form->textField($model,'chip',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'chip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dyusch'); ?>
		<?php echo $form->textField($model,'dyusch',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'dyusch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sity'); ?>
		<?php echo $form->textField($model,'sity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coutry'); ?>
		<?php echo $form->textField($model,'coutry',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'coutry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'team'); ?>
		<?php echo $form->textField($model,'team',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'team'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coach'); ?>
		<?php echo $form->textField($model,'coach',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'coach'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fst'); ?>
		<?php echo $form->textField($model,'fst',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'participation_data'); ?>
		<?php echo $form->textField($model,'participation_data',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'participation_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->