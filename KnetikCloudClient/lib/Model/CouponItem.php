<?php
/**
 * CouponItem
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
 * CouponItem Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CouponItem extends StoreItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CouponItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'coupon_type_hint' => 'string',
        'discount_max' => 'double',
        'discount_min_cart_value' => 'double',
        'discount_type' => 'string',
        'discount_value' => 'double',
        'exclusive' => 'bool',
        'item_id' => 'int',
        'max_quantity' => 'int',
        'self_exclusive' => 'bool',
        'valid_for_tags' => 'string[]'
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
        'coupon_type_hint' => 'coupon_type_hint',
        'discount_max' => 'discount_max',
        'discount_min_cart_value' => 'discount_min_cart_value',
        'discount_type' => 'discount_type',
        'discount_value' => 'discount_value',
        'exclusive' => 'exclusive',
        'item_id' => 'item_id',
        'max_quantity' => 'max_quantity',
        'self_exclusive' => 'self_exclusive',
        'valid_for_tags' => 'valid_for_tags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'coupon_type_hint' => 'setCouponTypeHint',
        'discount_max' => 'setDiscountMax',
        'discount_min_cart_value' => 'setDiscountMinCartValue',
        'discount_type' => 'setDiscountType',
        'discount_value' => 'setDiscountValue',
        'exclusive' => 'setExclusive',
        'item_id' => 'setItemId',
        'max_quantity' => 'setMaxQuantity',
        'self_exclusive' => 'setSelfExclusive',
        'valid_for_tags' => 'setValidForTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'coupon_type_hint' => 'getCouponTypeHint',
        'discount_max' => 'getDiscountMax',
        'discount_min_cart_value' => 'getDiscountMinCartValue',
        'discount_type' => 'getDiscountType',
        'discount_value' => 'getDiscountValue',
        'exclusive' => 'getExclusive',
        'item_id' => 'getItemId',
        'max_quantity' => 'getMaxQuantity',
        'self_exclusive' => 'getSelfExclusive',
        'valid_for_tags' => 'getValidForTags'
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

    const COUPON_TYPE_HINT_CART = 'coupon_cart';
    const COUPON_TYPE_HINT_SINGLE_ITEM = 'coupon_single_item';
    const COUPON_TYPE_HINT_VOUCHER = 'coupon_voucher';
    const COUPON_TYPE_HINT_VENDOR = 'coupon_vendor';
    const COUPON_TYPE_HINT_TAG = 'coupon_tag';
    const DISCOUNT_TYPE_VALUE = 'value';
    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCouponTypeHintAllowableValues()
    {
        return [
            self::COUPON_TYPE_HINT_CART,
            self::COUPON_TYPE_HINT_SINGLE_ITEM,
            self::COUPON_TYPE_HINT_VOUCHER,
            self::COUPON_TYPE_HINT_VENDOR,
            self::COUPON_TYPE_HINT_TAG,
        ];
    }
    
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

        $this->container['coupon_type_hint'] = isset($data['coupon_type_hint']) ? $data['coupon_type_hint'] : null;
        $this->container['discount_max'] = isset($data['discount_max']) ? $data['discount_max'] : null;
        $this->container['discount_min_cart_value'] = isset($data['discount_min_cart_value']) ? $data['discount_min_cart_value'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['discount_value'] = isset($data['discount_value']) ? $data['discount_value'] : null;
        $this->container['exclusive'] = isset($data['exclusive']) ? $data['exclusive'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['max_quantity'] = isset($data['max_quantity']) ? $data['max_quantity'] : null;
        $this->container['self_exclusive'] = isset($data['self_exclusive']) ? $data['self_exclusive'] : null;
        $this->container['valid_for_tags'] = isset($data['valid_for_tags']) ? $data['valid_for_tags'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

        if ($this->container['coupon_type_hint'] === null) {
            $invalid_properties[] = "'coupon_type_hint' can't be null";
        }
        $allowed_values = ["coupon_cart", "coupon_single_item", "coupon_voucher", "coupon_vendor", "coupon_tag"];
        if (!in_array($this->container['coupon_type_hint'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'coupon_type_hint', must be one of 'coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag'.";
        }

        if ($this->container['discount_type'] === null) {
            $invalid_properties[] = "'discount_type' can't be null";
        }
        $allowed_values = ["value", "percentage"];
        if (!in_array($this->container['discount_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'discount_type', must be one of 'value', 'percentage'.";
        }

        if ($this->container['discount_value'] === null) {
            $invalid_properties[] = "'discount_value' can't be null";
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

        if ($this->container['coupon_type_hint'] === null) {
            return false;
        }
        $allowed_values = ["coupon_cart", "coupon_single_item", "coupon_voucher", "coupon_vendor", "coupon_tag"];
        if (!in_array($this->container['coupon_type_hint'], $allowed_values)) {
            return false;
        }
        if ($this->container['discount_type'] === null) {
            return false;
        }
        $allowed_values = ["value", "percentage"];
        if (!in_array($this->container['discount_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['discount_value'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets coupon_type_hint
     * @return string
     */
    public function getCouponTypeHint()
    {
        return $this->container['coupon_type_hint'];
    }

    /**
     * Sets coupon_type_hint
     * @param string $coupon_type_hint The type of coupon
     * @return $this
     */
    public function setCouponTypeHint($coupon_type_hint)
    {
        $allowed_values = array('coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag');
        if ((!in_array($coupon_type_hint, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'coupon_type_hint', must be one of 'coupon_cart', 'coupon_single_item', 'coupon_voucher', 'coupon_vendor', 'coupon_tag'");
        }
        $this->container['coupon_type_hint'] = $coupon_type_hint;

        return $this;
    }

    /**
     * Gets discount_max
     * @return double
     */
    public function getDiscountMax()
    {
        return $this->container['discount_max'];
    }

    /**
     * Sets discount_max
     * @param double $discount_max The amount this coupon is maxed out at.  Applies if coupon_type_hint is coupon_cart
     * @return $this
     */
    public function setDiscountMax($discount_max)
    {
        $this->container['discount_max'] = $discount_max;

        return $this;
    }

    /**
     * Gets discount_min_cart_value
     * @return double
     */
    public function getDiscountMinCartValue()
    {
        return $this->container['discount_min_cart_value'];
    }

    /**
     * Sets discount_min_cart_value
     * @param double $discount_min_cart_value The minimium amount needed in the cart for the coupon to apply.  Applies if coupon_type_hint is coupon_cart
     * @return $this
     */
    public function setDiscountMinCartValue($discount_min_cart_value)
    {
        $this->container['discount_min_cart_value'] = $discount_min_cart_value;

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
     * @param string $discount_type The type of discount in terms of how it deducts price. Value based discount not available for coupon_cart type coupons
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
     * Gets discount_value
     * @return double
     */
    public function getDiscountValue()
    {
        return $this->container['discount_value'];
    }

    /**
     * Sets discount_value
     * @param double $discount_value The amount the coupon will discount the item. If discount_type is 'value' this will be a flat amount of currency. If discount type is 'percentage' this will be a fraction (0.2 for 20% off) multiplied by the price of the matching item or items.
     * @return $this
     */
    public function setDiscountValue($discount_value)
    {
        $this->container['discount_value'] = $discount_value;

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
     * @param bool $exclusive Whether this coupon is exclusive or not (true means cannot be in same cart as another).  Default = false
     * @return $this
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets item_id
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     * @param int $item_id The id of the item the coupon is applied to.  Applies if coupon_type_hint is coupon_single_item or coupon_voucher
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

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
     * @param int $max_quantity The maximum quantity of items the coupon can apply to, null if no limit and minimum 1 otherwise.  Applies if coupon_type_hint is coupon_single_item or coupon_voucher
     * @return $this
     */
    public function setMaxQuantity($max_quantity)
    {
        $this->container['max_quantity'] = $max_quantity;

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
     * Gets valid_for_tags
     * @return string[]
     */
    public function getValidForTags()
    {
        return $this->container['valid_for_tags'];
    }

    /**
     * Sets valid_for_tags
     * @param string[] $valid_for_tags A list of tags for a coupon.  The coupon can only apply to an item that has at least one of these tags.  Applies if coupon_type_hint is coupon_tag
     * @return $this
     */
    public function setValidForTags($valid_for_tags)
    {
        $this->container['valid_for_tags'] = $valid_for_tags;

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


