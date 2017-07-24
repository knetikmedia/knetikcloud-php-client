<?php
/**
 * ImageGroupPropertyDefinitionResource
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
 * ImageGroupPropertyDefinitionResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ImageGroupPropertyDefinitionResource extends FileGroupPropertyDefinitionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ImageGroupPropertyDefinitionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_height' => 'int',
        'max_width' => 'int',
        'min_height' => 'int',
        'min_width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_height' => 'int32',
        'max_width' => 'int32',
        'min_height' => 'int32',
        'min_width' => 'int32'
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
        'max_height' => 'max_height',
        'max_width' => 'max_width',
        'min_height' => 'min_height',
        'min_width' => 'min_width'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'max_height' => 'setMaxHeight',
        'max_width' => 'setMaxWidth',
        'min_height' => 'setMinHeight',
        'min_width' => 'setMinWidth'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'max_height' => 'getMaxHeight',
        'max_width' => 'getMaxWidth',
        'min_height' => 'getMinHeight',
        'min_width' => 'getMinWidth'
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

        $this->container['max_height'] = isset($data['max_height']) ? $data['max_height'] : null;
        $this->container['max_width'] = isset($data['max_width']) ? $data['max_width'] : null;
        $this->container['min_height'] = isset($data['min_height']) ? $data['min_height'] : null;
        $this->container['min_width'] = isset($data['min_width']) ? $data['min_width'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

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

        return true;
    }


    /**
     * Gets max_height
     * @return int
     */
    public function getMaxHeight()
    {
        return $this->container['max_height'];
    }

    /**
     * Sets max_height
     * @param int $max_height If provided, the maximum height of each image
     * @return $this
     */
    public function setMaxHeight($max_height)
    {
        $this->container['max_height'] = $max_height;

        return $this;
    }

    /**
     * Gets max_width
     * @return int
     */
    public function getMaxWidth()
    {
        return $this->container['max_width'];
    }

    /**
     * Sets max_width
     * @param int $max_width If provided, the maximum width of each image
     * @return $this
     */
    public function setMaxWidth($max_width)
    {
        $this->container['max_width'] = $max_width;

        return $this;
    }

    /**
     * Gets min_height
     * @return int
     */
    public function getMinHeight()
    {
        return $this->container['min_height'];
    }

    /**
     * Sets min_height
     * @param int $min_height If provided, the minimum height of each image
     * @return $this
     */
    public function setMinHeight($min_height)
    {
        $this->container['min_height'] = $min_height;

        return $this;
    }

    /**
     * Gets min_width
     * @return int
     */
    public function getMinWidth()
    {
        return $this->container['min_width'];
    }

    /**
     * Sets min_width
     * @param int $min_width If provided, the minumum width of each image
     * @return $this
     */
    public function setMinWidth($min_width)
    {
        $this->container['min_width'] = $min_width;

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


