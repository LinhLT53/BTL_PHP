<?php

?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'product-form',
   
        'enableAjaxValidation' => false,
         'htmlOptions' => array(
            'enctype' => 'multipart/form-data'
        )
    ));
    ?>

    


    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Danh Muc', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->dropDownList($model, 'id_category', $dataCat, array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>    
        <?php echo $form->error($model, 'id_category'); ?>
    </div>
    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Ten san pham', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required"></span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 200, 'class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'name', array('class' => 'required')); ?>
    </div>

    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Gia cu', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required"></span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'price_old', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'price_old', array('class' => 'required')); ?>
    </div>

    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Gia moi', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?><span class="required"></span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'price_new', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'price_new'); ?>
    </div>

    <div class="item form-group">
        <?php echo $form->labelEx($model, 'So luong', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'quanty', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'quanty'); ?>
    </div>

    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Trang thai', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php 
                echo $form->dropDownList($model, 'status', array('0' => 'Còn Hàng', '1' => 'Hết Hàng','2'=>'Mới nhất','3'=>'Bán chạy','4'=>'Xem nhiều','5'=>'Giảm Giá'), array('class' => 'form-control col-md-7 col-xs-12'));
            ?>
        </div>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    
 

    </div>
    <div class="item form-group">
        <?php echo $form->labelEx($model, 'Anh san pham', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->fileField($model,'image', array('class' => 'dropzone','style'=>'border: 1px solid #e5e5e5; height: 100px;')); ?> 
        </div>
        <?php echo $form->error($model, 'image'); ?>
    </div>
    
        
   
    
    
   

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
<!-- <?php
/** dialog thuộc tính khi thêm sản phẩm **/
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'dialog-animation',
    'options'=>array(
        'title'=>'Dialog box - Animation',
        'autoOpen'=>false,
        'show'=>array(
                'effect'=>'blind',
                'duration'=>500,
            ),
        'hide'=>array(
                'effect'=>'explode',
                'duration'=>500,
            ),            
    ),
));
  echo $this->renderPartial('dialog',array('Color'=>$Color)) ;
$this->endWidget('zii.widgets.jui.CJuiDialog');

?>   -->
<script>
$(document).ready(function(){
    $("#create-user").click(function(){
        $("#dialog-animation").dialog("open"); return false;
    });
});
</script>