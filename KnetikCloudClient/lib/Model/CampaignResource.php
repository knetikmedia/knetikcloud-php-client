<?php
/**
 * CampaignResource
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
 * CampaignResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'additional_properties' => 'map[string,\KnetikCloud\Model\Property]',
        'created_date' => 'int',
        'id' => 'int',
        'leaderboard_strategy' => 'string',
        'long_description' => 'string',
        'name' => 'string',
        'next_challenge' => 'string',
        'next_challenge_date' => 'int',
        'reward_set' => '\KnetikCloud\Model\RewardSetResource',
        'reward_status' => 'string',
        'short_description' => 'string',
        'template' => 'string',
        'updated_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'additional_properties' => null,
        'created_date' => 'int64',
        'id' => 'int64',
        'leaderboard_strategy' => null,
        'long_description' => null,
        'name' => null,
        'next_challenge' => null,
        'next_challenge_date' => 'int64',
        'reward_set' => null,
        'reward_status' => null,
        'short_description' => null,
        'template' => null,
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
        'active' => 'active',
        'additional_properties' => 'additional_properties',
        'created_date' => 'created_date',
        'id' => 'id',
        'leaderboard_strategy' => 'leaderboard_strategy',
        'long_description' => 'long_description',
        'name' => 'name',
        'next_challenge' => 'next_challenge',
        'next_challenge_date' => 'next_challenge_date',
        'reward_set' => 'reward_set',
        'reward_status' => 'reward_status',
        'short_description' => 'short_description',
        'template' => 'template',
        'updated_date' => 'updated_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'additional_properties' => 'setAdditionalProperties',
        'created_date' => 'setCreatedDate',
        'id' => 'setId',
        'leaderboard_strategy' => 'setLeaderboardStrategy',
        'long_description' => 'setLongDescription',
        'name' => 'setName',
        'next_challenge' => 'setNextChallenge',
        'next_challenge_date' => 'setNextChallengeDate',
        'reward_set' => 'setRewardSet',
        'reward_status' => 'setRewardStatus',
        'short_description' => 'setShortDescription',
        'template' => 'setTemplate',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'additional_properties' => 'getAdditionalProperties',
        'created_date' => 'getCreatedDate',
        'id' => 'getId',
        'leaderboard_strategy' => 'getLeaderboardStrategy',
        'long_description' => 'getLongDescription',
        'name' => 'getName',
        'next_challenge' => 'getNextChallenge',
        'next_challenge_date' => 'getNextChallengeDate',
        'reward_set' => 'getRewardSet',
        'reward_status' => 'getRewardStatus',
        'short_description' => 'getShortDescription',
        'template' => 'getTemplate',
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

    const REWARD_STATUS_PENDING = 'pending';
    const REWARD_STATUS_FAILED = 'failed';
    const REWARD_STATUS_COMPLETE = 'complete';
    const REWARD_STATUS_PARTIAL = 'partial';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRewardStatusAllowableValues()
    {
        return [
            self::REWARD_STATUS_PENDING,
            self::REWARD_STATUS_FAILED,
            self::REWARD_STATUS_COMPLETE,
            self::REWARD_STATUS_PARTIAL,
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['leaderboard_strategy'] = isset($data['leaderboard_strategy']) ? $data['leaderboard_strategy'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['next_challenge'] = isset($data['next_challenge']) ? $data['next_challenge'] : null;
        $this->container['next_challenge_date'] = isset($data['next_challenge_date']) ? $data['next_challenge_date'] : null;
        $this->container['reward_set'] = isset($data['reward_set']) ? $data['reward_set'] : null;
        $this->container['reward_status'] = isset($data['reward_status']) ? $data['reward_status'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
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

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = $this->getRewardStatusAllowableValues();
        if (!in_array($this->container['reward_status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'reward_status', must be one of '%s'",
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
        $allowed_values = $this->getRewardStatusAllowableValues();
        if (!in_array($this->container['reward_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active Whether the campaign is active or not.  Defaults to false
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets additional_properties
     * @return map[string,\KnetikCloud\Model\Property]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     * @param map[string,\KnetikCloud\Model\Property] $additional_properties A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

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
     * Gets leaderboard_strategy
     * @return string
     */
    public function getLeaderboardStrategy()
    {
        return $this->container['leaderboard_strategy'];
    }

    /**
     * Sets leaderboard_strategy
     * @param string $leaderboard_strategy The strategy for calculating the leaderboard. Defaults to highest score. Value MUST come from the list of available strategies from the Leaderboard Service
     * @return $this
     */
    public function setLeaderboardStrategy($leaderboard_strategy)
    {
        $this->container['leaderboard_strategy'] = $leaderboard_strategy;

        return $this;
    }

    /**
     * Gets long_description
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['long_description'];
    }

    /**
     * Sets long_description
     * @param string $long_description The user friendly name of that resource. Defaults to blank string
     * @return $this
     */
    public function setLongDescription($long_description)
    {
        $this->container['long_description'] = $long_description;

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
     * @param string $name The user friendly name of that resource
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets next_challenge
     * @return string
     */
    public function getNextChallenge()
    {
        return $this->container['next_challenge'];
    }

    /**
     * Sets next_challenge
     * @param string $next_challenge The name of the next challenge coming up
     * @return $this
     */
    public function setNextChallenge($next_challenge)
    {
        $this->container['next_challenge'] = $next_challenge;

        return $this;
    }

    /**
     * Gets next_challenge_date
     * @return int
     */
    public function getNextChallengeDate()
    {
        return $this->container['next_challenge_date'];
    }

    /**
     * Sets next_challenge_date
     * @param int $next_challenge_date The date/time of the next challenge coming up
     * @return $this
     */
    public function setNextChallengeDate($next_challenge_date)
    {
        $this->container['next_challenge_date'] = $next_challenge_date;

        return $this;
    }

    /**
     * Gets reward_set
     * @return \KnetikCloud\Model\RewardSetResource
     */
    public function getRewardSet()
    {
        return $this->container['reward_set'];
    }

    /**
     * Sets reward_set
     * @param \KnetikCloud\Model\RewardSetResource $reward_set The rewards to give at the end of the campaign. When creating/updating only id is used. Reward set must be pre-existing
     * @return $this
     */
    public function setRewardSet($reward_set)
    {
        $this->container['reward_set'] = $reward_set;

        return $this;
    }

    /**
     * Gets reward_status
     * @return string
     */
    public function getRewardStatus()
    {
        return $this->container['reward_status'];
    }

    /**
     * Sets reward_status
     * @param string $reward_status Indicate if the rewards have been given out already
     * @return $this
     */
    public function setRewardStatus($reward_status)
    {
        $allowed_values = $this->getRewardStatusAllowableValues();
        if (!is_null($reward_status) && !in_array($reward_status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reward_status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['reward_status'] = $reward_status;

        return $this;
    }

    /**
     * Gets short_description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     * @param string $short_description The user friendly name of that resource. Defaults to blank string
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets template
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param string $template A campaign template this campaign is validated against (private). May be null and no validation of additional_properties will be done
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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


