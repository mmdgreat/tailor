<div class="row">
	<div class="col-lg-12">
		<div class="card card-outline-info">
			<?php echo $this->Form->create('Dress', ['class' => 'form-horizontal']); ?>
			<div class="form-body" id="editDress">
				<div class="row">
					<div class="col-md-3">
						<h4 class="m-b-0">Edit Dress</h4>
					</div>
                                        <div class="col-md-9" style="text-align:right;">
						<?php echo $this->Html->link(__('Add New Dress'),['action' => 'add'], ['class' => 'btn btn-dark']) ?>
						<?php echo $this->Html->link(__('View All Dresses'), ['action' => 'index'], ['class' => 'btn btn-dark']) ?>
					</div>
				</div>
				<hr class="m-t-0 m-b-40">
				<div class="row">
					<?php echo $this->Form->input('id', ['div' => false, 'label' => false, 'class' => 'form-control']);?>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label col-md-3">Dress Type</label>
							<div class="col-md-9">
								<?php echo $this->Form->input('type', ['div' => false, 'label' => false, 'class' => 'form-control']);?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label col-md-3">Default Price</label>
							<div class="col-md-9">
								<?php echo $this->Form->input('default_price', ['div' => false, 'label' => false, 'class' => 'form-control']);?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group row">
							<label class="control-label col-md-3">Measurments</label>
							<div class="col-md-9">
								<?php echo $this->Form->input('Mesurement', ['multiple' => 'multiple', 'type' => 'select', 'div' => false, 'label' => false, 'class' => 'form-control','style'=>'min-height:150px;']);?>
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
									<?php echo $this->Form->button(__('Done'), ['class' => 'btn btn-primary']) ?>
								</div>
							</div>
						</div>
						<div class="col-md-6"></div>
					</div>
				</div>
				<?php echo $this->Form->end() ?>
			</div>
		</div>
	</div>
</div>
