<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Orderdetails
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $orderNumber
     */
    protected $orderNumber;

    /**
     * @var string $productCode
     */
    protected $productCode;

    /**
     * @var int $quantityOrdered
     */
    protected $quantityOrdered;

    /**
     * @var float $priceEach
     */
    protected $priceEach;

    /**
     * @var int $orderLineNumber
     */
    protected $orderLineNumber;


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
     * Set orderNumber
     *
     * @param int $orderNumber
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return int $orderNumber
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set productCode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Get productCode
     *
     * @return string $productCode
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Set quantityOrdered
     *
     * @param int $quantityOrdered
     * @return self
     */
    public function setQuantityOrdered($quantityOrdered)
    {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    /**
     * Get quantityOrdered
     *
     * @return int $quantityOrdered
     */
    public function getQuantityOrdered()
    {
        return $this->quantityOrdered;
    }

    /**
     * Set priceEach
     *
     * @param float $priceEach
     * @return self
     */
    public function setPriceEach($priceEach)
    {
        $this->priceEach = $priceEach;
        return $this;
    }

    /**
     * Get priceEach
     *
     * @return float $priceEach
     */
    public function getPriceEach()
    {
        return $this->priceEach;
    }

    /**
     * Set orderLineNumber
     *
     * @param int $orderLineNumber
     * @return self
     */
    public function setOrderLineNumber($orderLineNumber)
    {
        $this->orderLineNumber = $orderLineNumber;
        return $this;
    }

    /**
     * Get orderLineNumber
     *
     * @return int $orderLineNumber
     */
    public function getOrderLineNumber()
    {
        return $this->orderLineNumber;
    }
}
