<?php
/* @var $this NewsTypeController */
/* @var $data NewsType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_news_type')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_news_type), array('view', 'id'=>$data->id_news_type)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>