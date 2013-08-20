<?php

/**
 * 
 * @author Yasen Yanev <yasen@openbuildings.com>
 * @author Ivan Kerin <ivan@openbuildings.com>
 * @author Haralan Dobrev <hdobrev@despark.com>
 * @copyright (c) 2013 OpenBuildings Inc.
 * @license http://spdx.org/licenses/BSD-3-Clause
 */
class Source_StaticTest extends Monetary_TestCase {

	/**
	 * @covers OpenBuildings\Monetary\Source_Static::_exchange_rates
	 */
	public function test_exchange_rates()
	{
		$exchange_rates = $this->monetary->exchange_rates();
		$this->assertArrayHasKey('USD', $exchange_rates);
		$this->assertArrayHasKey('BGN', $exchange_rates);
		$this->assertArrayHasKey('GBP', $exchange_rates);
		$this->assertArrayHasKey('EUR', $exchange_rates);
		$this->assertArrayHasKey('JPY', $exchange_rates);
	}

}