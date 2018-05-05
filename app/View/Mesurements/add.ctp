
<div class="mesurements form">
<?php echo $this->Form->create('Mesurement'); ?>
	<fieldset>
		<legend><?php echo __('Add Mesurement'); ?></legend>
	<?php
		echo $this->Form->input('type');
		//echo $this->Form->input('Dress');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mesurements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
