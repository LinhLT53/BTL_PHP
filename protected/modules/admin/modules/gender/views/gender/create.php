<?php
/* @var $this GenderController */
/* @var $model Gender */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gender', 'url'=>array('index')),
	array('label'=>'Manage Gender', 'url'=>array('admin')),
);
?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>