<?php
/**
 * ChatThreadResource
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
 * ChatThreadResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ChatThreadResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChatThreadResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active_users' => 'int',
        'count' => 'int',
        'created_date' => 'int',
        'id' => 'string',
        'recipient_id' => 'string',
        'recipient_type' => 'string',
        'subject' => 'string',
        'updated_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active_users' => 'int32',
        'count' => 'int32',
        'created_date' => 'int64',
        'id' => null,
        'recipient_id' => null,
        'recipient_type' => null,
        'subject' => null,
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
        'active_users' => 'active_users',
        'count' => 'count',
        'created_date' => 'created_date',
        'id' => 'id',
        'recipient_id' => 'recipient_id',
        'recipient_type' => 'recipient_type',
        'subject' => 'subject',
        'updated_date' => 'updated_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'active_users' => 'setActiveUsers',
        'count' => 'setCount',
        'created_date' => 'setCreatedDate',
        'id' => 'setId',
        'recipient_id' => 'setRecipientId',
        'recipient_type' => 'setRecipientType',
        'subject' => 'setSubject',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'active_users' => 'getActiveUsers',
        'count' => 'getCount',
        'created_date' => 'getCreatedDate',
        'id' => 'getId',
        'recipient_id' => 'getRecipientId',
        'recipient_type' => 'getRecipientType',
        'subject' => 'getSubject',
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

    const RECIPIENT_TYPE_USER = 'user';
    const RECIPIENT_TYPE_TOPIC = 'topic';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRecipientTypeAllowableValues()
    {
        return [
            self::RECIPIENT_TYPE_USER,
            self::RECIPIENT_TYPE_TOPIC,
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
        $this->container['active_users'] = isset($data['active_users']) ? $data['active_users'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['recipient_id'] = isset($data['recipient_id']) ? $data['recipient_id'] : null;
        $this->container['recipient_type'] = isset($data['recipient_type']) ? $data['recipient_type'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
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

        if ($this->container['recipient_id'] === null) {
            $invalid_properties[] = "'recipient_id' can't be null";
        }
        if ($this->container['recipient_type'] === null) {
            $invalid_properties[] = "'recipient_type' can't be null";
        }
        $allowed_values = $this->getRecipientTypeAllowableValues();
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'recipient_type', must be one of '%s'",
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

        if ($this->container['recipient_id'] === null) {
            return false;
        }
        if ($this->container['recipient_type'] === null) {
            return false;
        }
        $allowed_values = $this->getRecipientTypeAllowableValues();
        if (!in_array($this->container['recipient_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets active_users
     * @return int
     */
    public function getActiveUsers()
    {
        return $this->container['active_users'];
    }

    /**
     * Sets active_users
     * @param int $active_users The number of active users in the thread
     * @return $this
     */
    public function setActiveUsers($active_users)
    {
        $this->container['active_users'] = $active_users;

        return $this;
    }

    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     * @param int $count The number of messages in the thread
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

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
     * @param int $created_date The date the thread was created
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The id for this thread
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets recipient_id
     * @return string
     */
    public function getRecipientId()
    {
        return $this->container['recipient_id'];
    }

    /**
     * Sets recipient_id
     * @param string $recipient_id The id of the recipient
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        $this->container['recipient_id'] = $recipient_id;

        return $this;
    }

    /**
     * Gets recipient_type
     * @return string
     */
    public function getRecipientType()
    {
        return $this->container['recipient_type'];
    }

    /**
     * Sets recipient_type
     * @param string $recipient_type The recipient type of the thread
     * @return $this
     */
    public function setRecipientType($recipient_type)
    {
        $allowed_values = $this->getRecipientTypeAllowableValues();
        if (!in_array($recipient_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recipient_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['recipient_type'] = $recipient_type;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject The subject of the thread
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
     * @param int $updated_date The date the thread was updated
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


