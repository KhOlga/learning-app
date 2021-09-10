<?php

namespace App\Services\PaymentServices\PayPal;

use Illuminate\Support\ServiceProvider;

class PaypalServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton(PayPal::class, function ($app) {
			return new PayPal($app->config['services']['paypal']);
		});
	}
}
