<?php

namespace App\Services\PaymentServicesTwo\AbsractPayment;

abstract class AbstractPaymentClient
{
	protected $httpClient; //  Use guzzle package.
	protected $tries;
	protected $config;

	/**
	 * @param $config
	 */
	public function __construct($tries, $config)
	{
		$this->tries = $tries;
		$this->config = $config;
		$this->createClient();
	}

	protected function createClient($uri, $host)
	{
		$this->httpClient = app('GuzzleClient')([
				'base_uri' => $uri,
				'headers' => [
				'Host' => $host,
				'Content-Type' => 'application/json'
			]
		]);
	}

	public function get($link)
	{
		return $this->send('GET', $link);
	}

	public function post($link, $data = [])
	{
		return $this->send('POST', $link, ['json' => $data]);
	}

	abstract protected function send(string $method, $link, $data);
}