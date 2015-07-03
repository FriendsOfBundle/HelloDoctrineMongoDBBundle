<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Payments
{
    

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $customerNumber
     */
    protected $customerNumber;

    /**
     * @var string $checkNumber
     */
    protected $checkNumber;

    /**
     * @var date $paymentDate
     */
    protected $paymentDate;

    /**
     * @var float $amount
     */
    protected $amount;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set customerNumber
     *
     * @param int $customerNumber
     * @return self
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     * Get customerNumber
     *
     * @return int $customerNumber
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Set checkNumber
     *
     * @param string $checkNumber
     * @return self
     */
    public function setCheckNumber($checkNumber)
    {
        $this->checkNumber = $checkNumber;
        return $this;
    }

    /**
     * Get checkNumber
     *
     * @return string $checkNumber
     */
    public function getCheckNumber()
    {
        return $this->checkNumber;
    }

    /**
     * Set paymentDate
     *
     * @param date $paymentDate
     * @return self
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return date $paymentDate
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
