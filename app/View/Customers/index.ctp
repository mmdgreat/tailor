<div class="customers index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h4>Customers</h4>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add'), ['class' => 'btn btn-dark m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('name'); ?></th>
                                <th><?php echo $this->Paginator->sort('mobile'); ?></th>
                                <th><?php echo $this->Paginator->sort('email'); ?></th>
                                <th><?php echo $this->Paginator->sort('address'); ?></th>
                                <th class="actions"></th>
                            </tr>
                        </thead>
                        <tbody>
	<?php foreach ($customers as $customer): ?>
                            <tr>
                                <td><?php echo h($customer['Customer']['name']); ?>&nbsp;</td>
                                <td><?php echo h($customer['Customer']['mobile']); ?>&nbsp;</td>
                                <td><?php echo h($customer['Customer']['email']); ?>&nbsp;</td>
                                <td><?php echo h($customer['Customer']['address']); ?>&nbsp;</td>
                                <td class="actions">
			<?php echo $this->Html->link(__('View Orders'), array('controller' => 'orders', 'action' => 'index', $customer['Customer']['id'],), ['class' => 'btn btn-secondary m-b-10']); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['id']), ['class' => 'btn btn-secondary m-b-10']); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['id']), ['class' => 'btn btn-danger m-b-10'], array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['id']))); ?>
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
	?>	</p>
                <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn'));
	?>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>