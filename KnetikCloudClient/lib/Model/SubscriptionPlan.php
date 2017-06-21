<?php
/**
 * SubscriptionPlan
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
 * SubscriptionPlan Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionPlan implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionPlan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_properties' => 'map[string,\KnetikCloud\Model\Property]',
        'availability' => 'string',
        'bill_grace_days' => 'int',
        'consolidated' => 'bool',
        'first_bill' => 'int',
        'first_bill_unit_of_time' => 'string',
        'id' => 'string',
        'late_payment_sku' => 'string',
        'locked' => 'bool',
        'max_auto_renew' => 'int',
        'max_bill_attempts' => 'int',
        'migration_plan' => 'string',
        'minimum_term' => 'int',
        'name' => 'string',
        'primary_sku' => 'string',
        'reactivation_sku' => 'string',
        'recurring_sku' => 'string',
        'renew_period' => 'int',
        'renew_period_unit_of_time' => 'string',
        'subscription_id' => 'int'
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
        'additional_properties' => 'additional_properties',
        'availability' => 'availability',
        'bill_grace_days' => 'bill_grace_days',
        'consolidated' => 'consolidated',
        'first_bill' => 'first_bill',
        'first_bill_unit_of_time' => 'first_bill_unit_of_time',
        'id' => 'id',
        'late_payment_sku' => 'late_payment_sku',
        'locked' => 'locked',
        'max_auto_renew' => 'max_auto_renew',
        'max_bill_attempts' => 'max_bill_attempts',
        'migration_plan' => 'migration_plan',
        'minimum_term' => 'minimum_term',
        'name' => 'name',
        'primary_sku' => 'primary_sku',
        'reactivation_sku' => 'reactivation_sku',
        'recurring_sku' => 'recurring_sku',
        'renew_period' => 'renew_period',
        'renew_period_unit_of_time' => 'renew_period_unit_of_time',
        'subscription_id' => 'subscription_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_properties' => 'setAdditionalProperties',
        'availability' => 'setAvailability',
        'bill_grace_days' => 'setBillGraceDays',
        'consolidated' => 'setConsolidated',
        'first_bill' => 'setFirstBill',
        'first_bill_unit_of_time' => 'setFirstBillUnitOfTime',
        'id' => 'setId',
        'late_payment_sku' => 'setLatePaymentSku',
        'locked' => 'setLocked',
        'max_auto_renew' => 'setMaxAutoRenew',
        'max_bill_attempts' => 'setMaxBillAttempts',
        'migration_plan' => 'setMigrationPlan',
        'minimum_term' => 'setMinimumTerm',
        'name' => 'setName',
        'primary_sku' => 'setPrimarySku',
        'reactivation_sku' => 'setReactivationSku',
        'recurring_sku' => 'setRecurringSku',
        'renew_period' => 'setRenewPeriod',
        'renew_period_unit_of_time' => 'setRenewPeriodUnitOfTime',
        'subscription_id' => 'setSubscriptionId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_properties' => 'getAdditionalProperties',
        'availability' => 'getAvailability',
        'bill_grace_days' => 'getBillGraceDays',
        'consolidated' => 'getConsolidated',
        'first_bill' => 'getFirstBill',
        'first_bill_unit_of_time' => 'getFirstBillUnitOfTime',
        'id' => 'getId',
        'late_payment_sku' => 'getLatePaymentSku',
        'locked' => 'getLocked',
        'max_auto_renew' => 'getMaxAutoRenew',
        'max_bill_attempts' => 'getMaxBillAttempts',
        'migration_plan' => 'getMigrationPlan',
        'minimum_term' => 'getMinimumTerm',
        'name' => 'getName',
        'primary_sku' => 'getPrimarySku',
        'reactivation_sku' => 'getReactivationSku',
        'recurring_sku' => 'getRecurringSku',
        'renew_period' => 'getRenewPeriod',
        'renew_period_unit_of_time' => 'getRenewPeriodUnitOfTime',
        'subscription_id' => 'getSubscriptionId'
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

    const AVAILABILITY_ALL = 'all';
    const AVAILABILITY_NEW_SUBSCRIBERS = 'new_subscribers';
    const FIRST_BILL_UNIT_OF_TIME_MILLISECOND = 'millisecond';
    const FIRST_BILL_UNIT_OF_TIME_SECOND = 'second';
    const FIRST_BILL_UNIT_OF_TIME_MINUTE = 'minute';
    const FIRST_BILL_UNIT_OF_TIME_HOUR = 'hour';
    const FIRST_BILL_UNIT_OF_TIME_DAY = 'day';
    const FIRST_BILL_UNIT_OF_TIME_WEEK = 'week';
    const FIRST_BILL_UNIT_OF_TIME_MONTH = 'month';
    const FIRST_BILL_UNIT_OF_TIME_YEAR = 'year';
    const RENEW_PERIOD_UNIT_OF_TIME_MILLISECOND = 'millisecond';
    const RENEW_PERIOD_UNIT_OF_TIME_SECOND = 'second';
    const RENEW_PERIOD_UNIT_OF_TIME_MINUTE = 'minute';
    const RENEW_PERIOD_UNIT_OF_TIME_HOUR = 'hour';
    const RENEW_PERIOD_UNIT_OF_TIME_DAY = 'day';
    const RENEW_PERIOD_UNIT_OF_TIME_WEEK = 'week';
    const RENEW_PERIOD_UNIT_OF_TIME_MONTH = 'month';
    const RENEW_PERIOD_UNIT_OF_TIME_YEAR = 'year';
    

    
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFirstBillUnitOfTimeAllowableValues()
    {
        return [
            self::FIRST_BILL_UNIT_OF_TIME_MILLISECOND,
            self::FIRST_BILL_UNIT_OF_TIME_SECOND,
            self::FIRST_BILL_UNIT_OF_TIME_MINUTE,
            self::FIRST_BILL_UNIT_OF_TIME_HOUR,
            self::FIRST_BILL_UNIT_OF_TIME_DAY,
            self::FIRST_BILL_UNIT_OF_TIME_WEEK,
            self::FIRST_BILL_UNIT_OF_TIME_MONTH,
            self::FIRST_BILL_UNIT_OF_TIME_YEAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRenewPeriodUnitOfTimeAllowableValues()
    {
        return [
            self::RENEW_PERIOD_UNIT_OF_TIME_MILLISECOND,
            self::RENEW_PERIOD_UNIT_OF_TIME_SECOND,
            self::RENEW_PERIOD_UNIT_OF_TIME_MINUTE,
            self::RENEW_PERIOD_UNIT_OF_TIME_HOUR,
            self::RENEW_PERIOD_UNIT_OF_TIME_DAY,
            self::RENEW_PERIOD_UNIT_OF_TIME_WEEK,
            self::RENEW_PERIOD_UNIT_OF_TIME_MONTH,
            self::RENEW_PERIOD_UNIT_OF_TIME_YEAR,
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
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['bill_grace_days'] = isset($data['bill_grace_days']) ? $data['bill_grace_days'] : null;
        $this->container['consolidated'] = isset($data['consolidated']) ? $data['consolidated'] : null;
        $this->container['first_bill'] = isset($data['first_bill']) ? $data['first_bill'] : null;
        $this->container['first_bill_unit_of_time'] = isset($data['first_bill_unit_of_time']) ? $data['first_bill_unit_of_time'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['late_payment_sku'] = isset($data['late_payment_sku']) ? $data['late_payment_sku'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['max_auto_renew'] = isset($data['max_auto_renew']) ? $data['max_auto_renew'] : null;
        $this->container['max_bill_attempts'] = isset($data['max_bill_attempts']) ? $data['max_bill_attempts'] : null;
        $this->container['migration_plan'] = isset($data['migration_plan']) ? $data['migration_plan'] : null;
        $this->container['minimum_term'] = isset($data['minimum_term']) ? $data['minimum_term'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['primary_sku'] = isset($data['primary_sku']) ? $data['primary_sku'] : null;
        $this->container['reactivation_sku'] = isset($data['reactivation_sku']) ? $data['reactivation_sku'] : null;
        $this->container['recurring_sku'] = isset($data['recurring_sku']) ? $data['recurring_sku'] : null;
        $this->container['renew_period'] = isset($data['renew_period']) ? $data['renew_period'] : null;
        $this->container['renew_period_unit_of_time'] = isset($data['renew_period_unit_of_time']) ? $data['renew_period_unit_of_time'] : null;
        $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["all", "new_subscribers"];
        if (!in_array($this->container['availability'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'availability', must be one of 'all', 'new_subscribers'.";
        }

        $allowed_values = ["millisecond", "second", "minute", "hour", "day", "week", "month", "year"];
        if (!in_array($this->container['first_bill_unit_of_time'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'first_bill_unit_of_time', must be one of 'millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year'.";
        }

        $allowed_values = ["millisecond", "second", "minute", "hour", "day", "week", "month", "year"];
        if (!in_array($this->container['renew_period_unit_of_time'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'renew_period_unit_of_time', must be one of 'millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year'.";
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

        $allowed_values = ["all", "new_subscribers"];
        if (!in_array($this->container['availability'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["millisecond", "second", "minute", "hour", "day", "week", "month", "year"];
        if (!in_array($this->container['first_bill_unit_of_time'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["millisecond", "second", "minute", "hour", "day", "week", "month", "year"];
        if (!in_array($this->container['renew_period_unit_of_time'], $allowed_values)) {
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
     * @param map[string,\KnetikCloud\Model\Property] $additional_properties
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
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
     * Gets bill_grace_days
     * @return int
     */
    public function getBillGraceDays()
    {
        return $this->container['bill_grace_days'];
    }

    /**
     * Sets bill_grace_days
     * @param int $bill_grace_days
     * @return $this
     */
    public function setBillGraceDays($bill_grace_days)
    {
        $this->container['bill_grace_days'] = $bill_grace_days;

        return $this;
    }

    /**
     * Gets consolidated
     * @return bool
     */
    public function getConsolidated()
    {
        return $this->container['consolidated'];
    }

    /**
     * Sets consolidated
     * @param bool $consolidated
     * @return $this
     */
    public function setConsolidated($consolidated)
    {
        $this->container['consolidated'] = $consolidated;

        return $this;
    }

    /**
     * Gets first_bill
     * @return int
     */
    public function getFirstBill()
    {
        return $this->container['first_bill'];
    }

    /**
     * Sets first_bill
     * @param int $first_bill
     * @return $this
     */
    public function setFirstBill($first_bill)
    {
        $this->container['first_bill'] = $first_bill;

        return $this;
    }

    /**
     * Gets first_bill_unit_of_time
     * @return string
     */
    public function getFirstBillUnitOfTime()
    {
        return $this->container['first_bill_unit_of_time'];
    }

    /**
     * Sets first_bill_unit_of_time
     * @param string $first_bill_unit_of_time
     * @return $this
     */
    public function setFirstBillUnitOfTime($first_bill_unit_of_time)
    {
        $allowed_values = array('millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year');
        if (!is_null($first_bill_unit_of_time) && (!in_array($first_bill_unit_of_time, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'first_bill_unit_of_time', must be one of 'millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year'");
        }
        $this->container['first_bill_unit_of_time'] = $first_bill_unit_of_time;

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
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets late_payment_sku
     * @return string
     */
    public function getLatePaymentSku()
    {
        return $this->container['late_payment_sku'];
    }

    /**
     * Sets late_payment_sku
     * @param string $late_payment_sku
     * @return $this
     */
    public function setLatePaymentSku($late_payment_sku)
    {
        $this->container['late_payment_sku'] = $late_payment_sku;

        return $this;
    }

    /**
     * Gets locked
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     * @param bool $locked
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets max_auto_renew
     * @return int
     */
    public function getMaxAutoRenew()
    {
        return $this->container['max_auto_renew'];
    }

    /**
     * Sets max_auto_renew
     * @param int $max_auto_renew
     * @return $this
     */
    public function setMaxAutoRenew($max_auto_renew)
    {
        $this->container['max_auto_renew'] = $max_auto_renew;

        return $this;
    }

    /**
     * Gets max_bill_attempts
     * @return int
     */
    public function getMaxBillAttempts()
    {
        return $this->container['max_bill_attempts'];
    }

    /**
     * Sets max_bill_attempts
     * @param int $max_bill_attempts
     * @return $this
     */
    public function setMaxBillAttempts($max_bill_attempts)
    {
        $this->container['max_bill_attempts'] = $max_bill_attempts;

        return $this;
    }

    /**
     * Gets migration_plan
     * @return string
     */
    public function getMigrationPlan()
    {
        return $this->container['migration_plan'];
    }

    /**
     * Sets migration_plan
     * @param string $migration_plan
     * @return $this
     */
    public function setMigrationPlan($migration_plan)
    {
        $this->container['migration_plan'] = $migration_plan;

        return $this;
    }

    /**
     * Gets minimum_term
     * @return int
     */
    public function getMinimumTerm()
    {
        return $this->container['minimum_term'];
    }

    /**
     * Sets minimum_term
     * @param int $minimum_term
     * @return $this
     */
    public function setMinimumTerm($minimum_term)
    {
        $this->container['minimum_term'] = $minimum_term;

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
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_sku
     * @return string
     */
    public function getPrimarySku()
    {
        return $this->container['primary_sku'];
    }

    /**
     * Sets primary_sku
     * @param string $primary_sku
     * @return $this
     */
    public function setPrimarySku($primary_sku)
    {
        $this->container['primary_sku'] = $primary_sku;

        return $this;
    }

    /**
     * Gets reactivation_sku
     * @return string
     */
    public function getReactivationSku()
    {
        return $this->container['reactivation_sku'];
    }

    /**
     * Sets reactivation_sku
     * @param string $reactivation_sku
     * @return $this
     */
    public function setReactivationSku($reactivation_sku)
    {
        $this->container['reactivation_sku'] = $reactivation_sku;

        return $this;
    }

    /**
     * Gets recurring_sku
     * @return string
     */
    public function getRecurringSku()
    {
        return $this->container['recurring_sku'];
    }

    /**
     * Sets recurring_sku
     * @param string $recurring_sku
     * @return $this
     */
    public function setRecurringSku($recurring_sku)
    {
        $this->container['recurring_sku'] = $recurring_sku;

        return $this;
    }

    /**
     * Gets renew_period
     * @return int
     */
    public function getRenewPeriod()
    {
        return $this->container['renew_period'];
    }

    /**
     * Sets renew_period
     * @param int $renew_period
     * @return $this
     */
    public function setRenewPeriod($renew_period)
    {
        $this->container['renew_period'] = $renew_period;

        return $this;
    }

    /**
     * Gets renew_period_unit_of_time
     * @return string
     */
    public function getRenewPeriodUnitOfTime()
    {
        return $this->container['renew_period_unit_of_time'];
    }

    /**
     * Sets renew_period_unit_of_time
     * @param string $renew_period_unit_of_time
     * @return $this
     */
    public function setRenewPeriodUnitOfTime($renew_period_unit_of_time)
    {
        $allowed_values = array('millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year');
        if (!is_null($renew_period_unit_of_time) && (!in_array($renew_period_unit_of_time, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'renew_period_unit_of_time', must be one of 'millisecond', 'second', 'minute', 'hour', 'day', 'week', 'month', 'year'");
        }
        $this->container['renew_period_unit_of_time'] = $renew_period_unit_of_time;

        return $this;
    }

    /**
     * Gets subscription_id
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->container['subscription_id'];
    }

    /**
     * Sets subscription_id
     * @param int $subscription_id
     * @return $this
     */
    public function setSubscriptionId($subscription_id)
    {
        $this->container['subscription_id'] = $subscription_id;

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


