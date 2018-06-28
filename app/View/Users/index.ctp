<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Orders</h2>
                </div>
                <div class="action-links col-lg-9">
					<?php echo $this->Html->link(__('Order List'), array('controller' => 'orders', 'action' => 'index'), ['class' => 'btn btn-dark m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                                <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                                <th><?php echo $this->Paginator->sort('mobile'); ?></th>
                                <th><?php echo $this->Paginator->sort('email'); ?></th>
                                <th><?php echo $this->Paginator->sort('role'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                	    <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['mobile']); ?>&nbsp;</td>
                                <td><?php echo h($user['User']['email']); ?>&nbsp;</td>
                                <td><?php echo h($roles[$user['User']['role']]); ?>&nbsp;</td>
                                <td>
                                        <?php echo $this->Html->link(__('View Orders'), array('controller' => 'orders', 'action' => 'tailor_order', $user['User']['id']), ['class' => 'btn btn-secondary m-b-10']); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']),['class'=>'btn btn-danger m-b-10'] ,array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
        </div>
    </div>
</div>
