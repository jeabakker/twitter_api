<?php

class ElggObjectTest extends \Elgg\TestCase {

	protected function setUp() {
		// required by \ElggEntity when setting the owner/container
		_elgg_services()->setValue('session', \ElggSession::getMock());
	}

	public function testCanConstructWithoutArguments() {
		$this->assertNotNull(new \ElggObject());
	}

}
