<?php
/**
 * WalletTransactionResource
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
 * WalletTransactionResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WalletTransactionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WalletTransactionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'balance' => 'double',
        'create_date' => 'int',
        'currency_code' => 'string',
        'details' => 'string',
        'id' => 'int',
        'invoice_id' => 'int',
        'is_refunded' => 'bool',
        'response' => 'string',
        'source' => 'string',
        'successful' => 'bool',
        'transaction_id' => 'string',
        'type' => 'string',
        'type_hint' => 'string',
        'user' => '\KnetikCloud\Model\SimpleUserResource',
        'value' => 'double',
        'wallet_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'balance' => 'double',
        'create_date' => 'int64',
        'currency_code' => null,
        'details' => null,
        'id' => 'int32',
        'invoice_id' => 'int32',
        'is_refunded' => null,
        'response' => null,
        'source' => null,
        'successful' => null,
        'transaction_id' => null,
        'type' => null,
        'type_hint' => null,
        'user' => null,
        'value' => 'double',
        'wallet_id' => 'int32'
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
        'balance' => 'balance',
        'create_date' => 'create_date',
        'currency_code' => 'currency_code',
        'details' => 'details',
        'id' => 'id',
        'invoice_id' => 'invoice_id',
        'is_refunded' => 'is_refunded',
        'response' => 'response',
        'source' => 'source',
        'successful' => 'successful',
        'transaction_id' => 'transaction_id',
        'type' => 'type',
        'type_hint' => 'type_hint',
        'user' => 'user',
        'value' => 'value',
        'wallet_id' => 'wallet_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'create_date' => 'setCreateDate',
        'currency_code' => 'setCurrencyCode',
        'details' => 'setDetails',
        'id' => 'setId',
        'invoice_id' => 'setInvoiceId',
        'is_refunded' => 'setIsRefunded',
        'response' => 'setResponse',
        'source' => 'setSource',
        'successful' => 'setSuccessful',
        'transaction_id' => 'setTransactionId',
        'type' => 'setType',
        'type_hint' => 'setTypeHint',
        'user' => 'setUser',
        'value' => 'setValue',
        'wallet_id' => 'setWalletId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'create_date' => 'getCreateDate',
        'currency_code' => 'getCurrencyCode',
        'details' => 'getDetails',
        'id' => 'getId',
        'invoice_id' => 'getInvoiceId',
        'is_refunded' => 'getIsRefunded',
        'response' => 'getResponse',
        'source' => 'getSource',
        'successful' => 'getSuccessful',
        'transaction_id' => 'getTransactionId',
        'type' => 'getType',
        'type_hint' => 'getTypeHint',
        'user' => 'getUser',
        'value' => 'getValue',
        'wallet_id' => 'getWalletId'
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

    const SOURCE_DIGITAL = 'digital';
    const SOURCE_PHYSICAL = 'physical';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_DIGITAL,
            self::SOURCE_PHYSICAL,
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
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['is_refunded'] = isset($data['is_refunded']) ? $data['is_refunded'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['type_hint'] = isset($data['type_hint']) ? $data['type_hint'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['wallet_id'] = isset($data['wallet_id']) ? $data['wallet_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSourceAllowableValues();
        if (!in_array($this->container['source'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
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

        $allowed_values = $this->getSourceAllowableValues();
        if (!in_array($this->container['source'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets balance
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param double $balance The new balance of the wallet after the transaction
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets create_date
     * @return int
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     * @param int $create_date The unix timestamp in seconds of the transaction
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     * @param string $currency_code The code of the currency for the transaction
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details The specific details of the transaction, such as a message from the admin that created it
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
     * @param int $id The id of the transaction
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_id
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     * @param int $invoice_id The id of the invoice that spawned the transaction, if any
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets is_refunded
     * @return bool
     */
    public function getIsRefunded()
    {
        return $this->container['is_refunded'];
    }

    /**
     * Sets is_refunded
     * @param bool $is_refunded Whether the transaction has been refunded
     * @return $this
     */
    public function setIsRefunded($is_refunded)
    {
        $this->container['is_refunded'] = $is_refunded;

        return $this;
    }

    /**
     * Gets response
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     * @param string $response The response
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source The root source of the transaction
     * @return $this
     */
    public function setSource($source)
    {
        $allowed_values = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets successful
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     * @param bool $successful If the transaction was successful
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param string $transaction_id The payment gateway (external) transaction ID
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The general type of the transaction
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets type_hint
     * @return string
     */
    public function getTypeHint()
    {
        return $this->container['type_hint'];
    }

    /**
     * Sets type_hint
     * @param string $type_hint The table name of the subclass
     * @return $this
     */
    public function setTypeHint($type_hint)
    {
        $this->container['type_hint'] = $type_hint;

        return $this;
    }

    /**
     * Gets user
     * @return \KnetikCloud\Model\SimpleUserResource
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \KnetikCloud\Model\SimpleUserResource $user The owner of the wallet
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets value
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param double $value The amount of the transaction, positive if a gain, negative if an expenditure
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets wallet_id
     * @return int
     */
    public function getWalletId()
    {
        return $this->container['wallet_id'];
    }

    /**
     * Sets wallet_id
     * @param int $wallet_id The id of the wallet this transaction affected
     * @return $this
     */
    public function setWalletId($wallet_id)
    {
        $this->container['wallet_id'] = $wallet_id;

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


