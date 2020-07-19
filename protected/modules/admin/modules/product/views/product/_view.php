

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_product')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_product), array('view', 'id'=>$data->id_product)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_category')); ?>:</b>
	<?php echo CHtml::encode($data->id_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_color')); ?>:</b>
	<?php echo CHtml::encode($data->id_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_old')); ?>:</b>
	<?php echo CHtml::encode($data->price_old); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_new')); ?>:</b>
	<?php echo CHtml::encode($data->price_new); ?>
	<br />

	<?php  ?>

</div>