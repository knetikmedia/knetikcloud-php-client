<?php
/**
 * BroadcastableEvent
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
 * BroadcastableEvent Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BroadcastableEvent implements ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BroadcastableEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client' => 'string',
        'customer' => 'string',
        'do_not_broadcast' => 'bool',
        'section' => 'string',
        'source' => 'object',
        'specifics' => 'string',
        'synchronous' => 'bool',
        'timestamp' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client' => null,
        'customer' => null,
        'do_not_broadcast' => null,
        'section' => null,
        'source' => null,
        'specifics' => null,
        'synchronous' => null,
        'timestamp' => 'int64',
        'type' => null
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
        'client' => 'client',
        'customer' => 'customer',
        'do_not_broadcast' => 'do_not_broadcast',
        'section' => 'section',
        'source' => 'source',
        'specifics' => 'specifics',
        'synchronous' => 'synchronous',
        'timestamp' => 'timestamp',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'client' => 'setClient',
        'customer' => 'setCustomer',
        'do_not_broadcast' => 'setDoNotBroadcast',
        'section' => 'setSection',
        'source' => 'setSource',
        'specifics' => 'setSpecifics',
        'synchronous' => 'setSynchronous',
        'timestamp' => 'setTimestamp',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'client' => 'getClient',
        'customer' => 'getCustomer',
        'do_not_broadcast' => 'getDoNotBroadcast',
        'section' => 'getSection',
        'source' => 'getSource',
        'specifics' => 'getSpecifics',
        'synchronous' => 'getSynchronous',
        'timestamp' => 'getTimestamp',
        'type' => 'getType'
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
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['do_not_broadcast'] = isset($data['do_not_broadcast']) ? $data['do_not_broadcast'] : null;
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['specifics'] = isset($data['specifics']) ? $data['specifics'] : null;
        $this->container['synchronous'] = isset($data['synchronous']) ? $data['synchronous'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets client
     * @return string
     */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
     * Sets client
     * @param string $client
     * @return $this
     */
    public function setClient($client)
    {
        $this->container['client'] = $client;

        return $this;
    }

    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets do_not_broadcast
     * @return bool
     */
    public function getDoNotBroadcast()
    {
        return $this->container['do_not_broadcast'];
    }

    /**
     * Sets do_not_broadcast
     * @param bool $do_not_broadcast
     * @return $this
     */
    public function setDoNotBroadcast($do_not_broadcast)
    {
        $this->container['do_not_broadcast'] = $do_not_broadcast;

        return $this;
    }

    /**
     * Gets section
     * @return string
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     * @param string $section
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;

        return $this;
    }

    /**
     * Gets source
     * @return object
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param object $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets specifics
     * @return string
     */
    public function getSpecifics()
    {
        return $this->container['specifics'];
    }

    /**
     * Sets specifics
     * @param string $specifics
     * @return $this
     */
    public function setSpecifics($specifics)
    {
        $this->container['specifics'] = $specifics;

        return $this;
    }

    /**
     * Gets synchronous
     * @return bool
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     * @param bool $synchronous
     * @return $this
     */
    public function setSynchronous($synchronous)
    {
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets timestamp
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     * @param int $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

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
     * @param string $type The type of the event. Used for polymorphic type recognition and thus must match an expected type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


