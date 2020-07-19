<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */
/* @var $form CActiveForm */
?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'order-detail-form',
    
        'enableAjaxValidation' => false,
    ));
    ?>


    <p class="note">Yêu cầu <span class="required">*</span> bắt buộc.</p>

    <?php //echo $form->errorSummary($model);  ?>

<script>
document.addEventListener("DOMContentLoaded",function(){

    var gialb= document.getElementById("lb_gia"); 
     var lbmsp= document.getElementById("lb_msp");
     var lbmdh= document.getElementById("lb_mdh");
     var lbsl= document.getElementById("lb_sl");
    gialb.textContent="Giá";
    lbmsp.textContent="Mã sản phẩm";
    lbmdh.textContent="Mã đơn hàng";
    lbsl.textContent="Số lượng";
},false);
</script>
    <div class="row">
        <?php echo $form->labelEx($model, null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12',"id"=>"lb_mdh")); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">       
            <?php echo $form->textField($model, 'id_order', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_order'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model,null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12',"id"=>"lb_msp")); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_product', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_product'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model,null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12',"id"=>"lb_gia")); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'price', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'price'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12',"id"=>"lb_sl")); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'quanty', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'quanty'); ?>
    </div>
    <br>
    <div class="row buttons">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
            </div>
        </div>

        <?php $this->endWidget(); ?>

    </div><!-- form -->