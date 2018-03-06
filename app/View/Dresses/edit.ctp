<div class="dresses form">
<?php echo $this->Form->create('Dress'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dress'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('default_price');
		echo $this->Form->input('Mesurement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dress.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Dress.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesurements'), array('controller' => 'mesurements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesurement'), array('controller' => 'mesurements', 'action' => 'add')); ?> </li>
	</ul>
</div>
