<?php
App::uses('DressesMesurement', 'Model');

/**
 * DressesMesurement Test Case
 */
class DressesMesurementTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dresses_mesurement',
		'app.dress',
		'app.order',
		'app.mesurement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DressesMesurement = ClassRegistry::init('DressesMesurement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DressesMesurement);

		parent::tearDown();
	}

}
