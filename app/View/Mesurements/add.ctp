<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="form-body" id="newDress">
                <div class="row">
                    <div class="card-title col-lg-3">
                        <h4 class="m-b-0">Add New Measurement</h4>
                    </div>
                    <div class="action-links col-lg-9">
                        <?php echo $this->Html->link(__('All Measurements'), array('action' => 'index'), ['class' => 'btn btn-dark m-b-10']); ?>
                    </div>
                </div>
                <hr class="m-t-0 m-b-40">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label class="control-label col-md-2">Measurement Type</label>
                            <div class="col-md-5">
                                <?php echo $this->Form->input('type', ['div' => false, 'label' => false, 'class' => 'form-control']);?>
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
                                        <?php echo $this->Form->button(__('Add'), ['class' => 'btn btn-primary']) ?>
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