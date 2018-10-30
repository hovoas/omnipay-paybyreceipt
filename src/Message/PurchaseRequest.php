<?php

namespace Omnipay\Receipt\Message;
use Omnipay\Common\Message\AbstractRequest;

/**
 * Class PurchaseRequest
 * @package Omnipay\Receipt\Message
 */
class PurchaseRequest extends AbstractRequest
{


    public function setCheckImg($value)
    {
        return $this->setParameter('check_img', $value);
    }

    public function getCheckImg()
    {
        return $this->getParameter('check_img');
    }

    public function setCheckCode($value)
    {
        return $this->setParameter('check_code', $value);
    }

    public function getCheckCode()
    {
        return $this->getParameter('check_code');
    }

    public function setPlace($value)
    {
        return $this->setParameter('place', $value);
    }

    public function getPlace()
    {
        return $this->getParameter('place');
    }

    public function setPrice($value)
    {
        return $this->setParameter('price', $value);
    }

    public function getPrice()
    {
        return $this->getParameter('price');
    }

    /**
     * Prepare data to send
     * @return array|mixed
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function getData()
    {
        return [
            'check_img' => $this->getCheckImg(),
            'check_code' => $this->getCheckCode(),
            'place' => $this->getPlace(),
            'price' => $this->getPrice(),
        ];
    }


    /**
     * Send data and return response instance
     * @param $data
     * @return PurchaseResponse
     * @throws \Omnipay\Common\Exception\InvalidRequestException
     */
    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }



}