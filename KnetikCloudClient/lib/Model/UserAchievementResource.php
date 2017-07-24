<?php
/**
 * UserAchievementResource
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
 * UserAchievementResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserAchievementResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserAchievementResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'achieved' => 'bool',
        'achievement_name' => 'string',
        'created_date' => 'int',
        'earned_date' => 'int',
        'updated_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'achieved' => null,
        'achievement_name' => null,
        'created_date' => 'int64',
        'earned_date' => 'int64',
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
        'achieved' => 'achieved',
        'achievement_name' => 'achievement_name',
        'created_date' => 'created_date',
        'earned_date' => 'earned_date',
        'updated_date' => 'updated_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'achieved' => 'setAchieved',
        'achievement_name' => 'setAchievementName',
        'created_date' => 'setCreatedDate',
        'earned_date' => 'setEarnedDate',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'achieved' => 'getAchieved',
        'achievement_name' => 'getAchievementName',
        'created_date' => 'getCreatedDate',
        'earned_date' => 'getEarnedDate',
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
        $this->container['achieved'] = isset($data['achieved']) ? $data['achieved'] : null;
        $this->container['achievement_name'] = isset($data['achievement_name']) ? $data['achievement_name'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['earned_date'] = isset($data['earned_date']) ? $data['earned_date'] : null;
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

        if ($this->container['achievement_name'] === null) {
            $invalid_properties[] = "'achievement_name' can't be null";
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

        if ($this->container['achievement_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets achieved
     * @return bool
     */
    public function getAchieved()
    {
        return $this->container['achieved'];
    }

    /**
     * Sets achieved
     * @param bool $achieved Flag indicating whether the user has earned the achievement
     * @return $this
     */
    public function setAchieved($achieved)
    {
        $this->container['achieved'] = $achieved;

        return $this;
    }

    /**
     * Gets achievement_name
     * @return string
     */
    public function getAchievementName()
    {
        return $this->container['achievement_name'];
    }

    /**
     * Sets achievement_name
     * @param string $achievement_name The achievement being tracked.  If used for Leveling, this represents the tier name
     * @return $this
     */
    public function setAchievementName($achievement_name)
    {
        $this->container['achievement_name'] = $achievement_name;

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
     * @param int $created_date The date/time this resource was created in seconds since unix epoch
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets earned_date
     * @return int
     */
    public function getEarnedDate()
    {
        return $this->container['earned_date'];
    }

    /**
     * Sets earned_date
     * @param int $earned_date The date/time the achievement was earned as a unix timestamp in seconds
     * @return $this
     */
    public function setEarnedDate($earned_date)
    {
        $this->container['earned_date'] = $earned_date;

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


