<div class="dressesMesurements form">
<?php echo $this->Form->create('DressesMesurement'); ?>
	<fieldset>
		<legend><?php echo __('Add Dresses Mesurement'); ?></legend>
	<?php
		echo $this->Form->input('dress_id');
		echo $this->Form->input('mesurement_id');
		echo $this->Form->input('remark');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dresses Mesurements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesurements'), array('controller' => 'mesurements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesurement'), array('controller' => 'mesurements', 'action' => 'add')); ?> </li>
	</ul>
</div>
