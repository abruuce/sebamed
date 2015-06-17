<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testProductspage()
	{
		$response = $this->call('GET', 'products');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testNewsspage()
	{
		$response = $this->call('GET', 'news');

		$this->assertEquals(200, $response->getStatusCode());
	}
}
