<?php
App::uses('Dress', 'Model');

/**
 * Dress Test Case
 */
class DressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dress',
		'app.order',
		'app.mesurement',
		'app.dresses_mesurement'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dress = ClassRegistry::init('Dress');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dress);

		parent::tearDown();
	}

}
