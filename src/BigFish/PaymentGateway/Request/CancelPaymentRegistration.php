<?php
/**
 * BIG FISH Payment Gateway (https://www.paymentgateway.hu)
 * PHP SDK
 *
 * @link https://github.com/pmgw-hu/payment-gateway-php-sdk.git
 * @copyright (c) 2024, BIG FISH Payment Services Ltd.
 */
namespace BigFish\PaymentGateway\Request;

/**
 * Cancel Payment Registration request class
 *
 * @package PaymentGateway
 * @subpackage Request
 */
class CancelPaymentRegistration extends RequestAbstract
{
	/**
	 * Transaction ID
	 *
	 * @var string
	 * @access public
	 */
	public $transactionId;

	/**
	 * Construct new Cancel Payment Registration request instance
	 *
	 * @param string $transactionId Transaction ID received from Payment Gateway
	 * @return void
	 * @access public
	 */
	public function __construct($transactionId)
	{
		$this->transactionId = $transactionId;
	}
}
