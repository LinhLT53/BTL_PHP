<?php
/* @var $this ShopConfigController */
/* @var $model ShopConfig */

$this->breadcrumbs=array(
	'Shop Configs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ShopConfig', 'url'=>array('index')),
	array('label'=>'Create ShopConfig', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#shop-config-grid').yiiGridView('update', {
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
	'id'=>'shop-config-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_shop',
		'address',
		'telephone',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
