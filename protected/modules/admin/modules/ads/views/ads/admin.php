<?php
/* @var $this AdsController */
/* @var $model Ads */

$this->breadcrumbs=array(
	'Ads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ads', 'url'=>array('index')),
	array('label'=>'Create Ads', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ads-grid').yiiGridView('update', {
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
</div>

<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'ads-grid',
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            
            array(
                'header' => 'Tiêu đề',
                'name' => 'meta_title',
                'type' => 'raw',
            ),
            array(
                'header' => 'Đường dẫn',
                'type' => 'raw',
                'name' => 'fake_link',
            ),
            array(
                'header' => 'Từ Khóa',
                'type' => 'raw',
                'name' => 'meta_keyword',
            ),
            array(
                'header' => 'Mã Người Dùng',
                'type' => 'raw',
                'name' => 'id_user',
            ),
            array(
                'header' => 'Mô Tả',
                'type' => 'raw',
                'name' => 'meta_description',
            ),
           
            array(
                'header' => 'Ảnh ',
                'type' => 'image',
                'name' => 'image',
                'value' => '(Yii::app()->baseUrl."/".$data->image)',
                'htmlOptions' => array('class' => 'image view view-first')
            ),
            array(
                'class' => 'CButtonColumn',
                'template' => '{view}{update}{delete}',
                'htmlOptions' => array('style' => 'width:20px'),
                'afterDelete' => 'function(link,success,data){
                                   window.location.reload();
                            }',
            ),
        ),
    ));
    ?>
