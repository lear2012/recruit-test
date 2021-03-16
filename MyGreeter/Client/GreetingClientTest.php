<?php
include_once __DIR__.'/GreetingClient.php';

use PHPUnit\Framework\TestCase;

use MyGreeter\Client\GreetingClient;

class GreetingClientTest extends TestCase
{
	/**
	 * @var Client
	 */
	protected $client;

	protected function setUp(): void
	{
		$this->client = new GreetingClient();
	}

	public function testGreet() : void
	{
		// test if it's in the morning
		$msg = $this->client->greet(3);
		$this->assertEquals('Good morning', $msg);

		// test if it's in the morning
		$msg = $this->client->greet(13);
		$this->assertEquals('Good afternoon', $msg);

		// test if it's in the morning
		$msg = $this->client->greet(19);
		$this->assertEquals('Good evening', $msg);

		// test if the param is wrong
		$msg = $this->client->greet(-2);
		$this->assertEquals('Wrong hour param', $msg);

		// test if the param is wrong
		$msg = $this->client->greet(233);
		$this->assertEquals('Wrong hour param', $msg);

	}
}