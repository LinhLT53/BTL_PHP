<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs = array(
    'Order Details' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List OrderDetail', 'url' => array('index')),
    array('label' => 'Create OrderDetail', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#order-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Danh sách Đơn hàng chi tiết</h1>



<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'order-detail-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'header' => 'Mã chi tiết',
            'name' => 'id_detail',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mã đơn hàng',
            'name' => 'id_order',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mã sản phẩm',
            'name' => 'id_product',
            'type' => 'raw',
        ),
        array(
            'header' => 'Giá',
            'name' => 'price',
            'type' => 'raw',
        ),
        array(
            'header' => 'Số lượng',
            'name' => 'quanty',
            'type' => 'raw',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
