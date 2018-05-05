<div class="dresses index">
    <div class="col-lg-12">
        <div class="card">
            <div class="row">
                <div class="card-title col-lg-3">
                    <h4>Dresses</h4>
                </div>
                <div class="action-links col-lg-9">
                    <?php echo $this->Html->link(__('New Dress'), array('action' => 'add'), ['class' => 'btn btn-default m-b-10']); ?>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('type'); ?></th>
                            <th><?php echo $this->Paginator->sort('default_price'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($dresses as $dress): ?>
                            <tr>
                                <td><?php echo h($dress['Dress']['id']); ?>&nbsp;</td>
                                <td><?php echo h($dress['Dress']['type']); ?>&nbsp;</td>
                                <td><?php echo h($dress['Dress']['default_price']); ?>&nbsp;</td>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $dress['Dress']['id']), ['class' => 'btn btn-primary m-b-10']); ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dress['Dress']['id']), ['class' => 'btn btn-warning m-b-10']); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dress['Dress']['id']), ['class' => 'btn btn-danger m-b-10'], array('confirm' => __('Are you sure you want to delete # %s?', $dress['Dress']['id']))); ?>
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
                    ?>    </p>
                <div class="paging">
                    <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
                    ?>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>