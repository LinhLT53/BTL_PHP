<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs = array(
    'News' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => 'List News', 'url' => array('index')),
    array('label' => 'Create News', 'url' => array('create')),
    array('label' => 'Update News', 'url' => array('update', 'id' => $model->id_news)),
    array('label' => 'Delete News', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_news), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage News', 'url' => array('admin')),
);
?>

<h1>View News #<?php echo $model->id_news; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array(
            'header' => 'Mã tin tức',
            'name' => 'id_news',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mã tin tức mới',
            'name' => 'id_news_type',
            'type' => 'raw',
        ),
        array(
            'header' => 'Tiêu đề',
            'name' => 'title',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mô tả',
            'name' => 'description',
            'type' => 'raw',
        ),
        array(
            'header' => 'Bình luận',
            'name' => 'content',
            'type' => 'raw',
        ),
        array(
            'header' => 'Thời gian thêm vào',
            'name' => 'date_add',
            'type' => 'raw',
        ),
        array(
            'header' => 'Thời gian cập nhật',
            'name' => 'date_upd',
            'type' => 'raw',
        ),
        array(
            'header' => 'Mã người dùng',
            'name' => 'id_user',
            'type' => 'raw',
        ),
        array(
            'header' => 'quanty_cmt',
            'name' => 'quanty_cmt',
            'type' => 'raw',
        ),
        array(
            'header' => 'Ảnh mô tả',
            'name' => 'image_description',
            'type' => 'raw',
            'value' =>CHtml::image(Yii::app()->baseUrl.'/'.$model->image_description,'alt',array("width"=>"294px" ,"height"=>"359px")),
            ),
        array(
            'header' => 'Ảnh ',
            'name' => 'image_content',
            'type' => 'raw',
            'value' =>CHtml::image(Yii::app()->baseUrl.'/'.$model->image_content,'alt',array("width"=>"294px" ,"height"=>"359px")),
        ),
        array(
            'header' => 'Ratting',
            'name' => 'ratting',
            'type' => 'raw',
        ),
  ),
)); ?>
