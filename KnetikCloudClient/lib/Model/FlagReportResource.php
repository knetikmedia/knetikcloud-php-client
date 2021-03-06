<?php
/**
 * FlagReportResource
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
 * FlagReportResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FlagReportResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FlagReportResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
        'context_id' => 'string',
        'created_date' => 'int',
        'id' => 'int',
        'reason' => 'string',
        'resolution' => 'string',
        'resolved' => 'int',
        'updated_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
        'context_id' => null,
        'created_date' => 'int64',
        'id' => 'int64',
        'reason' => null,
        'resolution' => null,
        'resolved' => 'int64',
        'updated_date' => 'int64'
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
        'context' => 'context',
        'context_id' => 'context_id',
        'created_date' => 'created_date',
        'id' => 'id',
        'reason' => 'reason',
        'resolution' => 'resolution',
        'resolved' => 'resolved',
        'updated_date' => 'updated_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'context_id' => 'setContextId',
        'created_date' => 'setCreatedDate',
        'id' => 'setId',
        'reason' => 'setReason',
        'resolution' => 'setResolution',
        'resolved' => 'setResolved',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'context_id' => 'getContextId',
        'created_date' => 'getCreatedDate',
        'id' => 'getId',
        'reason' => 'getReason',
        'resolution' => 'getResolution',
        'resolved' => 'getResolved',
        'updated_date' => 'getUpdatedDate'
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

    const RESOLUTION_BANNED = 'banned';
    const RESOLUTION_IGNORED = 'ignored';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getResolutionAllowableValues()
    {
        return [
            self::RESOLUTION_BANNED,
            self::RESOLUTION_IGNORED,
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['context_id'] = isset($data['context_id']) ? $data['context_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['resolution'] = isset($data['resolution']) ? $data['resolution'] : null;
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['resolution'] === null) {
            $invalid_properties[] = "'resolution' can't be null";
        }
        $allowed_values = $this->getResolutionAllowableValues();
        if (!in_array($this->container['resolution'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'resolution', must be one of '%s'",
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

        if ($this->container['resolution'] === null) {
            return false;
        }
        $allowed_values = $this->getResolutionAllowableValues();
        if (!in_array($this->container['resolution'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets context
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     * @param string $context The context of that resource
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets context_id
     * @return string
     */
    public function getContextId()
    {
        return $this->container['context_id'];
    }

    /**
     * Sets context_id
     * @param string $context_id The context ID of that resource
     * @return $this
     */
    public function setContextId($context_id)
    {
        $this->container['context_id'] = $context_id;

        return $this;
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
     * @param int $created_date The date/time this resource was created in seconds since epoch
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

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
     * @param int $id The unique ID for that resource
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason of that resource required only in case of active resolution
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets resolution
     * @return string
     */
    public function getResolution()
    {
        return $this->container['resolution'];
    }

    /**
     * Sets resolution
     * @param string $resolution The resolution of that resource
     * @return $this
     */
    public function setResolution($resolution)
    {
        $allowed_values = $this->getResolutionAllowableValues();
        if (!in_array($resolution, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resolution', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['resolution'] = $resolution;

        return $this;
    }

    /**
     * Gets resolved
     * @return int
     */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
     * Sets resolved
     * @param int $resolved The date/time this report was resolved in seconds since epoch. Null if not resolved yet
     * @return $this
     */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;

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
     * @param int $updated_date The date/time this resource was last updated in seconds since epoch
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

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


