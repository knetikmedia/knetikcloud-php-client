<?php
/**
 * VideoRelationshipResource
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
 * VideoRelationshipResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VideoRelationshipResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VideoRelationshipResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => '\KnetikCloud\Model\SimpleReferenceResourceLong_',
        'id' => 'int',
        'relationship_details' => 'string',
        'to' => '\KnetikCloud\Model\SimpleReferenceResourceLong_'
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
        'from' => 'from',
        'id' => 'id',
        'relationship_details' => 'relationship_details',
        'to' => 'to'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'id' => 'setId',
        'relationship_details' => 'setRelationshipDetails',
        'to' => 'setTo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'id' => 'getId',
        'relationship_details' => 'getRelationshipDetails',
        'to' => 'getTo'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['relationship_details'] = isset($data['relationship_details']) ? $data['relationship_details'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['relationship_details'] === null) {
            $invalid_properties[] = "'relationship_details' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalid_properties[] = "'to' can't be null";
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

        if ($this->container['relationship_details'] === null) {
            return false;
        }
        if ($this->container['to'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets from
     * @return \KnetikCloud\Model\SimpleReferenceResourceLong_
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param \KnetikCloud\Model\SimpleReferenceResourceLong_ $from The owner of the relationship
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

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
     * @param int $id The id of the relationship
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets relationship_details
     * @return string
     */
    public function getRelationshipDetails()
    {
        return $this->container['relationship_details'];
    }

    /**
     * Sets relationship_details
     * @param string $relationship_details Details about the relationship such as type or other information. Max length 10 characters
     * @return $this
     */
    public function setRelationshipDetails($relationship_details)
    {
        $this->container['relationship_details'] = $relationship_details;

        return $this;
    }

    /**
     * Gets to
     * @return \KnetikCloud\Model\SimpleReferenceResourceLong_
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param \KnetikCloud\Model\SimpleReferenceResourceLong_ $to The target of the relationship.
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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


