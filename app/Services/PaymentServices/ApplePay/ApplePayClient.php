<?php

namespace App\Services\PaymentServices\ApplePay;

use App\Services\PaymentServices\BasisInterfaces\BasisPaymentClient;

class ApplePayClient implements BasisPaymentClient
{
	private $httpClient; //  Use guzzle package.
	private $tries;
	private $config;

	/**
	 * @param $config
	 */
	public function __construct($config)
	{
		$this->tries = 0;
		$this->config = $config;
		$this->createClient();
	}

	public function createClient()
	{
		// TODO: Implement createClient() method.
	}

	public function get($link)
	{
		// TODO: Implement get() method.
	}

	public function post()
	{
		// TODO: Implement post() method.
	}

	public function send(string $method, $link, $data)
	{
		// TODO: Implement send() method.
	}
}