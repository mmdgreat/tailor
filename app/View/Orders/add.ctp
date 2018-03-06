<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <?php echo $this->Form->create('Order', ['class' => 'form-horizontal']) ?>
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="m-b-0">Create Order</h4>
                        </div>
                        <div class="col-md-9">
                            <?php echo $this->Html->link(__('List Orders'), ['action' => 'index'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('List Dresses'), ['controller' => 'Dresses', 'action' => 'index'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('New Dress'), ['controller' => 'Dresses', 'action' => 'add'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'],['class'=>'btn btn-success']) ?>
                            <?php echo $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'],['class'=>'btn btn-success']) ?>
                        </div>
                    </div>
                    <hr class="m-t-0 m-b-40">
                    <div class="row">
                        <?php echo $this->Form->control('customer_id', ['type' => 'hidden', 'div' => false]); ?>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Customer Mobile</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('mobile', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Customer Name</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('name', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Customer Email</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('email', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Customer Address</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('address', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Dress Type</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('dress_id', ['options' => $dresses, 'div' => false, 'label' => false, 'class' => 'form-control custom-select']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Remarks</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('remarks', ['div' => false, 'label' => false, 'class' => 'form-control custom-textarea']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Mesurements</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('mesurements', ['div' => false, 'label' => false, 'class' => 'form-control custom-textarea']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Order Date</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('order_date', ['div' => false, 'type' => 'text', 'label' => false, 'class' => 'form-control custom-textarea datepicker']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Delivery Date</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('delivery_date', ['empty' => true, 'div' => false, 'label' => false, 'class' => 'form-control custom-textarea datepicker', 'type' => 'text']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Tailor Date</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('tailor_date', ['empty' => true, 'div' => false, 'label' => false, 'class' => 'form-control custom-textarea datepicker', 'type' => 'text']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label
                                    class="control-label text-right col-md-3">Tailor</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('user_id', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label
                                    class="control-label text-right col-md-3">Assigned Tailor</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('tailor_assigned', ['div' => false, 'label' => false, 'class' => 'form-control datepicker', 'type' => 'text']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Tailor Price</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('tailor_price', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Advance Amount</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('advance_amount', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Total Cost</label>
                                <div class="col-md-9">
                                    <?php echo $this->Form->control('total_cost', ['div' => false, 'label' => false, 'class' => 'form-control']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <?php echo $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>