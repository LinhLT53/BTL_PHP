<?php
/* @var $this NewsTypeController */
/* @var $model NewsType */

$this->breadcrumbs=array(
	'News Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id_news_type),
	'Update',
);

$this->menu=array(
	array('label'=>'List NewsType', 'url'=>array('index')),
	array('label'=>'Create NewsType', 'url'=>array('create')),
	array('label'=>'View NewsType', 'url'=>array('view', 'id'=>$model->id_news_type)),
	array('label'=>'Manage NewsType', 'url'=>array('admin')),
);
?>

<h1>Cập nhật loại tin tức <?php echo $model->id_news_type; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>