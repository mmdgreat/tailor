<div class="orders index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h2>Invoice</h2>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('Orders List'), ['action' => 'index'], ['class' => 'btn btn-dark']) ?>
                </div>
            </div>
            <div class="card-body">
                <div class="unix-invoice">
                        <div class="container-fluid">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <div id="invoice" class="effect2">
                                                        <div id="invoice-top">
                                                                <div class="invoice-info">
                                                                        <h2>Stitch and Style</h2>
                                                                        <p> Preeti Kale <br> +91-9373372000
                                                                        </p>
                                                                </div>
                                                                <!--End Info-->
                                                                <div class="title">
                                                                        <h4>Invoice #<?php echo $order['Order']['id']; ?></h4>
                                                                        <p><?php echo $order['Order']['delivery_date'] ?></p>
                                                                </div>
                                                                <!--End Title-->
                                                        </div>
                                                        <!--End InvoiceTop-->
                                                        <div id="invoice-mid">
                                                                <div class="invoice-info">
                                                                        <h2><?php echo $order['Customer']['name']; ?></h2>
                                                                        <p>Mobile No: <?php echo $order['Customer']['mobile']; ?></p>
                                                                </div>
                                                        </div>
                                                        <!--End Invoice Mid-->
                                                        <div id="invoice-bot">
                                                                <div id="invoice-table">
                                                                        <div class="table-responsive">
                                                                                <table class="table">
                                                                                        <tr class="tabletitle">
                                                                                                <td class="table-item">
                                                                                                        <h2>Item Description</h2>
                                                                                                </td>
                                                                                                <td class="Rate">
                                                                                                        <h2>Rate</h2>
                                                                                                </td>
                                                                                                <td class="Hours">
                                                                                                        <h2>Quantity</h2>
                                                                                                </td>
                                                                                                <td class="subtotal">
                                                                                                        <h2>Sub-total</h2>
                                                                                                </td>
                                                                                        </tr>

                                                                                        <tr class="service">
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext">
                                                                                                                <?php echo $order['Dress']['type']; ?>
                                                                                                        </p>
                                                                                                </td>
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext"><?php echo $order['Order']['total_cost']; ?></p>
                                                                                                </td>
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext">1</p>
                                                                                                </td>
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext">
                                                                                                                <?php echo $order['Order']['total_cost']; ?>
                                                                                                        </p>
                                                                                                </td>
                                                                                        </tr>

                                                                                        <tr class="service">
                                                                                                <td class="tableitem">
                                                                                                        Advance Amount
                                                                                                </td>
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext"><?php echo $order['Order']['advance_amount']; ?></p>
                                                                                                </td>
                                                                                                <td class="tableitem">

                                                                                                </td>
                                                                                                <td class="tableitem">
                                                                                                        <p class="itemtext">
                                                                                                                <?php echo $order['Order']['advance_amount']; ?>
                                                                                                        </p>
                                                                                                </td>
                                                                                        </tr>

                                                                                        <tr class="tabletitle">
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td class="Rate">
                                                                                                        <h2>Total</h2>
                                                                                                </td>
                                                                                                <td class="payment">
                                                                                                        <h2><?php echo $order['Order']['total_cost']; ?></h2>
                                                                                                </td>
                                                                                        </tr>
                                                                                        <?php if($order['Order']['outstanding_amt'] != null && $order['Order']['outstanding_amt'] != '0.00' ): ?>
                                                                                        <tr class="tabletitle">
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td class="Rate">
                                                                                                        <h2>Outstanding Amount</h2>
                                                                                                </td>
                                                                                                <td class="payment">
                                                                                                        <h2><?php echo $order['Order']['outstanding_amt']; ?></h2>
                                                                                                </td>
                                                                                        </tr>

                                                                                        <tr class="tabletitle">
                                                                                                <td></td>
                                                                                                <td></td>
                                                                                                <td class="Rate">
                                                                                                </td>
                                                                                                <td class="payment">
                                                                                                        <?php echo $this->Html->link(__('Mark as paid'), array('action' => 'mark_paid', $order['Order']['id']),['class'=>'btn btn-info']); ?>
                                                                                                </td>
                                                                                        </tr>
                                                                                        <?php endif; ?>
                                                                                </table>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                        <!--End InvoiceBot-->
                                                </div>
                                                <!--End Invoice-->
                                        </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
