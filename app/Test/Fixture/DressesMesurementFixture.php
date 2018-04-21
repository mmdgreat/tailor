<?php
/**
 * DressesMesurement Fixture
 */
class DressesMesurementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'dress_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'mesurement_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'remark' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'dress_id' => 1,
			'mesurement_id' => 1,
			'remark' => 'Lorem ipsum dolor sit amet'
		),
	);

}
