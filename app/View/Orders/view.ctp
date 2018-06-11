<div class="orders view">
    <div class="col-lg-12">
        <div class="card">
            <div class="form-body"> 
                <div class="row">
                    <div class="card-title col-lg-3">
                        <h2>Order <?php echo h($order['Order']['id']); ?></h2>
                    </div>
                    <div class="col-md-9" style="text-align:right;">
                        <?php echo $this->Html->link(__('View All Orders'), ['action' => 'index'], ['class' => 'btn btn-dark']) ?>
                    </div>
                </div>
                <hr class="m-t-0 m-b-40">
                <div class="card-body">
                    <div class="form-group"> 
                        <div class="card-body row">
                            <h6 class="col-sm-2 col-form-label"><?php echo __('Customer'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
                            </div>
                        </div>
                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Dress'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo h($order['Dress']['type']); ?>
                            </div>
                        </div> 
                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Remarks'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo h($order['Order']['remarks']); ?>
                            </div>
                        </div>

                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Order Date'); ?></h6>
                            <div class="col-sm-10">
                       <?php echo h(date("d-m-Y", strtotime($order['Order']['order_date']))); ?>
                            </div>
                        </div>

                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Delivery Date'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo h(date("d-m-Y", strtotime($order['Order']['delivery_date']))); ?>
                            </div>
                        </div>

                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Advance Amount'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo h($order['Order']['advance_amount']); ?>
                            </div>
                        </div>

                        <div class="card-body row">
                            <h6  class="col-sm-2 col-form-label"><?php echo __('Total Amount'); ?></h6>
                            <div class="col-sm-10">
                        <?php echo h($order['Order']['total_cost']); ?>
                            </div>
                        </div>
                    </div>

                    <dt><?php echo __('Mesurements'); ?></dt>
                    <dd>
			<?php echo h($order['Order']['mesurements']); ?>
                        &nbsp;
                    </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>