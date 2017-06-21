<?php
/**
 * CouponDefinition
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
 * CouponDefinition Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CouponDefinition implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CouponDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'description' => 'string',
        'discount_type' => 'string',
        'exclusive' => 'bool',
        'max_discount' => 'double',
        'max_quantity' => 'int',
        'min_cart_total' => 'double',
        'name' => 'string',
        'self_exclusive' => 'bool',
        'target_item_id' => 'int',
        'type' => 'string',
        'unique_key' => 'string',
        'valid_for_tags' => 'string[]',
        'value' => 'double',
        'vendor_id' => 'int'
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
        'code' => 'code',
        'description' => 'description',
        'discount_type' => 'discount_type',
        'exclusive' => 'exclusive',
        'max_discount' => 'max_discount',
        'max_quantity' => 'max_quantity',
        'min_cart_total' => 'min_cart_total',
        'name' => 'name',
        'self_exclusive' => 'self_exclusive',
        'target_item_id' => 'target_item_id',
        'type' => 'type',
        'unique_key' => 'unique_key',
        'valid_for_tags' => 'valid_for_tags',
        'value' => 'value',
        'vendor_id' => 'vendor_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'discount_type' => 'setDiscountType',
        'exclusive' => 'setExclusive',
        'max_discount' => 'setMaxDiscount',
        'max_quantity' => 'setMaxQuantity',
        'min_cart_total' => 'setMinCartTotal',
        'name' => 'setName',
        'self_exclusive' => 'setSelfExclusive',
        'target_item_id' => 'setTargetItemId',
        'type' => 'setType',
        'unique_key' => 'setUniqueKey',
        'valid_for_tags' => 'setValidForTags',
        'value' => 'setValue',
        'vendor_id' => 'setVendorId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'discount_type' => 'getDiscountType',
        'exclusive' => 'getExclusive',
        'max_discount' => 'getMaxDiscount',
        'max_quantity' => 'getMaxQuantity',
        'min_cart_total' => 'getMinCartTotal',
        'name' => 'getName',
        'self_exclusive' => 'getSelfExclusive',
        'target_item_id' => 'getTargetItemId',
        'type' => 'getType',
        'unique_key' => 'getUniqueKey',
        'valid_for_tags' => 'getValidForTags',
        'value' => 'getValue',
        'vendor_id' => 'getVendorId'
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

    const DISCOUNT_TYPE_VALUE = 'value';
    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const TYPE_CART = 'coupon_cart';
    const TYPE_SINGLE_ITEM = 'coupon_single_item';
    const TYPE_VOUCHER = 'coupon_voucher';
    const TYPE_VENDOR = 'coupon_vendor';
    const TYPE_TAG = 'coupon_tag';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDiscountTypeAllowableValues()
    {
        return [
            self::DISCOUNT_TYPE_VALUE,
            self::DISCOUNT_TYPE_PERCENTAGE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CART,
            self::TYPE_SINGLE_ITEM,
            self::TYPE_VOUCHER,
            self::TYPE_VENDOR,
            self::TYPE_TAG,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['exclusive'] = isset($data['exclusive']) ? $data['exclusive'] : null;
        $this->container['max_discount'] = isset($data['max_discount']) ? $data['max_discount'] : null;
        $this->container['max_quantity'] = isset($data['max_quantity']) ? $data['max_quantity'] : null;
        $this->container['min_cart_total'] = isset($data['min_cart_total']) ? $data['min_cart_total'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['self_exclusive'] = isset($data['self_exclusive']) ? $data['self_exclusive'] : null;
        $this->container['target_item_id'] = isset($data['target_item_id']) ? $data['target_item_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unique_key'] = isset($data['unique_key']) ? $data['unique_key'] : null;
        $this->container['valid_for_tags'] = isset($data['valid_for_tags']) ? $data['valid_for_tags'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['vendor_id'] = isset($data['vendor_id']) ? $data['vendor_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        if ($this->container['discount_type'] === null) {
            $invalid_properties[] = "'discount_type' can't be null";
        }
        $allowed_values = ["value", "percentage"];
        if (!in_array($this->container['discount_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'discount_type', must be one of 'value', 'percentage'.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["coupon_cart", "coupon_single_item", "coupon_voucher", "coupon_vendor", "coupon_tag"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag'.";
        }

        if ($this->container['unique_key'] === null) {
            $invalid_properties[] = "'unique_key' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
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

        if ($this->container['code'] === null) {
            return false;
        }
        if ($this->container['discount_type'] === null) {
            return false;
        }
        $allowed_values = ["value", "percentage"];
        if (!in_array($this->container['discount_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["coupon_cart", "coupon_single_item", "coupon_voucher", "coupon_vendor", "coupon_tag"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['unique_key'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code A unique identifier for the discount. Can be used to remove the discount, and uniqueness within the cart will be enforced.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description A description for the discount.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount_type
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     * @param string $discount_type The type of discount in terms of how it deducts price.
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $allowed_values = array('value', 'percentage');
        if ((!in_array($discount_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'discount_type', must be one of 'value', 'percentage'");
        }
        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets exclusive
     * @return bool
     */
    public function getExclusive()
    {
        return $this->container['exclusive'];
    }

    /**
     * Sets exclusive
     * @param bool $exclusive Whether this discount is exclusive and cannot be used in conjunction with other discounts/coupons. default=false
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets max_discount
     * @return double
     */
    public function getMaxDiscount()
    {
        return $this->container['max_discount'];
    }

    /**
     * Sets max_discount
     * @param double $max_discount For coupon_cart, a minimum total price that the cart must meet to be valid.
     * @return $this
     */
    public function setMaxDiscount($max_discount)
    {
        $this->container['max_discount'] = $max_discount;

        return $this;
    }

    /**
     * Gets max_quantity
     * @return int
     */
    public function getMaxQuantity()
    {
        return $this->container['max_quantity'];
    }

    /**
     * Sets max_quantity
     * @param int $max_quantity The maximum number of items to count this discount for (not for cart_coupon).
     * @return $this
     */
    public function setMaxQuantity($max_quantity)
    {
        $this->container['max_quantity'] = $max_quantity;

        return $this;
    }

    /**
     * Gets min_cart_total
     * @return double
     */
    public function getMinCartTotal()
    {
        return $this->container['min_cart_total'];
    }

    /**
     * Sets min_cart_total
     * @param double $min_cart_total For coupon_cart, a minimum total price that the cart must meet to be valid.
     * @return $this
     */
    public function setMinCartTotal($min_cart_total)
    {
        $this->container['min_cart_total'] = $min_cart_total;

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
     * @param string $name A name for the discount.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets self_exclusive
     * @return bool
     */
    public function getSelfExclusive()
    {
        return $this->container['self_exclusive'];
    }

    /**
     * Sets self_exclusive
     * @param bool $self_exclusive Whether this coupon is exclusive to itself or not (true means cannot add two of this same coupon to the same cart).  Default = false
     * @return $this
     */
    public function setSelfExclusive($self_exclusive)
    {
        $this->container['self_exclusive'] = $self_exclusive;

        return $this;
    }

    /**
     * Gets target_item_id
     * @return int
     */
    public function getTargetItemId()
    {
        return $this->container['target_item_id'];
    }

    /**
     * Sets target_item_id
     * @param int $target_item_id The id of the item this discount applies to, which must be present in the cart. Applies if coupon_type_hint is coupon_single_item or coupon_voucher.
     * @return $this
     */
    public function setTargetItemId($target_item_id)
    {
        $this->container['target_item_id'] = $target_item_id;

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
     * @param string $type The type of discount in terms of what it applies to. coupon_cart applies to the cart as a whole, other types apply to specific items based on different criteria.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag'");
        }
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
     * @param string $unique_key A unique identifier string for the discount.
     * @return $this
     */
    public function setUniqueKey($unique_key)
    {
        $this->container['unique_key'] = $unique_key;

        return $this;
    }

    /**
     * Gets valid_for_tags
     * @return string[]
     */
    public function getValidForTags()
    {
        return $this->container['valid_for_tags'];
    }

    /**
     * Sets valid_for_tags
     * @param string[] $valid_for_tags Which tags this applies for (item must have at least one of them), if coupon_type is coupon_tag.
     * @return $this
     */
    public function setValidForTags($valid_for_tags)
    {
        $this->container['valid_for_tags'] = $valid_for_tags;

        return $this;
    }

    /**
     * Gets value
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param double $value The amount of the discount. If discount_type is value then this is the raw currency amount to remove. If discount_type is percentage then this will be multiplied by the cart total or item price to get the discount amount (0.5 is half price).
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param int $vendor_id Which vendor this applies for, if coupon_type is coupon_vendor.
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

