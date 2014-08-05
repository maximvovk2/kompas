<?php
/* @var $this CommentsController */
/* @var $model Comments */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Delete Comments', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comments', 'url'=>array('admin')),
);
?>

<h1>View Comments #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'events_id',
		'competition_id',
		'user_id',
		'create_date',
		'title',
		'text',
	),
)); ?>
