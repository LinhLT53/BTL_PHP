<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
<?php echo $this->action->id; ?>
<?php echo get_class($this); ?>
<?php echo $this->module->id; ?>
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>