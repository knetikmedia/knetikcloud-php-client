<?php
/**
 * CoreActivitySettings
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
 * CoreActivitySettings Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CoreActivitySettings implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CoreActivitySettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'boot_in_play' => 'bool',
        'custom_launch_address_allowed' => 'bool',
        'host_option' => 'string',
        'host_status_control' => 'bool',
        'join_in_play' => 'bool',
        'leave_in_play' => 'bool',
        'max_players' => 'int',
        'min_players' => 'int',
        'results_trust' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'boot_in_play' => null,
        'custom_launch_address_allowed' => null,
        'host_option' => null,
        'host_status_control' => null,
        'join_in_play' => null,
        'leave_in_play' => null,
        'max_players' => 'int32',
        'min_players' => 'int32',
        'results_trust' => null
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
        'boot_in_play' => 'boot_in_play',
        'custom_launch_address_allowed' => 'custom_launch_address_allowed',
        'host_option' => 'host_option',
        'host_status_control' => 'host_status_control',
        'join_in_play' => 'join_in_play',
        'leave_in_play' => 'leave_in_play',
        'max_players' => 'max_players',
        'min_players' => 'min_players',
        'results_trust' => 'results_trust'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'boot_in_play' => 'setBootInPlay',
        'custom_launch_address_allowed' => 'setCustomLaunchAddressAllowed',
        'host_option' => 'setHostOption',
        'host_status_control' => 'setHostStatusControl',
        'join_in_play' => 'setJoinInPlay',
        'leave_in_play' => 'setLeaveInPlay',
        'max_players' => 'setMaxPlayers',
        'min_players' => 'setMinPlayers',
        'results_trust' => 'setResultsTrust'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'boot_in_play' => 'getBootInPlay',
        'custom_launch_address_allowed' => 'getCustomLaunchAddressAllowed',
        'host_option' => 'getHostOption',
        'host_status_control' => 'getHostStatusControl',
        'join_in_play' => 'getJoinInPlay',
        'leave_in_play' => 'getLeaveInPlay',
        'max_players' => 'getMaxPlayers',
        'min_players' => 'getMinPlayers',
        'results_trust' => 'getResultsTrust'
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

    const HOST_OPTION_ADMIN_ONLY = 'admin_only';
    const HOST_OPTION_PLAYER = 'player';
    const HOST_OPTION_NON_PLAYER = 'non_player';
    const RESULTS_TRUST_NONE = 'none';
    const RESULTS_TRUST_HOST = 'host';
    const RESULTS_TRUST_ALL = 'all';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getHostOptionAllowableValues()
    {
        return [
            self::HOST_OPTION_ADMIN_ONLY,
            self::HOST_OPTION_PLAYER,
            self::HOST_OPTION_NON_PLAYER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getResultsTrustAllowableValues()
    {
        return [
            self::RESULTS_TRUST_NONE,
            self::RESULTS_TRUST_HOST,
            self::RESULTS_TRUST_ALL,
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
        $this->container['boot_in_play'] = isset($data['boot_in_play']) ? $data['boot_in_play'] : null;
        $this->container['custom_launch_address_allowed'] = isset($data['custom_launch_address_allowed']) ? $data['custom_launch_address_allowed'] : null;
        $this->container['host_option'] = isset($data['host_option']) ? $data['host_option'] : null;
        $this->container['host_status_control'] = isset($data['host_status_control']) ? $data['host_status_control'] : null;
        $this->container['join_in_play'] = isset($data['join_in_play']) ? $data['join_in_play'] : null;
        $this->container['leave_in_play'] = isset($data['leave_in_play']) ? $data['leave_in_play'] : null;
        $this->container['max_players'] = isset($data['max_players']) ? $data['max_players'] : null;
        $this->container['min_players'] = isset($data['min_players']) ? $data['min_players'] : null;
        $this->container['results_trust'] = isset($data['results_trust']) ? $data['results_trust'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getHostOptionAllowableValues();
        if (!in_array($this->container['host_option'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'host_option', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getResultsTrustAllowableValues();
        if (!in_array($this->container['results_trust'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'results_trust', must be one of '%s'",
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

        $allowed_values = $this->getHostOptionAllowableValues();
        if (!in_array($this->container['host_option'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getResultsTrustAllowableValues();
        if (!in_array($this->container['results_trust'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets boot_in_play
     * @return bool
     */
    public function getBootInPlay()
    {
        return $this->container['boot_in_play'];
    }

    /**
     * Sets boot_in_play
     * @param bool $boot_in_play Whether the host can boot a user while the status is PLAYING. Default false
     * @return $this
     */
    public function setBootInPlay($boot_in_play)
    {
        $this->container['boot_in_play'] = $boot_in_play;

        return $this;
    }

    /**
     * Gets custom_launch_address_allowed
     * @return bool
     */
    public function getCustomLaunchAddressAllowed()
    {
        return $this->container['custom_launch_address_allowed'];
    }

    /**
     * Sets custom_launch_address_allowed
     * @param bool $custom_launch_address_allowed Restriction for whether the host creating an occurrence can specify a custom launch address (such as their own ip address). Default 'false'
     * @return $this
     */
    public function setCustomLaunchAddressAllowed($custom_launch_address_allowed)
    {
        $this->container['custom_launch_address_allowed'] = $custom_launch_address_allowed;

        return $this;
    }

    /**
     * Gets host_option
     * @return string
     */
    public function getHostOption()
    {
        return $this->container['host_option'];
    }

    /**
     * Sets host_option
     * @param string $host_option Restriction for who can host an occurrence. admin disallows regular users, player means the user must also be a player in the occurrence if not admin, non-player means the user has the option to host without being a player. Default 'player'
     * @return $this
     */
    public function setHostOption($host_option)
    {
        $allowed_values = $this->getHostOptionAllowableValues();
        if (!is_null($host_option) && !in_array($host_option, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'host_option', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['host_option'] = $host_option;

        return $this;
    }

    /**
     * Gets host_status_control
     * @return bool
     */
    public function getHostStatusControl()
    {
        return $this->container['host_status_control'];
    }

    /**
     * Sets host_status_control
     * @param bool $host_status_control Restriction for whether the host has control of the status once the game launches. If false they can only manage the game before (when setup and open). Default 'false'
     * @return $this
     */
    public function setHostStatusControl($host_status_control)
    {
        $this->container['host_status_control'] = $host_status_control;

        return $this;
    }

    /**
     * Gets join_in_play
     * @return bool
     */
    public function getJoinInPlay()
    {
        return $this->container['join_in_play'];
    }

    /**
     * Sets join_in_play
     * @param bool $join_in_play Whether users can join while the status is PLAYING. Default false
     * @return $this
     */
    public function setJoinInPlay($join_in_play)
    {
        $this->container['join_in_play'] = $join_in_play;

        return $this;
    }

    /**
     * Gets leave_in_play
     * @return bool
     */
    public function getLeaveInPlay()
    {
        return $this->container['leave_in_play'];
    }

    /**
     * Sets leave_in_play
     * @param bool $leave_in_play Whether users can leave while the status is PLAYING. Default false
     * @return $this
     */
    public function setLeaveInPlay($leave_in_play)
    {
        $this->container['leave_in_play'] = $leave_in_play;

        return $this;
    }

    /**
     * Gets max_players
     * @return int
     */
    public function getMaxPlayers()
    {
        return $this->container['max_players'];
    }

    /**
     * Sets max_players
     * @param int $max_players The maximum number of players the game can hold
     * @return $this
     */
    public function setMaxPlayers($max_players)
    {
        $this->container['max_players'] = $max_players;

        return $this;
    }

    /**
     * Gets min_players
     * @return int
     */
    public function getMinPlayers()
    {
        return $this->container['min_players'];
    }

    /**
     * Sets min_players
     * @param int $min_players The minimum number of players the game can hold
     * @return $this
     */
    public function setMinPlayers($min_players)
    {
        $this->container['min_players'] = $min_players;

        return $this;
    }

    /**
     * Gets results_trust
     * @return string
     */
    public function getResultsTrust()
    {
        return $this->container['results_trust'];
    }

    /**
     * Sets results_trust
     * @param string $results_trust Restriction for who is able to report game end and results. Admin is always able to send results as well. Default 'none'
     * @return $this
     */
    public function setResultsTrust($results_trust)
    {
        $allowed_values = $this->getResultsTrustAllowableValues();
        if (!is_null($results_trust) && !in_array($results_trust, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'results_trust', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['results_trust'] = $results_trust;

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

