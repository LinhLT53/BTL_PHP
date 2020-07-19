<?php
/* @var $this RattingController */
/* @var $model Ratting */

$this->breadcrumbs=array(
	'Rattings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ratting', 'url'=>array('index')),
	array('label'=>'Create Ratting', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ratting-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ratting-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ratting',
		'id_product',
		'ratting',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
