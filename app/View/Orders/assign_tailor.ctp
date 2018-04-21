<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Assign Tailor</h2>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Dress</th>
                            <th>Order Date</th>
                            <th>Delivery Date</th>
							<th>Status</th>
                            <th>Tailor</th>
							<th>Tailor Cost</th>
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
								<td><?php echo h($status[$order['Order']['status']]); ?>&nbsp;</td>
								<td>
									<?php echo $this->Form->create('Order',['class'=>'form-inline']); ?>
									<?php echo $this->Form->input('id', ['type'=>'hidden','value'=>$order['Order']['id']]); ?>
									<?php echo $this->Form->input('user_id', ['empty'=>'--Select--','options'=>$users,'div' => false, 'label' => false, 'class' => 'form-control']); ?>
									<?php echo $this->Form->input('tailor_price', ['div' => false, 'label' => false, 'class' => 'form-control','style'=>'max-width:140px;']); ?>
									<?php echo $this->Form->button(__('Update'), ['class' => 'btn btn-default']) ?>
									<?php echo $this->Form->end(); ?>
								</td>
							</tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="paging">
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn'));
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
