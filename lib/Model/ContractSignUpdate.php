<?php
/**
 * ContractSignUpdate
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
 * OpenAPI spec version: v3
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
 * ContractSignUpdate Class Doc Comment
 *
 * @category Class
 * @package  EvoliaV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContractSignUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContractSignUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_contract_ord' => 'int',
'id_person' => 'string',
'sign_date_customer' => '\DateTime',
'sign_date_candidate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_contract_ord' => 'int32',
'id_person' => null,
'sign_date_customer' => 'date-time',
'sign_date_candidate' => 'date-time'    ];

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
        'id_contract_ord' => 'idContractOrd',
'id_person' => 'idPerson',
'sign_date_customer' => 'signDateCustomer',
'sign_date_candidate' => 'signDateCandidate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_contract_ord' => 'setIdContractOrd',
'id_person' => 'setIdPerson',
'sign_date_customer' => 'setSignDateCustomer',
'sign_date_candidate' => 'setSignDateCandidate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_contract_ord' => 'getIdContractOrd',
'id_person' => 'getIdPerson',
'sign_date_customer' => 'getSignDateCustomer',
'sign_date_candidate' => 'getSignDateCandidate'    ];

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
        $this->container['id_contract_ord'] = isset($data['id_contract_ord']) ? $data['id_contract_ord'] : null;
        $this->container['id_person'] = isset($data['id_person']) ? $data['id_person'] : null;
        $this->container['sign_date_customer'] = isset($data['sign_date_customer']) ? $data['sign_date_customer'] : null;
        $this->container['sign_date_candidate'] = isset($data['sign_date_candidate']) ? $data['sign_date_candidate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_contract_ord'] === null) {
            $invalidProperties[] = "'id_contract_ord' can't be null";
        }
        if ($this->container['id_person'] === null) {
            $invalidProperties[] = "'id_person' can't be null";
        }
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
     * Gets id_contract_ord
     *
     * @return int
     */
    public function getIdContractOrd()
    {
        return $this->container['id_contract_ord'];
    }

    /**
     * Sets id_contract_ord
     *
     * @param int $id_contract_ord id_contract_ord
     *
     * @return $this
     */
    public function setIdContractOrd($id_contract_ord)
    {
        $this->container['id_contract_ord'] = $id_contract_ord;

        return $this;
    }

    /**
     * Gets id_person
     *
     * @return string
     */
    public function getIdPerson()
    {
        return $this->container['id_person'];
    }

    /**
     * Sets id_person
     *
     * @param string $id_person id_person
     *
     * @return $this
     */
    public function setIdPerson($id_person)
    {
        $this->container['id_person'] = $id_person;

        return $this;
    }

    /**
     * Gets sign_date_customer
     *
     * @return \DateTime
     */
    public function getSignDateCustomer()
    {
        return $this->container['sign_date_customer'];
    }

    /**
     * Sets sign_date_customer
     *
     * @param \DateTime $sign_date_customer sign_date_customer
     *
     * @return $this
     */
    public function setSignDateCustomer($sign_date_customer)
    {
        $this->container['sign_date_customer'] = $sign_date_customer;

        return $this;
    }

    /**
     * Gets sign_date_candidate
     *
     * @return \DateTime
     */
    public function getSignDateCandidate()
    {
        return $this->container['sign_date_candidate'];
    }

    /**
     * Sets sign_date_candidate
     *
     * @param \DateTime $sign_date_candidate sign_date_candidate
     *
     * @return $this
     */
    public function setSignDateCandidate($sign_date_candidate)
    {
        $this->container['sign_date_candidate'] = $sign_date_candidate;

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
