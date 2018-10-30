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

    public function getData() {
        return [
            'transaction' => $this->data
        ];
    }
}
