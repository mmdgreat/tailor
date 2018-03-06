<div class="mesurements view">
<h2><?php echo __('Mesurement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesurement['Mesurement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($mesurement['Mesurement']['type']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mesurement'), array('action' => 'edit', $mesurement['Mesurement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mesurement'), array('action' => 'delete', $mesurement['Mesurement']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesurement['Mesurement']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesurements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesurement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dresses'); ?></h3>
	<?php if (!empty($mesurement['Dress'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Default Price'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mesurement['Dress'] as $dress): ?>
		<tr>
			<td><?php echo $dress['id']; ?></td>
			<td><?php echo $dress['type']; ?></td>
			<td><?php echo $dress['default_price']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dresses', 'action' => 'view', $dress['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dresses', 'action' => 'edit', $dress['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dresses', 'action' => 'delete', $dress['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dress['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
