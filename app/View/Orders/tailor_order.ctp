<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Orders</h2>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('Tailors'), array('controller' => 'users'), ['class' => 'btn btn-dark m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if(!empty($orders)) { ?>
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id','Order No.'); ?></th>
                            <th><?php echo $this->Paginator->sort('receipt_no'); ?></th>
                            <th><?php echo $this->Paginator->sort('customer_id','Customer'); ?></th>
                            <th><?php echo $this->Paginator->sort('dress_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('tailor_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('delivery_date'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td>
                                    <?php echo $this->Html->link($order['Order']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
                                </td>
                                <td><?php echo h($order['Order']['receipt_no']); ?>&nbsp;</td>
                                <td><?php echo h($order['Customer']['name']); ?></td>
                                <td>
                                    <span class="badge badge-<?=$dress_color[$order['Dress']['id']];?>">
                                        <?php echo h($order['Dress']['type']); ?>
                                    </span>
                                </td>
                                <td><?php echo h(date('d-M-y',strtotime($order['Order']['tailor_date']))); ?>&nbsp;</td>
                                <td><?php echo h(date('d-M-y',strtotime($order['Order']['delivery_date']))); ?>&nbsp;</td>
                                
                                <td class="actions">
                                    <?php if($order['Order']['status'] == 2) :
                                        echo $this->Html->link('Stich Done', array('action' => 'stich_done', $order['Order']['id']), array('class'=>'btn btn-info', 'escape' => false));
                                    endif; ?>
                                    <?php echo $this->Html->link('Tailor Receipt', array('action' => 'tailor_receipt', $order['Order']['id']), array('class'=>'btn btn-secondary', 'escape' => false)); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php } else { ?>
                    <div class="alert alert-info" role="alert">
                        No orders available!
                    </div>
                    <?php } ?>
                </div>
                <?php if(!empty($orders)) { ?>
                <p>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>    </p>
                <div class="paging">
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous '), array(), null, array('class' => 'prev disabled btn'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__(' next') . ' >', array(), null, array('class' => 'next disabled btn'));
                    ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>