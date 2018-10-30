<?php
namespace Omnipay\Receipt\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
/**
 * Class PurchaseResponse
 * @package Omnipay\Receipt\Message
 */
class PurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{


    /**
     * Set successful to false, as transaction is not completed yet
     * @return bool
     */
    public function isSuccessful()
    {
        return true;
    }


    /**
     * Mark purchase as redirect type
     * @return bool
     */
    public function isRedirect()
    {
        return false;
    }


    /**
     * Get redirect method
     * @return string
     */
    public function getRedirectMethod()
    {
        return 'GET';
    }


    /**
     * Get redirect data
     * @return array|mixed
     */
    public function getRedirectData()
    {
        return $this->data;
    }
}
