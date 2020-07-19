<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
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
	'id'=>'product-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
            array(
               'header'=>'Mã Danh Mục',
               'name'=>'id_category',
               'type'=>'raw',
               'value'=> 'Category::model()->FindByPk($data->id_category)->name',
            ),
             array(
               'header'=>'Mã Màu',
               'name'=>'id_color',
               'type'=>'raw',
            ),
	    array(
               'header'=>'Tên Sản Phẩm',
               'name'=>'name',
               'type'=>'raw',
            ),
             array(
               'header'=>'Ảnh sản phẩm',
               'name'=>'image',
               'type'=>'raw',
               'value' => function($data){
                 

                  return  CHtml::image(Yii::app()->baseUrl . "/" . $data->image,"product alt",["width"=>"200","height"=>"200"]);
               },
               'htmlOptions' => array('class' => 'image view view-first','style'=>'width:100px')
            ),
	     array(
               'header'=>'Giá Cũ',
               'name'=>'price_old',
               'type'=>'raw',
            ),	
		
		
		
			array(
                        'class'=>'CButtonColumn',
                        'template'=>'{view}{update}{delete}',
                        'htmlOptions' => array('style'=>'width:20px'),
                        'afterDelete'=>'function(link,success,data){
                               window.location.reload();
                        }',
                ),
         ),
)); ?>
