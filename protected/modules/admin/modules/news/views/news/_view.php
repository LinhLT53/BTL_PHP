<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_news')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_news), array('view', 'id'=>$data->id_news)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_news_type')); ?>:</b>
	<?php echo CHtml::encode($data->id_news_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_add')); ?>:</b>
	<?php echo CHtml::encode($data->date_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_upd')); ?>:</b>
	<?php echo CHtml::encode($data->date_upd); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quanty_cmt')); ?>:</b>
	<?php echo CHtml::encode($data->quanty_cmt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_description')); ?>:</b>
	<?php echo CHtml::encode($data->image_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_content')); ?>:</b>
	<?php echo CHtml::encode($data->image_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ratting')); ?>:</b>
	<?php echo CHtml::encode($data->ratting); ?>
	<br />

	*/ ?>

</div>