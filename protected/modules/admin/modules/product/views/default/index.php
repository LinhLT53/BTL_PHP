<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
<?php echo $this->module->id; ?>
</p>
<p>
 <t><?php echo __FILE__; ?></t>
</p>