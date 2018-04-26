<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Orders</h2>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('Create New Order'), array('action' => 'add'), ['class' => 'btn btn-primary m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('customer_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('dress_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('order_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('delivery_date'); ?></th>
							<th><?php echo $this->Paginator->sort('status'); ?></th>
                            <th><?php echo $this->Paginator->sort('user_id','Tailor'); ?></th>
							<th><?php echo $this->Paginator->sort('advance_amount'); ?></th>
                            <th><?php echo $this->Paginator->sort('total_cost','Total'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td>
                                    <?php echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link($order['Dress']['type'], array('controller' => 'dresses', 'action' => 'view', $order['Dress']['id'])); ?>
                                </td>
                                <td><?php echo h(date('d-M-y',strtotime($order['Order']['order_date']))); ?>&nbsp;</td>
                                <td><?php echo h(date('d-M-y',strtotime($order['Order']['delivery_date']))); ?>&nbsp;</td>
								<td>
									<span class="badge badge-danger">
										<?php echo h($status[$order['Order']['status']]); ?>&nbsp;
									</span>
								</td>
                                <td>
                                    <?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
                                </td>
                                <td><?php echo h($order['Order']['advance_amount']); ?>&nbsp;</td>
                                <td><?php echo h($order['Order']['total_cost']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id']),['class'=>'btn btn-info']); ?>
                                    <?php echo $this->Html->link(__('Update'), array('action' => 'edit', $order['Order']['id']),['class'=>'btn btn-warning']); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <p>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>    </p>
                <div class="paging">
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                    ?>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>

<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Dresses'), array('controller' => 'dresses', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Dress'), array('controller' => 'dresses', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
    </ul>
</div>
