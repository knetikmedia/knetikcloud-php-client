<?php
/**
 * ActivityResource
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
 * ActivityResource Class Doc Comment
 *
 * @category    Class
 * @description Represents an activity that can be parameterized and tracked through metrics (scores, etc)
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ActivityResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ActivityResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_properties' => 'map[string,\KnetikCloud\Model\Property]',
        'core_settings' => '\KnetikCloud\Model\CoreActivitySettings',
        'created_date' => 'int',
        'entitlements' => '\KnetikCloud\Model\ActivityEntitlementResource[]',
        'id' => 'int',
        'launch' => 'string',
        'leaderboard_strategy' => 'string',
        'long_description' => 'string',
        'name' => 'string',
        'reward_set' => '\KnetikCloud\Model\RewardSetResource',
        'settings' => '\KnetikCloud\Model\AvailableSettingResource[]',
        'short_description' => 'string',
        'template' => 'bool',
        'template_id' => 'string',
        'type' => 'string',
        'unique_key' => 'string',
        'updated_date' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_properties' => null,
        'core_settings' => null,
        'created_date' => 'int64',
        'entitlements' => null,
        'id' => 'int64',
        'launch' => null,
        'leaderboard_strategy' => null,
        'long_description' => null,
        'name' => null,
        'reward_set' => null,
        'settings' => null,
        'short_description' => null,
        'template' => null,
        'template_id' => null,
        'type' => null,
        'unique_key' => null,
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
        'additional_properties' => 'additional_properties',
        'core_settings' => 'core_settings',
        'created_date' => 'created_date',
        'entitlements' => 'entitlements',
        'id' => 'id',
        'launch' => 'launch',
        'leaderboard_strategy' => 'leaderboard_strategy',
        'long_description' => 'long_description',
        'name' => 'name',
        'reward_set' => 'reward_set',
        'settings' => 'settings',
        'short_description' => 'short_description',
        'template' => 'template',
        'template_id' => 'template_id',
        'type' => 'type',
        'unique_key' => 'unique_key',
        'updated_date' => 'updated_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_properties' => 'setAdditionalProperties',
        'core_settings' => 'setCoreSettings',
        'created_date' => 'setCreatedDate',
        'entitlements' => 'setEntitlements',
        'id' => 'setId',
        'launch' => 'setLaunch',
        'leaderboard_strategy' => 'setLeaderboardStrategy',
        'long_description' => 'setLongDescription',
        'name' => 'setName',
        'reward_set' => 'setRewardSet',
        'settings' => 'setSettings',
        'short_description' => 'setShortDescription',
        'template' => 'setTemplate',
        'template_id' => 'setTemplateId',
        'type' => 'setType',
        'unique_key' => 'setUniqueKey',
        'updated_date' => 'setUpdatedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_properties' => 'getAdditionalProperties',
        'core_settings' => 'getCoreSettings',
        'created_date' => 'getCreatedDate',
        'entitlements' => 'getEntitlements',
        'id' => 'getId',
        'launch' => 'getLaunch',
        'leaderboard_strategy' => 'getLeaderboardStrategy',
        'long_description' => 'getLongDescription',
        'name' => 'getName',
        'reward_set' => 'getRewardSet',
        'settings' => 'getSettings',
        'short_description' => 'getShortDescription',
        'template' => 'getTemplate',
        'template_id' => 'getTemplateId',
        'type' => 'getType',
        'unique_key' => 'getUniqueKey',
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
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['core_settings'] = isset($data['core_settings']) ? $data['core_settings'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['entitlements'] = isset($data['entitlements']) ? $data['entitlements'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['launch'] = isset($data['launch']) ? $data['launch'] : null;
        $this->container['leaderboard_strategy'] = isset($data['leaderboard_strategy']) ? $data['leaderboard_strategy'] : null;
        $this->container['long_description'] = isset($data['long_description']) ? $data['long_description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['reward_set'] = isset($data['reward_set']) ? $data['reward_set'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['template_id'] = isset($data['template_id']) ? $data['template_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unique_key'] = isset($data['unique_key']) ? $data['unique_key'] : null;
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
        return true;
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
     * @param map[string,\KnetikCloud\Model\Property] $additional_properties A map of additional properties keyed on the property name. Used to further describe an activity. While settings will vary from one activity occurrence (a game) to another, additional properties are shared by all the occurrences of this activity. Ex: Activity Logo, Disclaimer, Greeting, etc. Validated against template if one exists for activities
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets core_settings
     * @return \KnetikCloud\Model\CoreActivitySettings
     */
    public function getCoreSettings()
    {
        return $this->container['core_settings'];
    }

    /**
     * Sets core_settings
     * @param \KnetikCloud\Model\CoreActivitySettings $core_settings Defines core settings about the activity that affect how it can be created/played by users.
     * @return $this
     */
    public function setCoreSettings($core_settings)
    {
        $this->container['core_settings'] = $core_settings;

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
     * Gets entitlements
     * @return \KnetikCloud\Model\ActivityEntitlementResource[]
     */
    public function getEntitlements()
    {
        return $this->container['entitlements'];
    }

    /**
     * Sets entitlements
     * @param \KnetikCloud\Model\ActivityEntitlementResource[] $entitlements The list of items that can be used for entitlement (wager amounts/etc)
     * @return $this
     */
    public function setEntitlements($entitlements)
    {
        $this->container['entitlements'] = $entitlements;

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
     * Gets launch
     * @return string
     */
    public function getLaunch()
    {
        return $this->container['launch'];
    }

    /**
     * Sets launch
     * @param string $launch Details about how to launch the activity
     * @return $this
     */
    public function setLaunch($launch)
    {
        $this->container['launch'] = $launch;

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
     * @param string $leaderboard_strategy The strategy for calculating the leaderboard. No strategy means no leaderboard for the top level context. Value MUST come from the list of available strategies from the Leaderboard Service
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
     * Gets reward_set
     * @return \KnetikCloud\Model\RewardSetResource
     */
    public function getRewardSet()
    {
        return $this->container['reward_set'];
    }

    /**
     * Sets reward_set
     * @param \KnetikCloud\Model\RewardSetResource $reward_set The rewards to give at the end of each occurence of the activity. When creating/updating only id is used. Reward set must be pre-existing
     * @return $this
     */
    public function setRewardSet($reward_set)
    {
        $this->container['reward_set'] = $reward_set;

        return $this;
    }

    /**
     * Gets settings
     * @return \KnetikCloud\Model\AvailableSettingResource[]
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     * @param \KnetikCloud\Model\AvailableSettingResource[] $settings Define what parameters are required/available to start and run an activity. For example: Difficulty, Number of Questions, Character name, Avatar, Duration, etc. Not populated when getting listing
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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
     * @return bool
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param bool $template Whether this activity is a template for other activities. Default: false
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets template_id
     * @return string
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     * @param string $template_id An activity template this activity is validated against (private). May be null and no validation of additional_properties will be done
     * @return $this
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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
     * @param string $type The type of the activity
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param string $unique_key The unique key (for static reference in code) of the activity
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


