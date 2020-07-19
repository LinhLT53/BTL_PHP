<?php
/* @var $this NewsTypeController */
/* @var $model NewsType */

$this->breadcrumbs=array(
	'News Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List NewsType', 'url'=>array('index')),
	array('label'=>'Create NewsType', 'url'=>array('create')),
	array('label'=>'Update NewsType', 'url'=>array('update', 'id'=>$model->id_news_type)),
	array('label'=>'Delete NewsType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_news_type),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NewsType', 'url'=>array('admin')),
);
?>

<h1>View NewsType #<?php echo $model->id_news_type; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_news_type',
		'name',
	),
)); ?>
