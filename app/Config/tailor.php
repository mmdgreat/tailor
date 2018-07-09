	<?php
/**
 * Created by IntelliJ IDEA.
 * User: mrunal
 * Date: 18/4/18
 * Time: 5:11 PM
 */

$tailor['roles'] = array(
	1 => 'Owner',
	2 => 'Tailor'
);
$tailor['is_active'] = array(
	1 => 'Yes',
	0 => 'No'
);
$tailor['status'] = array(
        0 => 'Cancelled',
	1 => 'Order Received',
	2 => 'Tailor Assigned',
	3 => 'Stich Done',
	4 => 'Complete'
);
$tailor['status_color'] = array(
        0 => 'light',
	1 => 'secondary',
	2 => 'info',
	3 => 'primary',
	4 => 'success',
);
$tailor['dress_color'] = array(
    0 => 'info',
	1 => 'success',
	2 => 'danger',
	3 => 'warning',
	4 => 'primary',
);
$config['tailor'] = $tailor;
