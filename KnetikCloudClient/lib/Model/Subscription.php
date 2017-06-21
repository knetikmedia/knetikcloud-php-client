<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Subscription extends StoreItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availability' => 'string',
        'consolidation_day_of_month' => 'int',
        'subscription_plans' => '\KnetikCloud\Model\SubscriptionPlan[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'availability' => 'availability',
        'consolidation_day_of_month' => 'consolidation_day_of_month',
        'subscription_plans' => 'subscription_plans'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'consolidation_day_of_month' => 'setConsolidationDayOfMonth',
        'subscription_plans' => 'setSubscriptionPlans'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'consolidation_day_of_month' => 'getConsolidationDayOfMonth',
        'subscription_plans' => 'getSubscriptionPlans'
    ];

    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    const AVAILABILITY_ALL = 'all';
    const AVAILABILITY_NEW_SUBSCRIBERS = 'new_subscribers';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY_ALL,
            self::AVAILABILITY_NEW_SUBSCRIBERS,
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
        parent::__construct($data);

        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['consolidation_day_of_month'] = isset($data['consolidation_day_of_month']) ? $data['consolidation_day_of_month'] : null;
        $this->container['subscription_plans'] = isset($data['subscription_plans']) ? $data['subscription_plans'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

        $allowed_values = ["all", "new_subscribers"];
        if (!in_array($this->container['availability'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'availability', must be one of 'all', 'new_subscribers'.";
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
        if (!parent::valid()) {
            return false;
        }

        $allowed_values = ["all", "new_subscribers"];
        if (!in_array($this->container['availability'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets availability
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     * @param string $availability
     * @return $this
     */
    public function setAvailability($availability)
    {
        $allowed_values = array('all', 'new_subscribers');
        if (!is_null($availability) && (!in_array($availability, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'availability', must be one of 'all', 'new_subscribers'");
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets consolidation_day_of_month
     * @return int
     */
    public function getConsolidationDayOfMonth()
    {
        return $this->container['consolidation_day_of_month'];
    }

    /**
     * Sets consolidation_day_of_month
     * @param int $consolidation_day_of_month
     * @return $this
     */
    public function setConsolidationDayOfMonth($consolidation_day_of_month)
    {
        $this->container['consolidation_day_of_month'] = $consolidation_day_of_month;

        return $this;
    }

    /**
     * Gets subscription_plans
     * @return \KnetikCloud\Model\SubscriptionPlan[]
     */
    public function getSubscriptionPlans()
    {
        return $this->container['subscription_plans'];
    }

    /**
     * Sets subscription_plans
     * @param \KnetikCloud\Model\SubscriptionPlan[] $subscription_plans
     * @return $this
     */
    public function setSubscriptionPlans($subscription_plans)
    {
        $this->container['subscription_plans'] = $subscription_plans;

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

