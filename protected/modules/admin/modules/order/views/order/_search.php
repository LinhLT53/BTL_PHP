<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form-horizontal form-label-left">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'Mã đơn hàng', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_order', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_order'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Mã người dùng', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'id_user', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'id_user'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Tổng số', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <<div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'total', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'total'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Trạng thái', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'status', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'status'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'Ngày', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'date', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'date'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipFirstName', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipFirstName', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipFirstName'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipLastName', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipLastName', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipLastName'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipAddress', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipAddress', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipAddress'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipAddress2', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipAddress2', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipAddress2'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipProvincial', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipProvincial', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipProvincial'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipPhone', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipPhone', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipPhone'); ?>
    </div>
    <br>
    <div class="row">
        <?php echo $form->labelEx($model, 'orderShipEmail', array('class' => 'control-label col-md-3 col-sm-3 col-xs-12')); ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <?php echo $form->textField($model, 'orderShipEmail', array('class' => 'form-control col-md-7 col-xs-12')); ?>
        </div>
        <?php echo $form->error($model, 'orderShipEmail'); ?>
    </div>
    <br>
    <div class="row buttons">
         <div class="col-md-6 col-md-offset-3">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
         </div>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->