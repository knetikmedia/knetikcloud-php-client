<?php
/**
 * InvoiceItemResource
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
 * InvoiceItemResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InvoiceItemResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceItemResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bundle_sku' => 'string',
        'current_fulfillment_status' => 'string',
        'id' => 'int',
        'invoice_id' => 'int',
        'item_id' => 'int',
        'item_name' => 'string',
        'original_total_price' => 'double',
        'original_unit_price' => 'double',
        'qty' => 'int',
        'sale_name' => 'string',
        'sku' => 'string',
        'sku_description' => 'string',
        'system_price' => 'double',
        'total_price' => 'double',
        'type_hint' => 'string',
        'unit_price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bundle_sku' => null,
        'current_fulfillment_status' => null,
        'id' => 'int32',
        'invoice_id' => 'int32',
        'item_id' => 'int32',
        'item_name' => null,
        'original_total_price' => 'double',
        'original_unit_price' => 'double',
        'qty' => 'int32',
        'sale_name' => null,
        'sku' => null,
        'sku_description' => null,
        'system_price' => 'double',
        'total_price' => 'double',
        'type_hint' => null,
        'unit_price' => 'double'
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
        'bundle_sku' => 'bundle_sku',
        'current_fulfillment_status' => 'current_fulfillment_status',
        'id' => 'id',
        'invoice_id' => 'invoice_id',
        'item_id' => 'item_id',
        'item_name' => 'item_name',
        'original_total_price' => 'original_total_price',
        'original_unit_price' => 'original_unit_price',
        'qty' => 'qty',
        'sale_name' => 'sale_name',
        'sku' => 'sku',
        'sku_description' => 'sku_description',
        'system_price' => 'system_price',
        'total_price' => 'total_price',
        'type_hint' => 'type_hint',
        'unit_price' => 'unit_price'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bundle_sku' => 'setBundleSku',
        'current_fulfillment_status' => 'setCurrentFulfillmentStatus',
        'id' => 'setId',
        'invoice_id' => 'setInvoiceId',
        'item_id' => 'setItemId',
        'item_name' => 'setItemName',
        'original_total_price' => 'setOriginalTotalPrice',
        'original_unit_price' => 'setOriginalUnitPrice',
        'qty' => 'setQty',
        'sale_name' => 'setSaleName',
        'sku' => 'setSku',
        'sku_description' => 'setSkuDescription',
        'system_price' => 'setSystemPrice',
        'total_price' => 'setTotalPrice',
        'type_hint' => 'setTypeHint',
        'unit_price' => 'setUnitPrice'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bundle_sku' => 'getBundleSku',
        'current_fulfillment_status' => 'getCurrentFulfillmentStatus',
        'id' => 'getId',
        'invoice_id' => 'getInvoiceId',
        'item_id' => 'getItemId',
        'item_name' => 'getItemName',
        'original_total_price' => 'getOriginalTotalPrice',
        'original_unit_price' => 'getOriginalUnitPrice',
        'qty' => 'getQty',
        'sale_name' => 'getSaleName',
        'sku' => 'getSku',
        'sku_description' => 'getSkuDescription',
        'system_price' => 'getSystemPrice',
        'total_price' => 'getTotalPrice',
        'type_hint' => 'getTypeHint',
        'unit_price' => 'getUnitPrice'
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
        $this->container['bundle_sku'] = isset($data['bundle_sku']) ? $data['bundle_sku'] : null;
        $this->container['current_fulfillment_status'] = isset($data['current_fulfillment_status']) ? $data['current_fulfillment_status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_name'] = isset($data['item_name']) ? $data['item_name'] : null;
        $this->container['original_total_price'] = isset($data['original_total_price']) ? $data['original_total_price'] : null;
        $this->container['original_unit_price'] = isset($data['original_unit_price']) ? $data['original_unit_price'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['sale_name'] = isset($data['sale_name']) ? $data['sale_name'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['sku_description'] = isset($data['sku_description']) ? $data['sku_description'] : null;
        $this->container['system_price'] = isset($data['system_price']) ? $data['system_price'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['type_hint'] = isset($data['type_hint']) ? $data['type_hint'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets bundle_sku
     * @return string
     */
    public function getBundleSku()
    {
        return $this->container['bundle_sku'];
    }

    /**
     * Sets bundle_sku
     * @param string $bundle_sku
     * @return $this
     */
    public function setBundleSku($bundle_sku)
    {
        $this->container['bundle_sku'] = $bundle_sku;

        return $this;
    }

    /**
     * Gets current_fulfillment_status
     * @return string
     */
    public function getCurrentFulfillmentStatus()
    {
        return $this->container['current_fulfillment_status'];
    }

    /**
     * Sets current_fulfillment_status
     * @param string $current_fulfillment_status
     * @return $this
     */
    public function setCurrentFulfillmentStatus($current_fulfillment_status)
    {
        $this->container['current_fulfillment_status'] = $current_fulfillment_status;

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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invoice_id
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     * @param int $invoice_id
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

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
     * @param int $item_id
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_name
     * @return string
     */
    public function getItemName()
    {
        return $this->container['item_name'];
    }

    /**
     * Sets item_name
     * @param string $item_name
     * @return $this
     */
    public function setItemName($item_name)
    {
        $this->container['item_name'] = $item_name;

        return $this;
    }

    /**
     * Gets original_total_price
     * @return double
     */
    public function getOriginalTotalPrice()
    {
        return $this->container['original_total_price'];
    }

    /**
     * Sets original_total_price
     * @param double $original_total_price
     * @return $this
     */
    public function setOriginalTotalPrice($original_total_price)
    {
        $this->container['original_total_price'] = $original_total_price;

        return $this;
    }

    /**
     * Gets original_unit_price
     * @return double
     */
    public function getOriginalUnitPrice()
    {
        return $this->container['original_unit_price'];
    }

    /**
     * Sets original_unit_price
     * @param double $original_unit_price
     * @return $this
     */
    public function setOriginalUnitPrice($original_unit_price)
    {
        $this->container['original_unit_price'] = $original_unit_price;

        return $this;
    }

    /**
     * Gets qty
     * @return int
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     * @param int $qty
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets sale_name
     * @return string
     */
    public function getSaleName()
    {
        return $this->container['sale_name'];
    }

    /**
     * Sets sale_name
     * @param string $sale_name
     * @return $this
     */
    public function setSaleName($sale_name)
    {
        $this->container['sale_name'] = $sale_name;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets sku_description
     * @return string
     */
    public function getSkuDescription()
    {
        return $this->container['sku_description'];
    }

    /**
     * Sets sku_description
     * @param string $sku_description
     * @return $this
     */
    public function setSkuDescription($sku_description)
    {
        $this->container['sku_description'] = $sku_description;

        return $this;
    }

    /**
     * Gets system_price
     * @return double
     */
    public function getSystemPrice()
    {
        return $this->container['system_price'];
    }

    /**
     * Sets system_price
     * @param double $system_price
     * @return $this
     */
    public function setSystemPrice($system_price)
    {
        $this->container['system_price'] = $system_price;

        return $this;
    }

    /**
     * Gets total_price
     * @return double
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     * @param double $total_price
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets type_hint
     * @return string
     */
    public function getTypeHint()
    {
        return $this->container['type_hint'];
    }

    /**
     * Sets type_hint
     * @param string $type_hint
     * @return $this
     */
    public function setTypeHint($type_hint)
    {
        $this->container['type_hint'] = $type_hint;

        return $this;
    }

    /**
     * Gets unit_price
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     * @param double $unit_price
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

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


