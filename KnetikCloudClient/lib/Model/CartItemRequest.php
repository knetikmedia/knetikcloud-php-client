<?php
/**
 * CartItemRequest
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
 * CartItemRequest Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartItemRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartItemRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate_key' => 'string',
        'catalog_sku' => 'string',
        'price_override' => 'float',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate_key' => null,
        'catalog_sku' => null,
        'price_override' => null,
        'quantity' => 'int32'
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
        'affiliate_key' => 'affiliate_key',
        'catalog_sku' => 'catalog_sku',
        'price_override' => 'price_override',
        'quantity' => 'quantity'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'affiliate_key' => 'setAffiliateKey',
        'catalog_sku' => 'setCatalogSku',
        'price_override' => 'setPriceOverride',
        'quantity' => 'setQuantity'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'affiliate_key' => 'getAffiliateKey',
        'catalog_sku' => 'getCatalogSku',
        'price_override' => 'getPriceOverride',
        'quantity' => 'getQuantity'
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
        $this->container['affiliate_key'] = isset($data['affiliate_key']) ? $data['affiliate_key'] : null;
        $this->container['catalog_sku'] = isset($data['catalog_sku']) ? $data['catalog_sku'] : null;
        $this->container['price_override'] = isset($data['price_override']) ? $data['price_override'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['catalog_sku'] === null) {
            $invalid_properties[] = "'catalog_sku' can't be null";
        }
        if ($this->container['price_override'] === null) {
            $invalid_properties[] = "'price_override' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
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

        if ($this->container['catalog_sku'] === null) {
            return false;
        }
        if ($this->container['price_override'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets affiliate_key
     * @return string
     */
    public function getAffiliateKey()
    {
        return $this->container['affiliate_key'];
    }

    /**
     * Sets affiliate_key
     * @param string $affiliate_key The affiliate key of the item
     * @return $this
     */
    public function setAffiliateKey($affiliate_key)
    {
        $this->container['affiliate_key'] = $affiliate_key;

        return $this;
    }

    /**
     * Gets catalog_sku
     * @return string
     */
    public function getCatalogSku()
    {
        return $this->container['catalog_sku'];
    }

    /**
     * Sets catalog_sku
     * @param string $catalog_sku The catalog SKU of the item
     * @return $this
     */
    public function setCatalogSku($catalog_sku)
    {
        $this->container['catalog_sku'] = $catalog_sku;

        return $this;
    }

    /**
     * Gets price_override
     * @return float
     */
    public function getPriceOverride()
    {
        return $this->container['price_override'];
    }

    /**
     * Sets price_override
     * @param float $price_override Allows to override the price of an item, if the behavior configuration permits it
     * @return $this
     */
    public function setPriceOverride($price_override)
    {
        $this->container['price_override'] = $price_override;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity The quantity of the item
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


