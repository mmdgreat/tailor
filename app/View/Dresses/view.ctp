<div class="dresses view">
<h2><?php echo __('Dress'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dress['Dress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($dress['Dress']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Price'); ?></dt>
		<dd>
			<?php echo h($dress['Dress']['default_price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dress'), array('action' => 'edit', $dress['Dress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dress'), array('action' => 'delete', $dress['Dress']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dress['Dress']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mesurements'), array('controller' => 'mesurements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mesurement'), array('controller' => 'mesurements', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Orders'); ?></h3>
	<?php if (!empty($dress['Order'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Dress Id'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Mesurements'); ?></th>
		<th><?php echo __('Order Date'); ?></th>
		<th><?php echo __('Delivery Date'); ?></th>
		<th><?php echo __('Tailor Date'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Tailor Assigned'); ?></th>
		<th><?php echo __('Tailor Price'); ?></th>
		<th><?php echo __('Advance Amount'); ?></th>
		<th><?php echo __('Total Cost'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dress['Order'] as $order): ?>
		<tr>
			<td><?php echo $order['id']; ?></td>
			<td><?php echo $order['customer_id']; ?></td>
			<td><?php echo $order['dress_id']; ?></td>
			<td><?php echo $order['remarks']; ?></td>
			<td><?php echo $order['mesurements']; ?></td>
			<td><?php echo $order['order_date']; ?></td>
			<td><?php echo $order['delivery_date']; ?></td>
			<td><?php echo $order['tailor_date']; ?></td>
			<td><?php echo $order['user_id']; ?></td>
			<td><?php echo $order['tailor_assigned']; ?></td>
			<td><?php echo $order['tailor_price']; ?></td>
			<td><?php echo $order['advance_amount']; ?></td>
			<td><?php echo $order['total_cost']; ?></td>
			<td><?php echo $order['created']; ?></td>
			<td><?php echo $order['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orders', 'action' => 'delete', $order['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Mesurements'); ?></h3>
	<?php if (!empty($dress['Mesurement'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dress['Mesurement'] as $mesurement): ?>
		<tr>
			<td><?php echo $mesurement['id']; ?></td>
			<td><?php echo $mesurement['type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mesurements', 'action' => 'view', $mesurement['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mesurements', 'action' => 'edit', $mesurement['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mesurements', 'action' => 'delete', $mesurement['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mesurement['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mesurement'), array('controller' => 'mesurements', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
