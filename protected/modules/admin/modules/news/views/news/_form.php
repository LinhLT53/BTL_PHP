<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'news-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
         'enableAjaxValidation' => false,
         'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <p class="note">Yêu cầu <span class="required">*</span> bắt buộc.</p>

    <?php //echo $form->errorSummary($model);  ?>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'Loại Tin Tức', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
             <?php echo $form->dropDownList($model, 'id_news_type', $NewData, array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_news_type'); ?>
    </div>
    
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Tiêu Đề', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'title', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'title'); ?>
    </div>
    <br>
   
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Mô Tả Nội Dung ', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textArea($model, 'content', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'content'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Mã người dùng', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_user', array('class' => 'form-control col-md-7 col-xs-12','value'=> Yii::app()->session['id_admin'] ,'readonly' => 'true')); ?>
        </div>
        <?php echo $form->error($model, 'id_user'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'SỐ Lượng Bình Luận', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'quanty_cmt', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'quanty_cmt'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Ảnh Chi Tiết', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model, 'image_description'); ?>
            
        </div>
        <?php echo $form->error($model, 'image_description'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Ảnh Nội Dung', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model, 'image_content'); ?>
            
        </div>
        <?php echo $form->error($model, 'image_content'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'ratting', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'ratting', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'ratting'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Mô tả Chi Tiết', array('class' => '')); ?>
        <?php 
           $this->widget('application.extensions.ckeditor.CKEditor', array('model' => $model,
            'attribute' => 'description',
            'language' => 'vi',
            'theme'=>'default',
            'editorTemplate' => 'full',));?>
       
        <?php echo $form->error($model, 'description'); ?>
    </div>
    <br>
    <div class="row buttons">
        <div class="col-md-6 col-md-offset-3">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->