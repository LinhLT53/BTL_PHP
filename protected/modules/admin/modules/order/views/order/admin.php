<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs = array(
    'Orders' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Order', 'url' => array('index')),
    array('label' => 'Create Order', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#order-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Danh sách Orders</h1>


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
    'id' => 'order-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'header' => 'Mã đơn hàng',
            'name' => 'id_order',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mã người dùng',
            'name' => 'id_user',
            'type' => 'raw',
        ),
        array(
            'header' => 'Tổng số',
            'name' => 'total',
            'type' => 'raw',
        ),
        array(
            'header' => 'Trạng thái',
            'name' => 'status',
            'type' => 'raw',
        ),
        array(
            'header' => 'Ngày',
            'name' => 'date',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipFirstName',
            'name' => 'orderShipFirstName',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipLastName',
            'name' => 'orderShipLastName',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipAddress',
            'name' => 'orderShipAddress',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipAddress2',
            'name' => 'orderShipAddress2',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipProvincial',
            'name' => 'orderShipProvincial',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipPhone',
            'name' => 'orderShipPhone',
            'type' => 'raw',
        ),
        array(
            'header' => 'orderShipEmail',
            'name' => 'orderShipEmail',
            'type' => 'raw',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
