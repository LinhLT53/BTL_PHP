<?php

?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'category-form',
        
        'enableAjaxValidation' => false,
         'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    <p class="note">Yêu cầu <span class="required">*</span> bắt buộc.</p>


    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Nhom danh muc', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->dropDownList($model, 'id_category', $pa, array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>    
        <?php echo $form->error($model, 'id_category'); ?>
    </div>
    <br>
     <div class="item form-group">
        <?php echo $form->labelEx($model, 'id danh muc', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_parents', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_parents', array('class' => 'required')); ?>
    </div>
    <br>
    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Ten danh muc', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'name', array('class' => 'required')); ?>
    </div>

    

    

 


    <div class="item form-group">
        <?php echo $form->labelEx($model, 'anh danh muc', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model,'image_icon', array('class' => 'dropzone','style'=>'border: 1px solid #e5e5e5; height: 100px;')); ?> 
        </div>
        <?php echo $form->error($model, 'image_icon'); ?>
    </div>
    
    
  
    

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button id="create-user" class="btn btn-primary">Thêm Thuộc Tính</button>
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
