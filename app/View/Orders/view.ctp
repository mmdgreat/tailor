<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dress'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Dress']['id'], array('controller' => 'dresses', 'action' => 'view', $order['Dress']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($order['Order']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesurements'); ?></dt>
		<dd>
			<?php echo h($order['Order']['mesurements']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['delivery_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tailor Date'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tailor_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tailor Assigned'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tailor_assigned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tailor Price'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tailor_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Advance Amount'); ?></dt>
		<dd>
			<?php echo h($order['Order']['advance_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Cost'); ?></dt>
		<dd>
			<?php echo h($order['Order']['total_cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
