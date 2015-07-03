<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Productlines
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $productLine
     */
    protected $productLine;

    /**
     * @var string $textDescription
     */
    protected $textDescription;

    /**
     * @var string $htmlDescription
     */
    protected $htmlDescription;

    /**
     * @var file $image
     */
    protected $image;


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
     * Set productLine
     *
     * @param int $productLine
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
     * @return int $productLine
     */
    public function getProductLine()
    {
        return $this->productLine;
    }

    /**
     * Set textDescription
     *
     * @param string $textDescription
     * @return self
     */
    public function setTextDescription($textDescription)
    {
        $this->textDescription = $textDescription;
        return $this;
    }

    /**
     * Get textDescription
     *
     * @return string $textDescription
     */
    public function getTextDescription()
    {
        return $this->textDescription;
    }

    /**
     * Set htmlDescription
     *
     * @param string $htmlDescription
     * @return self
     */
    public function setHtmlDescription($htmlDescription)
    {
        $this->htmlDescription = $htmlDescription;
        return $this;
    }

    /**
     * Get htmlDescription
     *
     * @return string $htmlDescription
     */
    public function getHtmlDescription()
    {
        return $this->htmlDescription;
    }

    /**
     * Set image
     *
     * @param file $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return file $image
     */
    public function getImage()
    {
        return $this->image;
    }
}
