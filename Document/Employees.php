<?php
namespace Hgtan\Bundle\HelloDoctrineMongoDBBundle\Document;

class Employees
{

    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $employeeNumber
     */
    protected $employeeNumber;

    /**
     * @var string $lastName
     */
    protected $lastName;

    /**
     * @var string $firstName
     */
    protected $firstName;

    /**
     * @var string $extension
     */
    protected $extension;

    /**
     * @var string $email
     */
    protected $email;

    /**
     * @var string $officeCode
     */
    protected $officeCode;

    /**
     * @var int $reportsTo
     */
    protected $reportsTo;

    /**
     * @var string $jobTitle
     */
    protected $jobTitle;


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
     * Set employeeNumber
     *
     * @param int $employeeNumber
     * @return self
     */
    public function setEmployeeNumber($employeeNumber)
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }

    /**
     * Get employeeNumber
     *
     * @return int $employeeNumber
     */
    public function getEmployeeNumber()
    {
        return $this->employeeNumber;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Get extension
     *
     * @return string $extension
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set officeCode
     *
     * @param string $officeCode
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
     * @return string $officeCode
     */
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * Set reportsTo
     *
     * @param int $reportsTo
     * @return self
     */
    public function setReportsTo($reportsTo)
    {
        $this->reportsTo = $reportsTo;
        return $this;
    }

    /**
     * Get reportsTo
     *
     * @return int $reportsTo
     */
    public function getReportsTo()
    {
        return $this->reportsTo;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return self
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string $jobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }
}
