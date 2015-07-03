<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Orders
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
     * @var date $orderDate
     */
    protected $orderDate;

    /**
     * @var date $requiredDate
     */
    protected $requiredDate;

    /**
     * @var date $shippedDate
     */
    protected $shippedDate;

    /**
     * @var string $status
     */
    protected $status;

    /**
     * @var string $comments
     */
    protected $comments;

    /**
     * @var int $customerNumber
     */
    protected $customerNumber;


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
     * Set orderDate
     *
     * @param date $orderDate
     * @return self
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     * Get orderDate
     *
     * @return date $orderDate
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set requiredDate
     *
     * @param date $requiredDate
     * @return self
     */
    public function setRequiredDate($requiredDate)
    {
        $this->requiredDate = $requiredDate;
        return $this;
    }

    /**
     * Get requiredDate
     *
     * @return date $requiredDate
     */
    public function getRequiredDate()
    {
        return $this->requiredDate;
    }

    /**
     * Set shippedDate
     *
     * @param date $shippedDate
     * @return self
     */
    public function setShippedDate($shippedDate)
    {
        $this->shippedDate = $shippedDate;
        return $this;
    }

    /**
     * Get shippedDate
     *
     * @return date $shippedDate
     */
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Get comments
     *
     * @return string $comments
     */
    public function getComments()
    {
        return $this->comments;
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
}
