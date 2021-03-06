<?php
/**
 * PropertyDefinitionResource
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
 * PropertyDefinitionResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PropertyDefinitionResource implements ArrayAccess
{
    const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PropertyDefinitionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'field_list' => '\KnetikCloud\Model\PropertyFieldListResource',
        'friendly_name' => 'string',
        'name' => 'string',
        'option_label_path' => 'string',
        'option_value_path' => 'string',
        'options_url' => 'string',
        'required' => 'bool',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'field_list' => null,
        'friendly_name' => null,
        'name' => null,
        'option_label_path' => null,
        'option_value_path' => null,
        'options_url' => null,
        'required' => null,
        'type' => null
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
        'description' => 'description',
        'field_list' => 'field_list',
        'friendly_name' => 'friendly_name',
        'name' => 'name',
        'option_label_path' => 'option_label_path',
        'option_value_path' => 'option_value_path',
        'options_url' => 'options_url',
        'required' => 'required',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'field_list' => 'setFieldList',
        'friendly_name' => 'setFriendlyName',
        'name' => 'setName',
        'option_label_path' => 'setOptionLabelPath',
        'option_value_path' => 'setOptionValuePath',
        'options_url' => 'setOptionsUrl',
        'required' => 'setRequired',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'field_list' => 'getFieldList',
        'friendly_name' => 'getFriendlyName',
        'name' => 'getName',
        'option_label_path' => 'getOptionLabelPath',
        'option_value_path' => 'getOptionValuePath',
        'options_url' => 'getOptionsUrl',
        'required' => 'getRequired',
        'type' => 'getType'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['field_list'] = isset($data['field_list']) ? $data['field_list'] : null;
        $this->container['friendly_name'] = isset($data['friendly_name']) ? $data['friendly_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['option_label_path'] = isset($data['option_label_path']) ? $data['option_label_path'] : null;
        $this->container['option_value_path'] = isset($data['option_value_path']) ? $data['option_value_path'] : null;
        $this->container['options_url'] = isset($data['options_url']) ? $data['options_url'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['required'] === null) {
            $invalid_properties[] = "'required' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['required'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
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
     * @param string $description The description of the property
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets field_list
     * @return \KnetikCloud\Model\PropertyFieldListResource
     */
    public function getFieldList()
    {
        return $this->container['field_list'];
    }

    /**
     * Sets field_list
     * @param \KnetikCloud\Model\PropertyFieldListResource $field_list A list of the fields on both the property definition and property of this type
     * @return $this
     */
    public function setFieldList($field_list)
    {
        $this->container['field_list'] = $field_list;

        return $this;
    }

    /**
     * Gets friendly_name
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     * @param string $friendly_name The friendly front-facing name of the property
     * @return $this
     */
    public function setFriendlyName($friendly_name)
    {
        $this->container['friendly_name'] = $friendly_name;

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
     * @param string $name The name of the property
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets option_label_path
     * @return string
     */
    public function getOptionLabelPath()
    {
        return $this->container['option_label_path'];
    }

    /**
     * Sets option_label_path
     * @param string $option_label_path The JSON path to the option label
     * @return $this
     */
    public function setOptionLabelPath($option_label_path)
    {
        $this->container['option_label_path'] = $option_label_path;

        return $this;
    }

    /**
     * Gets option_value_path
     * @return string
     */
    public function getOptionValuePath()
    {
        return $this->container['option_value_path'];
    }

    /**
     * Sets option_value_path
     * @param string $option_value_path The JSON path to the option value
     * @return $this
     */
    public function setOptionValuePath($option_value_path)
    {
        $this->container['option_value_path'] = $option_value_path;

        return $this;
    }

    /**
     * Gets options_url
     * @return string
     */
    public function getOptionsUrl()
    {
        return $this->container['options_url'];
    }

    /**
     * Sets options_url
     * @param string $options_url URL of service containing the property options (assumed JSON array)
     * @return $this
     */
    public function setOptionsUrl($options_url)
    {
        $this->container['options_url'] = $options_url;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required Whether the property is required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
     * @param string $type The type of the property. Used for polymorphic type recognition and thus must match an expected type with additional properties.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


