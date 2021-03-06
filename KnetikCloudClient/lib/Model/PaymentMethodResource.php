<?php
/**
 * PaymentMethodResource
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
 * PaymentMethodResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethodResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_date' => 'int',
        'default' => 'bool',
        'disabled' => 'bool',
        'expiration_date' => 'int',
        'expiration_month' => 'int',
        'expiration_year' => 'int',
        'id' => 'int',
        'last4' => 'string',
        'name' => 'string',
        'payment_method_type' => '\KnetikCloud\Model\PaymentMethodTypeResource',
        'payment_type' => 'string',
        'sort' => 'int',
        'token' => 'string',
        'unique_key' => 'string',
        'updated_date' => 'int',
        'user_id' => 'int',
        'verified' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_date' => 'int64',
        'default' => null,
        'disabled' => null,
        'expiration_date' => 'int64',
        'expiration_month' => 'int32',
        'expiration_year' => 'int32',
        'id' => 'int64',
        'last4' => null,
        'name' => null,
        'payment_method_type' => null,
        'payment_type' => null,
        'sort' => 'int32',
        'token' => null,
        'unique_key' => null,
        'updated_date' => 'int64',
        'user_id' => 'int32',
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
        'created_date' => 'created_date',
        'default' => 'default',
        'disabled' => 'disabled',
        'expiration_date' => 'expiration_date',
        'expiration_month' => 'expiration_month',
        'expiration_year' => 'expiration_year',
        'id' => 'id',
        'last4' => 'last4',
        'name' => 'name',
        'payment_method_type' => 'payment_method_type',
        'payment_type' => 'payment_type',
        'sort' => 'sort',
        'token' => 'token',
        'unique_key' => 'unique_key',
        'updated_date' => 'updated_date',
        'user_id' => 'user_id',
        'verified' => 'verified'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'created_date' => 'setCreatedDate',
        'default' => 'setDefault',
        'disabled' => 'setDisabled',
        'expiration_date' => 'setExpirationDate',
        'expiration_month' => 'setExpirationMonth',
        'expiration_year' => 'setExpirationYear',
        'id' => 'setId',
        'last4' => 'setLast4',
        'name' => 'setName',
        'payment_method_type' => 'setPaymentMethodType',
        'payment_type' => 'setPaymentType',
        'sort' => 'setSort',
        'token' => 'setToken',
        'unique_key' => 'setUniqueKey',
        'updated_date' => 'setUpdatedDate',
        'user_id' => 'setUserId',
        'verified' => 'setVerified'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'created_date' => 'getCreatedDate',
        'default' => 'getDefault',
        'disabled' => 'getDisabled',
        'expiration_date' => 'getExpirationDate',
        'expiration_month' => 'getExpirationMonth',
        'expiration_year' => 'getExpirationYear',
        'id' => 'getId',
        'last4' => 'getLast4',
        'name' => 'getName',
        'payment_method_type' => 'getPaymentMethodType',
        'payment_type' => 'getPaymentType',
        'sort' => 'getSort',
        'token' => 'getToken',
        'unique_key' => 'getUniqueKey',
        'updated_date' => 'getUpdatedDate',
        'user_id' => 'getUserId',
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

    const PAYMENT_TYPE_CARD = 'card';
    const PAYMENT_TYPE_BANK_ACCOUNT = 'bank_account';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_CARD,
            self::PAYMENT_TYPE_BANK_ACCOUNT,
        ];
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
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['expiration_month'] = isset($data['expiration_month']) ? $data['expiration_month'] : null;
        $this->container['expiration_year'] = isset($data['expiration_year']) ? $data['expiration_year'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last4'] = isset($data['last4']) ? $data['last4'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['payment_method_type'] = isset($data['payment_method_type']) ? $data['payment_method_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['unique_key'] = isset($data['unique_key']) ? $data['unique_key'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['payment_method_type'] === null) {
            $invalid_properties[] = "'payment_method_type' can't be null";
        }
        $allowed_values = $this->getPaymentTypeAllowableValues();
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['payment_method_type'] === null) {
            return false;
        }
        $allowed_values = $this->getPaymentTypeAllowableValues();
        if (!in_array($this->container['payment_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets created_date
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param int $created_date The date/time this resource was created in seconds since unix epoch
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
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
     * Gets disabled
     * @return bool
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     * @param bool $disabled Whether this payment method is disabled or not
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique ID of the resource
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The user friendly name of the resource
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets payment_method_type
     * @return \KnetikCloud\Model\PaymentMethodTypeResource
     */
    public function getPaymentMethodType()
    {
        return $this->container['payment_method_type'];
    }

    /**
     * Sets payment_method_type
     * @param \KnetikCloud\Model\PaymentMethodTypeResource $payment_method_type The type of payment method. Must be a pre-existing value
     * @return $this
     */
    public function setPaymentMethodType($payment_method_type)
    {
        $this->container['payment_method_type'] = $payment_method_type;

        return $this;
    }

    /**
     * Gets payment_type
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     * @param string $payment_type The generic payment type. Default is card
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowed_values = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

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
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token The unique token for the payment method
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * Gets updated_date
     * @return int
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     * @param int $updated_date The date/time this resource was last updated in seconds since unix epoch
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The user's id. If null, indicates a shared payment method that any user can use (i.e., 'wallet')
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


