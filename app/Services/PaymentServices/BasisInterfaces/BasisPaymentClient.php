<?php

namespace App\Services\PaymentServices\BasisInterfaces;

interface BasisPaymentClient
{
	public function createClient();

	public function get($link);

	public function post();

	public function send(string $method, $link, $data);
}