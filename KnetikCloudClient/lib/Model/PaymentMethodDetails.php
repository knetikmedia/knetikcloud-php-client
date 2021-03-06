<?php
/**
 * PaymentMethodDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  KnetikCloud
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Knetik Platform API Documentation latest
 *
 * This is the spec for the Knetik API.  Use this in conjunction with the documentation found at https://knetikcloud.com.
 *
 * OpenAPI spec version: latest
 * Contact: support@knetik.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace KnetikCloud\Model;

use \ArrayAccess;

/**
 * PaymentMethodDetails Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethodDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'default' => 'bool',
        'expiration_date' => 'int',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'last4' => 'string',
        'sort' => 'int',
        'unique_key' => 'string',
        'verified' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'default' => null,
        'expiration_date' => 'int64',
        'expiration_month' => 'int32',
        'expiration_year' => 'int32',
        'last4' => null,
        'sort' => 'int32',
        'unique_key' => null,
        'verified' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'default' => 'default',
        'expiration_date' => 'expiration_date',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'last4' => 'last4',
        'sort' => 'sort',
        'unique_key' => 'unique_key',
        'verified' => 'verified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'default' => 'setDefault',
        'expiration_date' => 'setExpirationDate',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'last4' => 'setLast4',
        'sort' => 'setSort',
        'unique_key' => 'setUniqueKey',
        'verified' => 'setVerified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'default' => 'getDefault',
        'expiration_date' => 'getExpirationDate',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'last4' => 'getLast4',
        'sort' => 'getSort',
        'unique_key' => 'getUniqueKey',
        'verified' => 'getVerified'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['expiration_month'] = isset($data['expiration_month']) ? $data['expiration_month'] : null;
        $this->container['expiration_year'] = isset($data['expiration_year']) ? $data['expiration_year'] : null;
        $this->container['last4'] = isset($data['last4']) ? $data['last4'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['unique_key'] = isset($data['unique_key']) ? $data['unique_key'] : null;
        $this->container['verified'] = isset($data['verified']) ? $data['verified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets default
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets expiration_date
     * @return int
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     * @param int $expiration_date The expiration date for the payment method, expressed as seconds since epoch. Typically used for credit card payment methods
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets expiration_month
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     * @param int $expiration_month The expiration month (1 - 12) for the payment method. Typically used for credit card payment methods
     * @return $this
     */
    public function setExpirationMonth($expiration_month)
    {
        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets expiration_year
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     * @param int $expiration_year The expiration year for the payment method. Typically used for credit card payment methods
     * @return $this
     */
    public function setExpirationYear($expiration_year)
    {
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets last4
     * @return string
     */
    public function getLast4()
    {
        return $this->container['last4'];
    }

    /**
     * Sets last4
     * @param string $last4 The last 4 digits of the account number for the payment method. Typically used for credit card payment methods
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->container['last4'] = $last4;

        return $this;
    }

    /**
     * Gets sort
     * @return int
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     * @param int $sort The sort value for the payment method
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets unique_key
     * @return string
     */
    public function getUniqueKey()
    {
        return $this->container['unique_key'];
    }

    /**
     * Sets unique_key
     * @param string $unique_key An optional unique identifier
     * @return $this
     */
    public function setUniqueKey($unique_key)
    {
        $this->container['unique_key'] = $unique_key;

        return $this;
    }

    /**
     * Gets verified
     * @return bool
     */
    public function getVerified()
    {
        return $this->container['verified'];
    }

    /**
     * Sets verified
     * @param bool $verified
     * @return $this
     */
    public function setVerified($verified)
    {
        $this->container['verified'] = $verified;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\KnetikCloud\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\KnetikCloud\ObjectSerializer::sanitizeForSerialization($this));
    }
}


