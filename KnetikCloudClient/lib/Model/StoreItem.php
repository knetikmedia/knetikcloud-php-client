<?php
/**
 * StoreItem
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
 * StoreItem Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoreItem extends Item implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StoreItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayable' => 'bool',
        'geo_country_list' => 'string[]',
        'geo_policy_type' => 'string',
        'shipping_tier' => 'int',
        'skus' => '\KnetikCloud\Model\Sku[]',
        'store_end' => 'int',
        'store_start' => 'int',
        'vendor_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayable' => null,
        'geo_country_list' => null,
        'geo_policy_type' => null,
        'shipping_tier' => 'int32',
        'skus' => null,
        'store_end' => 'int64',
        'store_start' => 'int64',
        'vendor_id' => 'int32'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'displayable' => 'displayable',
        'geo_country_list' => 'geo_country_list',
        'geo_policy_type' => 'geo_policy_type',
        'shipping_tier' => 'shipping_tier',
        'skus' => 'skus',
        'store_end' => 'store_end',
        'store_start' => 'store_start',
        'vendor_id' => 'vendor_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'displayable' => 'setDisplayable',
        'geo_country_list' => 'setGeoCountryList',
        'geo_policy_type' => 'setGeoPolicyType',
        'shipping_tier' => 'setShippingTier',
        'skus' => 'setSkus',
        'store_end' => 'setStoreEnd',
        'store_start' => 'setStoreStart',
        'vendor_id' => 'setVendorId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'displayable' => 'getDisplayable',
        'geo_country_list' => 'getGeoCountryList',
        'geo_policy_type' => 'getGeoPolicyType',
        'shipping_tier' => 'getShippingTier',
        'skus' => 'getSkus',
        'store_end' => 'getStoreEnd',
        'store_start' => 'getStoreStart',
        'vendor_id' => 'getVendorId'
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

    const GEO_POLICY_TYPE_WHITELIST = 'whitelist';
    const GEO_POLICY_TYPE_BLACKLIST = 'blacklist';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getGeoPolicyTypeAllowableValues()
    {
        return [
            self::GEO_POLICY_TYPE_WHITELIST,
            self::GEO_POLICY_TYPE_BLACKLIST,
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

        $this->container['displayable'] = isset($data['displayable']) ? $data['displayable'] : null;
        $this->container['geo_country_list'] = isset($data['geo_country_list']) ? $data['geo_country_list'] : null;
        $this->container['geo_policy_type'] = isset($data['geo_policy_type']) ? $data['geo_policy_type'] : null;
        $this->container['shipping_tier'] = isset($data['shipping_tier']) ? $data['shipping_tier'] : null;
        $this->container['skus'] = isset($data['skus']) ? $data['skus'] : null;
        $this->container['store_end'] = isset($data['store_end']) ? $data['store_end'] : null;
        $this->container['store_start'] = isset($data['store_start']) ? $data['store_start'] : null;
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

        $allowed_values = $this->getGeoPolicyTypeAllowableValues();
        if (!in_array($this->container['geo_policy_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'geo_policy_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['skus'] === null) {
            $invalid_properties[] = "'skus' can't be null";
        }
        if ($this->container['vendor_id'] === null) {
            $invalid_properties[] = "'vendor_id' can't be null";
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

        $allowed_values = $this->getGeoPolicyTypeAllowableValues();
        if (!in_array($this->container['geo_policy_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['skus'] === null) {
            return false;
        }
        if ($this->container['vendor_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets displayable
     * @return bool
     */
    public function getDisplayable()
    {
        return $this->container['displayable'];
    }

    /**
     * Sets displayable
     * @param bool $displayable Whether or not the item is currently visible to users. Does not block purchase; Use store_start or store_end to block purchase.  Default = true
     * @return $this
     */
    public function setDisplayable($displayable)
    {
        $this->container['displayable'] = $displayable;

        return $this;
    }

    /**
     * Gets geo_country_list
     * @return string[]
     */
    public function getGeoCountryList()
    {
        return $this->container['geo_country_list'];
    }

    /**
     * Sets geo_country_list
     * @param string[] $geo_country_list A list of country ID to include in the blacklist/whitelist geo policy
     * @return $this
     */
    public function setGeoCountryList($geo_country_list)
    {
        $this->container['geo_country_list'] = $geo_country_list;

        return $this;
    }

    /**
     * Gets geo_policy_type
     * @return string
     */
    public function getGeoPolicyType()
    {
        return $this->container['geo_policy_type'];
    }

    /**
     * Sets geo_policy_type
     * @param string $geo_policy_type Whether to use the geo_country_list as a black list or white list for item geographical availability
     * @return $this
     */
    public function setGeoPolicyType($geo_policy_type)
    {
        $allowed_values = $this->getGeoPolicyTypeAllowableValues();
        if (!is_null($geo_policy_type) && !in_array($geo_policy_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'geo_policy_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['geo_policy_type'] = $geo_policy_type;

        return $this;
    }

    /**
     * Gets shipping_tier
     * @return int
     */
    public function getShippingTier()
    {
        return $this->container['shipping_tier'];
    }

    /**
     * Sets shipping_tier
     * @param int $shipping_tier Provides the abstract shipping needs if this item is physical and can be shipped.  A value of zero means no shipping needed.  Default = 0
     * @return $this
     */
    public function setShippingTier($shipping_tier)
    {
        $this->container['shipping_tier'] = $shipping_tier;

        return $this;
    }

    /**
     * Gets skus
     * @return \KnetikCloud\Model\Sku[]
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     * @param \KnetikCloud\Model\Sku[] $skus The skus for the item. Each defines a unique configuration for the item to be purchased (Large-Blue, Small-Green, etc). These are what is ultimately selected in the store and added to the cart
     * @return $this
     */
    public function setSkus($skus)
    {
        $this->container['skus'] = $skus;

        return $this;
    }

    /**
     * Gets store_end
     * @return int
     */
    public function getStoreEnd()
    {
        return $this->container['store_end'];
    }

    /**
     * Sets store_end
     * @param int $store_end The date the item will become hidden and unavailable for purchase, unix timestamp in seconds.  If set to null, item will never leave the store
     * @return $this
     */
    public function setStoreEnd($store_end)
    {
        $this->container['store_end'] = $store_end;

        return $this;
    }

    /**
     * Gets store_start
     * @return int
     */
    public function getStoreStart()
    {
        return $this->container['store_start'];
    }

    /**
     * Sets store_start
     * @param int $store_start The date the item will become visible (if displayable) and available for purchase, unix timestamp in seconds.  If set to null, item will appear in store immediately
     * @return $this
     */
    public function setStoreStart($store_start)
    {
        $this->container['store_start'] = $store_start;

        return $this;
    }

    /**
     * Gets vendor_id
     * @return int
     */
    public function getVendorId()
    {
        return $this->container['vendor_id'];
    }

    /**
     * Sets vendor_id
     * @param int $vendor_id The vendor who provides the item
     * @return $this
     */
    public function setVendorId($vendor_id)
    {
        $this->container['vendor_id'] = $vendor_id;

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


