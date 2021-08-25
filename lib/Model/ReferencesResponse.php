<?php
/**
 * ReferencesResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  EvoliaV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EvoliaApi
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EvoliaV3\Model;

use \ArrayAccess;
use \EvoliaV3\ObjectSerializer;

/**
 * ReferencesResponse Class Doc Comment
 *
 * @category Class
 * @package  EvoliaV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReferencesResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReferencesResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'book_keeping_variables' => '\EvoliaV3\Model\ReferenceItem[]',
'payroll_items' => '\EvoliaV3\Model\ReferenceItem[]',
'countries' => '\EvoliaV3\Model\ReferenceItem[]',
'billing_terms' => '\EvoliaV3\Model\ReferenceItem[]',
'employee_statuses' => '\EvoliaV3\Model\ReferenceItem[]',
'nationalities' => '\EvoliaV3\Model\ReferenceItem[]',
'jobs' => '\EvoliaV3\Model\ReferenceItem[]',
'legal_reasons' => '\EvoliaV3\Model\ReferenceItem[]',
'vat_rates' => '\EvoliaV3\Model\ReferenceItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'book_keeping_variables' => null,
'payroll_items' => null,
'countries' => null,
'billing_terms' => null,
'employee_statuses' => null,
'nationalities' => null,
'jobs' => null,
'legal_reasons' => null,
'vat_rates' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'book_keeping_variables' => 'bookKeepingVariables',
'payroll_items' => 'payrollItems',
'countries' => 'countries',
'billing_terms' => 'billingTerms',
'employee_statuses' => 'employeeStatuses',
'nationalities' => 'nationalities',
'jobs' => 'jobs',
'legal_reasons' => 'legalReasons',
'vat_rates' => 'vatRates'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'book_keeping_variables' => 'setBookKeepingVariables',
'payroll_items' => 'setPayrollItems',
'countries' => 'setCountries',
'billing_terms' => 'setBillingTerms',
'employee_statuses' => 'setEmployeeStatuses',
'nationalities' => 'setNationalities',
'jobs' => 'setJobs',
'legal_reasons' => 'setLegalReasons',
'vat_rates' => 'setVatRates'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'book_keeping_variables' => 'getBookKeepingVariables',
'payroll_items' => 'getPayrollItems',
'countries' => 'getCountries',
'billing_terms' => 'getBillingTerms',
'employee_statuses' => 'getEmployeeStatuses',
'nationalities' => 'getNationalities',
'jobs' => 'getJobs',
'legal_reasons' => 'getLegalReasons',
'vat_rates' => 'getVatRates'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['book_keeping_variables'] = isset($data['book_keeping_variables']) ? $data['book_keeping_variables'] : null;
        $this->container['payroll_items'] = isset($data['payroll_items']) ? $data['payroll_items'] : null;
        $this->container['countries'] = isset($data['countries']) ? $data['countries'] : null;
        $this->container['billing_terms'] = isset($data['billing_terms']) ? $data['billing_terms'] : null;
        $this->container['employee_statuses'] = isset($data['employee_statuses']) ? $data['employee_statuses'] : null;
        $this->container['nationalities'] = isset($data['nationalities']) ? $data['nationalities'] : null;
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['legal_reasons'] = isset($data['legal_reasons']) ? $data['legal_reasons'] : null;
        $this->container['vat_rates'] = isset($data['vat_rates']) ? $data['vat_rates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets book_keeping_variables
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getBookKeepingVariables()
    {
        return $this->container['book_keeping_variables'];
    }

    /**
     * Sets book_keeping_variables
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $book_keeping_variables book_keeping_variables
     *
     * @return $this
     */
    public function setBookKeepingVariables($book_keeping_variables)
    {
        $this->container['book_keeping_variables'] = $book_keeping_variables;

        return $this;
    }

    /**
     * Gets payroll_items
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getPayrollItems()
    {
        return $this->container['payroll_items'];
    }

    /**
     * Sets payroll_items
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $payroll_items payroll_items
     *
     * @return $this
     */
    public function setPayrollItems($payroll_items)
    {
        $this->container['payroll_items'] = $payroll_items;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $countries countries
     *
     * @return $this
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets billing_terms
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getBillingTerms()
    {
        return $this->container['billing_terms'];
    }

    /**
     * Sets billing_terms
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $billing_terms billing_terms
     *
     * @return $this
     */
    public function setBillingTerms($billing_terms)
    {
        $this->container['billing_terms'] = $billing_terms;

        return $this;
    }

    /**
     * Gets employee_statuses
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getEmployeeStatuses()
    {
        return $this->container['employee_statuses'];
    }

    /**
     * Sets employee_statuses
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $employee_statuses employee_statuses
     *
     * @return $this
     */
    public function setEmployeeStatuses($employee_statuses)
    {
        $this->container['employee_statuses'] = $employee_statuses;

        return $this;
    }

    /**
     * Gets nationalities
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getNationalities()
    {
        return $this->container['nationalities'];
    }

    /**
     * Sets nationalities
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $nationalities nationalities
     *
     * @return $this
     */
    public function setNationalities($nationalities)
    {
        $this->container['nationalities'] = $nationalities;

        return $this;
    }

    /**
     * Gets jobs
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
     * Sets jobs
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $jobs jobs
     *
     * @return $this
     */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;

        return $this;
    }

    /**
     * Gets legal_reasons
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getLegalReasons()
    {
        return $this->container['legal_reasons'];
    }

    /**
     * Sets legal_reasons
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $legal_reasons legal_reasons
     *
     * @return $this
     */
    public function setLegalReasons($legal_reasons)
    {
        $this->container['legal_reasons'] = $legal_reasons;

        return $this;
    }

    /**
     * Gets vat_rates
     *
     * @return \EvoliaV3\Model\ReferenceItem[]
     */
    public function getVatRates()
    {
        return $this->container['vat_rates'];
    }

    /**
     * Sets vat_rates
     *
     * @param \EvoliaV3\Model\ReferenceItem[] $vat_rates vat_rates
     *
     * @return $this
     */
    public function setVatRates($vat_rates)
    {
        $this->container['vat_rates'] = $vat_rates;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
