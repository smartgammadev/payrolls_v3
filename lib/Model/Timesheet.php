<?php
/**
 * Timesheet
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
 * Timesheet Class Doc Comment
 *
 * @category Class
 * @package  EvoliaV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Timesheet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Timesheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_contract' => 'int',
'id_employee' => 'int',
'work_days' => '\EvoliaV3\Model\WorkDays[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_contract' => 'int32',
'id_employee' => 'int32',
'work_days' => null    ];

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
        'id_contract' => 'idContract',
'id_employee' => 'idEmployee',
'work_days' => 'workDays'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_contract' => 'setIdContract',
'id_employee' => 'setIdEmployee',
'work_days' => 'setWorkDays'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_contract' => 'getIdContract',
'id_employee' => 'getIdEmployee',
'work_days' => 'getWorkDays'    ];

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
        $this->container['id_contract'] = isset($data['id_contract']) ? $data['id_contract'] : null;
        $this->container['id_employee'] = isset($data['id_employee']) ? $data['id_employee'] : null;
        $this->container['work_days'] = isset($data['work_days']) ? $data['work_days'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id_contract'] === null) {
            $invalidProperties[] = "'id_contract' can't be null";
        }
        if ($this->container['id_employee'] === null) {
            $invalidProperties[] = "'id_employee' can't be null";
        }
        if ($this->container['work_days'] === null) {
            $invalidProperties[] = "'work_days' can't be null";
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
     * Gets id_contract
     *
     * @return int
     */
    public function getIdContract()
    {
        return $this->container['id_contract'];
    }

    /**
     * Sets id_contract
     *
     * @param int $id_contract id_contract
     *
     * @return $this
     */
    public function setIdContract($id_contract)
    {
        $this->container['id_contract'] = $id_contract;

        return $this;
    }

    /**
     * Gets id_employee
     *
     * @return int
     */
    public function getIdEmployee()
    {
        return $this->container['id_employee'];
    }

    /**
     * Sets id_employee
     *
     * @param int $id_employee id_employee
     *
     * @return $this
     */
    public function setIdEmployee($id_employee)
    {
        $this->container['id_employee'] = $id_employee;

        return $this;
    }

    /**
     * Gets work_days
     *
     * @return \EvoliaV3\Model\WorkDays[]
     */
    public function getWorkDays()
    {
        return $this->container['work_days'];
    }

    /**
     * Sets work_days
     *
     * @param \EvoliaV3\Model\WorkDays[] $work_days work_days
     *
     * @return $this
     */
    public function setWorkDays($work_days)
    {
        $this->container['work_days'] = $work_days;

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
