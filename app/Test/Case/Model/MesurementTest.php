<?php
App::uses('Mesurement', 'Model');

/**
 * Mesurement Test Case
 */
class MesurementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mesurement',
		'app.dress',
		'app.order',
		'app.dresses_mesurement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mesurement = ClassRegistry::init('Mesurement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mesurement);

		parent::tearDown();
	}

}
