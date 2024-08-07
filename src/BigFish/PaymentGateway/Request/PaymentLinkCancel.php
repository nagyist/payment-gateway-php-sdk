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
 * Payment link cancel request class
 * 
 * @package PaymentGateway
 * @subpackage Request
 */
class PaymentLinkCancel extends RequestAbstract
{
	/**
	 * Payment link name
	 * 
	 * @var string
	 * @access public
	 */
	public $paymentLinkName;

	/**
	 * Construct payment link cancel request instance
	 * 
	 * @param string $paymentLinkName Payment Link Name received from Payment Gateway
	 * @return void
	 * @access public
	 */
	public function __construct($paymentLinkName)
	{
		$this->paymentLinkName = $paymentLinkName;
	}
}
