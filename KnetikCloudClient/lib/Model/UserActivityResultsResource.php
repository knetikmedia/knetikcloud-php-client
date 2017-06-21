<?php
/**
 * UserActivityResultsResource
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
 * UserActivityResultsResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserActivityResultsResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserActivityResultsResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_rewards' => '\KnetikCloud\Model\RewardCurrencyResource[]',
        'item_rewards' => '\KnetikCloud\Model\RewardItemResource[]',
        'rank' => 'int',
        'score' => 'int',
        'tags' => 'string[]',
        'ties' => 'int',
        'user' => '\KnetikCloud\Model\SimpleUserResource'
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
        'currency_rewards' => 'currency_rewards',
        'item_rewards' => 'item_rewards',
        'rank' => 'rank',
        'score' => 'score',
        'tags' => 'tags',
        'ties' => 'ties',
        'user' => 'user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'currency_rewards' => 'setCurrencyRewards',
        'item_rewards' => 'setItemRewards',
        'rank' => 'setRank',
        'score' => 'setScore',
        'tags' => 'setTags',
        'ties' => 'setTies',
        'user' => 'setUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'currency_rewards' => 'getCurrencyRewards',
        'item_rewards' => 'getItemRewards',
        'rank' => 'getRank',
        'score' => 'getScore',
        'tags' => 'getTags',
        'ties' => 'getTies',
        'user' => 'getUser'
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
        $this->container['currency_rewards'] = isset($data['currency_rewards']) ? $data['currency_rewards'] : null;
        $this->container['item_rewards'] = isset($data['item_rewards']) ? $data['item_rewards'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['ties'] = isset($data['ties']) ? $data['ties'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
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

        if ($this->container['user'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets currency_rewards
     * @return \KnetikCloud\Model\RewardCurrencyResource[]
     */
    public function getCurrencyRewards()
    {
        return $this->container['currency_rewards'];
    }

    /**
     * Sets currency_rewards
     * @param \KnetikCloud\Model\RewardCurrencyResource[] $currency_rewards Any currency rewarded to this user
     * @return $this
     */
    public function setCurrencyRewards($currency_rewards)
    {
        $this->container['currency_rewards'] = $currency_rewards;

        return $this;
    }

    /**
     * Gets item_rewards
     * @return \KnetikCloud\Model\RewardItemResource[]
     */
    public function getItemRewards()
    {
        return $this->container['item_rewards'];
    }

    /**
     * Sets item_rewards
     * @param \KnetikCloud\Model\RewardItemResource[] $item_rewards Any items rewarded to this user
     * @return $this
     */
    public function setItemRewards($item_rewards)
    {
        $this->container['item_rewards'] = $item_rewards;

        return $this;
    }

    /**
     * Gets rank
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     * @param int $rank The position of the user in the leaderboard. Null means non-compete or disqualification
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets score
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param int $score The raw score in this leaderboard. Null means non-compete or disqualification
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags Any tags for the metric. Each unique tag will translate into a unique leaderboard. Maximum 5 tags and 50 characters each
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets ties
     * @return int
     */
    public function getTies()
    {
        return $this->container['ties'];
    }

    /**
     * Sets ties
     * @param int $ties The number of users tied at this rank, including this user. 1 means no tie
     * @return $this
     */
    public function setTies($ties)
    {
        $this->container['ties'] = $ties;

        return $this;
    }

    /**
     * Gets user
     * @return \KnetikCloud\Model\SimpleUserResource
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \KnetikCloud\Model\SimpleUserResource $user The player for this entry
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

