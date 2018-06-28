<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Orders</h2>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('Back'), $this->request->referer(), ['class' => 'btn btn-dark m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id','Order No.'); ?></th>
                            <th><?php echo $this->Paginator->sort('receipt_no'); ?></th>
                            <!--<th><?php echo $this->Paginator->sort('customer_id','Customer'); ?></th>-->
                            <th><?php echo $this->Paginator->sort('dress_id'); ?></th>
                            <th><?php echo $this->Paginator->sort('tailor_date'); ?></th>
                            <th><?php echo $this->Paginator->sort('mesurements'); ?></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $this->Html->link($order['Order']['id'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
                                </td>
                                <td><?php echo h($order['Order']['receipt_no']); ?>&nbsp;</td>
                                <td>
                                    <span class="badge badge-<?=$status_color[$order['Dress']['id']];?>">
                                        <?php echo h($order['Dress']['type']); ?>
                                    </span>
                                </td>
                                <td><?php echo h(date('d-M-y',strtotime($order['Order']['tailor_date']))); ?>&nbsp;</td>
                                <td>
                                    <?php foreach($mesurements as $measures=>$value) { ?>
                                        <p><?=$measures?> : <?=$value?></p>
                                    <?php } ?>
                                </td>
                                <td></td>                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>