<?php

namespace App\Traits;

use App\Services\PaymentServices\PayPal\PayPal;

trait PaymentDataConverter
{
	/**
	 * @param $data
	 * @return array
	 */
	public function parseData($data, $paymentMethod)
	{
		if ($paymentMethod instanceof PayPal) {
			// To store data parse input $data using one option.
		}
		// To store data parse input $data using another option.
	}
}
