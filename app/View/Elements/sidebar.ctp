<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Eaglet</span></a></div>
            <ul>
                <li class="label">Main</li>
                <li class="active">
                    <a class="sidebar-sub-toggle">
                        <i class="ti-pencil-alt"></i> Orders <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'orders', 'action' => 'index'));?>">List Orders</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'orders', 'action' => 'add'));?>">Create Order</a></li>
                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <i class="ti-bag"></i> Dresses <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'dresses', 'action' => 'index'));?>">List Types</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'dresses', 'action' => 'add'));?>">Add New Type</a></li>
                    </ul>
                </li>

                <li>
                    <a class="sidebar-sub-toggle">
                        <i class="ti-ruler-alt-2"></i> measurements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'mesurements', 'action' => 'index'));?>">List Measurements</a></li>
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'mesurements', 'action' => 'add'));?>">Add Measurement</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo $this->Html->url(array('controller' => 'orders', 'action' => 'assign_tailor'));?>">
                        <i class="ti-user"></i> Assign Tailor
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->