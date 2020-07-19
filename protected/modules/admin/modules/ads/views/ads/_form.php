<?php

?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'ads-form',
        
         'enableAjaxValidation' => false,
         'htmlOptions' => array(
            'enctype' => 'multipart/form-data')
    ));
    ?>

    <

    <?php   ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'Nguoi dung', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required"></span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_user', array('class' => 'form-control col-md-7 col-xs-12')) ?>
        </div>
        <?php echo $form->error($model, 'id_user'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Tieu de', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'meta_title', array('class' => 'form-control col-md-7 col-xs-12')) ?>
        </div>
        <?php echo $form->error($model, 'meta_title'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Duong dan', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'fake_link', array('class' => 'form-control col-md-7 col-xs-12')) ?>
        </div>
        <?php echo $form->error($model, 'fake_link'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Tu Khoa', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'meta_keyword', array('class' => 'form-control col-md-7 col-xs-12')) ?>
        </div>
        <?php echo $form->error($model, 'meta_keyword'); ?>
    </div>
   
    <br>
  
    <div class="row">
        <?php echo $form->labelEx($model, 'Anh', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model, 'image'); ?>
            
            <br>
            
             <div class="row">
           
            
        </div>
        </div>
        
        <?php echo $form->error($model, 'image'); ?>
       
    </div>
    <br>
     <div class="row">
        <?php echo $form->labelEx($model, 'Mo ta', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <?php 
           $this->widget('application.extensions.ckeditor.CKEditor', array('model' => $model,
            'attribute' => 'meta_description',
            'language' => 'vi',
            'theme'=>'default',
            'editorTemplate' => 'full',));?>
       
        <?php echo $form->error($model, 'meta_description'); ?>
    </div>
    <br>
    <div class="row buttons">
        <div class="col-md-6 col-md-offset-3">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
