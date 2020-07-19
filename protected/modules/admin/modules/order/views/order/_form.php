<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'order-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Yêu cầu <span class="required">*</span>bắt buộc</p>

    <?php //echo $form->errorSummary($model);  ?>

            <script>
                document.addEventListener("DOMContentLoaded",function(){

                    var mng= document.getElementById("mng"); 
                    var iduser= document.getElementById("iduser");
                    var tongso= document.getElementById("tongso");
                    var lbsl= document.getElementById("stt_id");
                    mng.textContent="Mã người dùng";
                    iduser.textContent="Mã user";
                    tongso.textContent="Tổng sổ";
                    lbsl.textContent="Trạng thái";
        },false);
        </script>

    <div class="row">
        <?php echo $form->labelEx($model,null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12','id'=>'mng')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_user', array('class' => 'form-control col-md-7 col-xs-12','id'=>'iduser')); ?>
        </div>
        <?php echo $form->error($model, 'id_user'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12','id'=>'tongso')); ?><span class="required">*</span>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'total', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'total'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model,null, array('class' => 'control-label col-md-3 col-sm-3 col-xs-12',"id"=>"stt_id")); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'status', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'status'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Ngay', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'date', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'date'); ?>
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