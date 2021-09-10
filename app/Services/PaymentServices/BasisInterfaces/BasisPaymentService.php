<?php

namespace App\Services\PaymentServices\BasisInterfaces;

interface BasisPaymentService
{
	public function makeTransaction(string $orderId, float $price, string $currency, string $token, string $failUrl);

	public function data(array $data);
}