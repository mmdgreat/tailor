<?php
$url = Router::url(['controller' => 'orders', 'action' => 'get_customers'], true);
$custUrl = Router::url(['controller' => 'orders', 'action' => 'get_customer'], true);
$getDressUrl = Router::url(['controller' => 'dresses', 'action' => 'get_dress'], true);
?>

<script>
	$(document).ready(function () {
		$(".datepicker").datepicker({
			dateFormat: "dd-mm-yy"
		});
        });
</script>

<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<?php echo $this->Form->create('Order', ['class' => 'form-horizontal']) ?>
			<div class="form-body">
                                <div class="row">
                                        <div class="col-md-3">
                                                <h4 class="m-b-0">Update Order</h4>
                                        </div>
                                        <div class="col-md-9" style="text-align:right;">
                                                <?php echo $this->Html->link(__('View All Orders'), ['action' => 'index'], ['class' => 'btn btn-dark']) ?>
                                        </div>
                                </div>

				<div class="row">
                                        <hr class="m-t-0 m-b-40">
					<?php echo $this->Form->control('id', ['type' => 'hidden', 'div' => false]); ?>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Customer Mobile</label>
							<div class="col-md-9">
								<?php echo $this->Form->control('Customer.mobile', ['div' => false, 'label' => false, 'id' => 'getCustomer', 'class' => 'form-control',  'readonly']); ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Customer Name</label>
							<div class="col-md-9">
								<?php echo $this->Form->control('Customer.name', ['div' => false, 'label' => false, 'class' => 'form-control', 'readonly']); ?>
							</div>
						</div>
					</div>
                                    
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Remarks</label>
							<div class="col-md-9">
								<?php echo $this->Form->input('remarks', ['div' => false, 'label' => false, 'type' => 'textarea', 'class' => 'form-control custom-textarea']); ?>
							</div>
						</div>
					</div>

					<div id="mes" class="row" style="width: 100%;"></div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Order Date</label>
							<div class="col-md-9">
								<?php echo $this->Form->control('order_date', ['div' => false, 'type' => 'text', 'label' => false, 'class' => 'form-control custom-textarea', 'default' => date('d-m-Y'), 'readonly']); ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Delivery Date</label>
							<div class="col-md-9">
								<?php echo $this->Form->control('delivery_date', ['empty' => true, 'div' => false, 'label' => false, 'class' => 'form-control custom-textarea datepicker', 'type' => 'text', 'default' => date('d-m-Y', strtotime('+15 days'))]); ?>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label text-right col-md-3">Tailor Date</label>
							<div class="col-md-9">
								<?php echo $this->Form->control('tailor_date', ['empty' => true, 'div' => false, 'label' => false, 'class' => 'form-control custom-textarea datepicker', 'type' => 'text', 'default' => date('d-m-Y', strtotime('+2 days'))]); ?>
							</div>
						</div>
					</div>

					<div id="mes" class="row" style="width: 100%;"></div>
                                        
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
								<?php echo $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
							</div>
						</div>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>

