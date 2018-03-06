<div class="dressesMesurements view">
<h2><?php echo __('Dresses Mesurement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dressesMesurement['DressesMesurement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dress'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dressesMesurement['Dress']['id'], array('controller' => 'dresses', 'action' => 'view', $dressesMesurement['Dress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesurement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dressesMesurement['Mesurement']['id'], array('controller' => 'mesurements', 'action' => 'view', $dressesMesurement['Mesurement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($dressesMesurement['DressesMesurement']['remark']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dresses Mesurement'), array('action' => 'edit', $dressesMesurement['DressesMesurement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dresses Mesurement'), array('action' => 'delete', $dressesMesurement['DressesMesurement']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dressesMesurement['DressesMesurement']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dresses Mesurements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dresses Mesurement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesurements'), array('controller' => 'mesurements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesurement'), array('controller' => 'mesurements', 'action' => 'add')); ?> </li>
	</ul>
</div>
