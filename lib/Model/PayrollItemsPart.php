<?php
/**
 * PayrollItemsPart
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
 * PayrollItemsPart Class Doc Comment
 *
 * @category Class
 * @package  EvoliaV3
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayrollItemsPart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayrollItemsPart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_ref' => 'int',
'item_title' => 'string',
'item_comment' => 'string',
'amount_paid' => 'double',
'amount_billed' => 'double',
'quantity' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_ref' => 'int32',
'item_title' => null,
'item_comment' => null,
'amount_paid' => 'double',
'amount_billed' => 'double',
'quantity' => 'int32'    ];

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
        'item_ref' => 'itemRef',
'item_title' => 'itemTitle',
'item_comment' => 'itemComment',
'amount_paid' => 'amountPaid',
'amount_billed' => 'amountBilled',
'quantity' => 'quantity'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_ref' => 'setItemRef',
'item_title' => 'setItemTitle',
'item_comment' => 'setItemComment',
'amount_paid' => 'setAmountPaid',
'amount_billed' => 'setAmountBilled',
'quantity' => 'setQuantity'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_ref' => 'getItemRef',
'item_title' => 'getItemTitle',
'item_comment' => 'getItemComment',
'amount_paid' => 'getAmountPaid',
'amount_billed' => 'getAmountBilled',
'quantity' => 'getQuantity'    ];

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
        $this->container['item_ref'] = isset($data['item_ref']) ? $data['item_ref'] : null;
        $this->container['item_title'] = isset($data['item_title']) ? $data['item_title'] : null;
        $this->container['item_comment'] = isset($data['item_comment']) ? $data['item_comment'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['amount_billed'] = isset($data['amount_billed']) ? $data['amount_billed'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['item_ref'] === null) {
            $invalidProperties[] = "'item_ref' can't be null";
        }
        if ($this->container['item_title'] === null) {
            $invalidProperties[] = "'item_title' can't be null";
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
     * Gets item_ref
     *
     * @return int
     */
    public function getItemRef()
    {
        return $this->container['item_ref'];
    }

    /**
     * Sets item_ref
     *
     * @param int $item_ref item_ref
     *
     * @return $this
     */
    public function setItemRef($item_ref)
    {
        $this->container['item_ref'] = $item_ref;

        return $this;
    }

    /**
     * Gets item_title
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->container['item_title'];
    }

    /**
     * Sets item_title
     *
     * @param string $item_title item_title
     *
     * @return $this
     */
    public function setItemTitle($item_title)
    {
        $this->container['item_title'] = $item_title;

        return $this;
    }

    /**
     * Gets item_comment
     *
     * @return string
     */
    public function getItemComment()
    {
        return $this->container['item_comment'];
    }

    /**
     * Sets item_comment
     *
     * @param string $item_comment item_comment
     *
     * @return $this
     */
    public function setItemComment($item_comment)
    {
        $this->container['item_comment'] = $item_comment;

        return $this;
    }

    /**
     * Gets amount_paid
     *
     * @return double
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param double $amount_paid amount_paid
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets amount_billed
     *
     * @return double
     */
    public function getAmountBilled()
    {
        return $this->container['amount_billed'];
    }

    /**
     * Sets amount_billed
     *
     * @param double $amount_billed amount_billed
     *
     * @return $this
     */
    public function setAmountBilled($amount_billed)
    {
        $this->container['amount_billed'] = $amount_billed;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
