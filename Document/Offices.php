<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Offices
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $officeCode
     */
    protected $officeCode;

    /**
     * @var string $city
     */
    protected $city;

    /**
     * @var string $phone
     */
    protected $phone;

    /**
     * @var string $addressLine1
     */
    protected $addressLine1;

    /**
     * @var string $addressLine2
     */
    protected $addressLine2;

    /**
     * @var string $state
     */
    protected $state;

    /**
     * @var int $country
     */
    protected $country;

    /**
     * @var string $postalCode
     */
    protected $postalCode;

    /**
     * @var string $territory
     */
    protected $territory;


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
     * Set officeCode
     *
     * @param int $officeCode
     * @return self
     */
    public function setOfficeCode($officeCode)
    {
        $this->officeCode = $officeCode;
        return $this;
    }

    /**
     * Get officeCode
     *
     * @return int $officeCode
     */
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Get city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return self
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string $addressLine1
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return self
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string $addressLine2
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string $state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param int $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return int $country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string $postalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set territory
     *
     * @param string $territory
     * @return self
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;
        return $this;
    }

    /**
     * Get territory
     *
     * @return string $territory
     */
    public function getTerritory()
    {
        return $this->territory;
    }
}
