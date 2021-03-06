<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Products
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var string $productCode
     */
    protected $productCode;

    /**
     * @var string $productName
     */
    protected $productName;

    /**
     * @var string $productLine
     */
    protected $productLine;

    /**
     * @var string $productScale
     */
    protected $productScale;

    /**
     * @var string $productVendor
     */
    protected $productVendor;

    /**
     * @var string $productDescription
     */
    protected $productDescription;

    /**
     * @var int $quantityInStock
     */
    protected $quantityInStock;

    /**
     * @var float $buyPrice
     */
    protected $buyPrice;

    /**
     * @var float $MSRP
     */
    protected $MSRP;


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
     * Set productName
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Get productName
     *
     * @return string $productName
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productLine
     *
     * @param string $productLine
     * @return self
     */
    public function setProductLine($productLine)
    {
        $this->productLine = $productLine;
        return $this;
    }

    /**
     * Get productLine
     *
     * @return string $productLine
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * Set productScale
     *
     * @param string $productScale
     * @return self
     */
    public function setProductScale($productScale)
    {
        $this->productScale = $productScale;
        return $this;
    }

    /**
     * Get productScale
     *
     * @return string $productScale
     */
    public function getProductScale()
    {
        return $this->productScale;
    }

    /**
     * Set productVendor
     *
     * @param string $productVendor
     * @return self
     */
    public function setProductVendor($productVendor)
    {
        $this->productVendor = $productVendor;
        return $this;
    }

    /**
     * Get productVendor
     *
     * @return string $productVendor
     */
    public function getProductVendor()
    {
        return $this->productVendor;
    }

    /**
     * Set productDescription
     *
     * @param string $productDescription
     * @return self
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
        return $this;
    }

    /**
     * Get productDescription
     *
     * @return string $productDescription
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set quantityInStock
     *
     * @param int $quantityInStock
     * @return self
     */
    public function setQuantityInStock($quantityInStock)
    {
        $this->quantityInStock = $quantityInStock;
        return $this;
    }

    /**
     * Get quantityInStock
     *
     * @return int $quantityInStock
     */
    public function getQuantityInStock()
    {
        return $this->quantityInStock;
    }

    /**
     * Set buyPrice
     *
     * @param float $buyPrice
     * @return self
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;
        return $this;
    }

    /**
     * Get buyPrice
     *
     * @return float $buyPrice
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Set mSRP
     *
     * @param float $mSRP
     * @return self
     */
    public function setMSRP($mSRP)
    {
        $this->MSRP = $mSRP;
        return $this;
    }

    /**
     * Get mSRP
     *
     * @return float $mSRP
     */
    public function getMSRP()
    {
        return $this->MSRP;
    }
}
