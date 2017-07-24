<?php
/**
 * UserLevelingResource
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
 * UserLevelingResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserLevelingResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserLevelingResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_tier_name' => 'string',
        'last_tier_progress' => 'int',
        'level_name' => 'string',
        'next_tier_name' => 'string',
        'next_tier_progress' => 'int',
        'progress' => 'int',
        'tier_names' => 'string[]',
        'user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_tier_name' => null,
        'last_tier_progress' => 'int32',
        'level_name' => null,
        'next_tier_name' => null,
        'next_tier_progress' => 'int32',
        'progress' => 'int32',
        'tier_names' => null,
        'user_id' => 'int32'
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
        'last_tier_name' => 'last_tier_name',
        'last_tier_progress' => 'last_tier_progress',
        'level_name' => 'level_name',
        'next_tier_name' => 'next_tier_name',
        'next_tier_progress' => 'next_tier_progress',
        'progress' => 'progress',
        'tier_names' => 'tier_names',
        'user_id' => 'user_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'last_tier_name' => 'setLastTierName',
        'last_tier_progress' => 'setLastTierProgress',
        'level_name' => 'setLevelName',
        'next_tier_name' => 'setNextTierName',
        'next_tier_progress' => 'setNextTierProgress',
        'progress' => 'setProgress',
        'tier_names' => 'setTierNames',
        'user_id' => 'setUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'last_tier_name' => 'getLastTierName',
        'last_tier_progress' => 'getLastTierProgress',
        'level_name' => 'getLevelName',
        'next_tier_name' => 'getNextTierName',
        'next_tier_progress' => 'getNextTierProgress',
        'progress' => 'getProgress',
        'tier_names' => 'getTierNames',
        'user_id' => 'getUserId'
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
        $this->container['last_tier_name'] = isset($data['last_tier_name']) ? $data['last_tier_name'] : null;
        $this->container['last_tier_progress'] = isset($data['last_tier_progress']) ? $data['last_tier_progress'] : null;
        $this->container['level_name'] = isset($data['level_name']) ? $data['level_name'] : null;
        $this->container['next_tier_name'] = isset($data['next_tier_name']) ? $data['next_tier_name'] : null;
        $this->container['next_tier_progress'] = isset($data['next_tier_progress']) ? $data['next_tier_progress'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['tier_names'] = isset($data['tier_names']) ? $data['tier_names'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['last_tier_name'] === null) {
            $invalid_properties[] = "'last_tier_name' can't be null";
        }
        if ($this->container['last_tier_progress'] === null) {
            $invalid_properties[] = "'last_tier_progress' can't be null";
        }
        if ($this->container['level_name'] === null) {
            $invalid_properties[] = "'level_name' can't be null";
        }
        if ($this->container['next_tier_name'] === null) {
            $invalid_properties[] = "'next_tier_name' can't be null";
        }
        if ($this->container['next_tier_progress'] === null) {
            $invalid_properties[] = "'next_tier_progress' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalid_properties[] = "'progress' can't be null";
        }
        if ($this->container['tier_names'] === null) {
            $invalid_properties[] = "'tier_names' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
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

        if ($this->container['last_tier_name'] === null) {
            return false;
        }
        if ($this->container['last_tier_progress'] === null) {
            return false;
        }
        if ($this->container['level_name'] === null) {
            return false;
        }
        if ($this->container['next_tier_name'] === null) {
            return false;
        }
        if ($this->container['next_tier_progress'] === null) {
            return false;
        }
        if ($this->container['progress'] === null) {
            return false;
        }
        if ($this->container['tier_names'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets last_tier_name
     * @return string
     */
    public function getLastTierName()
    {
        return $this->container['last_tier_name'];
    }

    /**
     * Sets last_tier_name
     * @param string $last_tier_name The name of the last tier the user has qualified for
     * @return $this
     */
    public function setLastTierName($last_tier_name)
    {
        $this->container['last_tier_name'] = $last_tier_name;

        return $this;
    }

    /**
     * Gets last_tier_progress
     * @return int
     */
    public function getLastTierProgress()
    {
        return $this->container['last_tier_progress'];
    }

    /**
     * Sets last_tier_progress
     * @param int $last_tier_progress The progress level of the last tier the user has qualified for
     * @return $this
     */
    public function setLastTierProgress($last_tier_progress)
    {
        $this->container['last_tier_progress'] = $last_tier_progress;

        return $this;
    }

    /**
     * Gets level_name
     * @return string
     */
    public function getLevelName()
    {
        return $this->container['level_name'];
    }

    /**
     * Sets level_name
     * @param string $level_name The name of the level schema
     * @return $this
     */
    public function setLevelName($level_name)
    {
        $this->container['level_name'] = $level_name;

        return $this;
    }

    /**
     * Gets next_tier_name
     * @return string
     */
    public function getNextTierName()
    {
        return $this->container['next_tier_name'];
    }

    /**
     * Sets next_tier_name
     * @param string $next_tier_name The name of the next tier the user can qualify for
     * @return $this
     */
    public function setNextTierName($next_tier_name)
    {
        $this->container['next_tier_name'] = $next_tier_name;

        return $this;
    }

    /**
     * Gets next_tier_progress
     * @return int
     */
    public function getNextTierProgress()
    {
        return $this->container['next_tier_progress'];
    }

    /**
     * Sets next_tier_progress
     * @param int $next_tier_progress The progress needed to qualify for the next tier
     * @return $this
     */
    public function setNextTierProgress($next_tier_progress)
    {
        $this->container['next_tier_progress'] = $next_tier_progress;

        return $this;
    }

    /**
     * Gets progress
     * @return int
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param int $progress The amount of progress the user has
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets tier_names
     * @return string[]
     */
    public function getTierNames()
    {
        return $this->container['tier_names'];
    }

    /**
     * Sets tier_names
     * @param string[] $tier_names The names of the tiers the user has qualified for
     * @return $this
     */
    public function setTierNames($tier_names)
    {
        $this->container['tier_names'] = $tier_names;

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
     * @param int $user_id The ID of the user
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


