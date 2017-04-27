<?php
/**
 * PaymentAuthorizationResource
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
 * This is the spec for the Knetik API.  Use this in conjunction with the documentation found at https://knetikcloud.com
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
 * PaymentAuthorizationResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PaymentAuthorizationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PaymentAuthorizationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'captured' => 'bool',
        'created' => 'int',
        'details' => 'object',
        'id' => 'int',
        'invoice' => 'int',
        'payment_type' => '\KnetikCloud\Model\SimpleReferenceResourceInt_'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'captured' => 'captured',
        'created' => 'created',
        'details' => 'details',
        'id' => 'id',
        'invoice' => 'invoice',
        'payment_type' => 'payment_type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'captured' => 'setCaptured',
        'created' => 'setCreated',
        'details' => 'setDetails',
        'id' => 'setId',
        'invoice' => 'setInvoice',
        'payment_type' => 'setPaymentType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'captured' => 'getCaptured',
        'created' => 'getCreated',
        'details' => 'getDetails',
        'id' => 'getId',
        'invoice' => 'getInvoice',
        'payment_type' => 'getPaymentType'
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
        $this->container['captured'] = isset($data['captured']) ? $data['captured'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['payment_type'] === null) {
            $invalid_properties[] = "'payment_type' can't be null";
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

        if ($this->container['payment_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets captured
     * @return bool
     */
    public function getCaptured()
    {
        return $this->container['captured'];
    }

    /**
     * Sets captured
     * @param bool $captured Whether this authorization has been captured
     * @return $this
     */
    public function setCaptured($captured)
    {
        $this->container['captured'] = $captured;

        return $this;
    }

    /**
     * Gets created
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param int $created The date this authorization was received, unix timestamp in seconds
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets details
     * @return object
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param object $details The details for this authorization. Format dependent on payment provider
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
     * @param int $id The id of the authorization
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice
     * @return int
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param int $invoice The invoice this authorization is intended to pay
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets payment_type
     * @return \KnetikCloud\Model\SimpleReferenceResourceInt_
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     * @param \KnetikCloud\Model\SimpleReferenceResourceInt_ $payment_type The payment type (which provider) this payment is through
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

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


