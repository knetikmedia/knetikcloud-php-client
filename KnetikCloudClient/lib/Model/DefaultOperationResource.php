<?php
/**
 * DefaultOperationResource
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
 * DefaultOperationResource Class Doc Comment
 *
 * @category    Class
 * @description Expressions are instructions for the rule engine to resolve certain values. For example instead of &#x60;user 1&#x60; it&#39;d state &#x60;user provided by the event&#x60;. Full list and definitions available at GET /bre/expressions.
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DefaultOperationResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DefaultOperationResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'args' => '\KnetikCloud\Model\ExpressionResource[]',
        'definition' => 'string',
        'op' => 'string',
        'return_type' => 'string',
        'supported_operators' => '\KnetikCloud\Model\OperationDefinitionResource[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'args' => null,
        'definition' => null,
        'op' => null,
        'return_type' => null,
        'supported_operators' => null,
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
        'args' => 'args',
        'definition' => 'definition',
        'op' => 'op',
        'return_type' => 'return_type',
        'supported_operators' => 'supported_operators',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'args' => 'setArgs',
        'definition' => 'setDefinition',
        'op' => 'setOp',
        'return_type' => 'setReturnType',
        'supported_operators' => 'setSupportedOperators',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'args' => 'getArgs',
        'definition' => 'getDefinition',
        'op' => 'getOp',
        'return_type' => 'getReturnType',
        'supported_operators' => 'getSupportedOperators',
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
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['op'] = isset($data['op']) ? $data['op'] : null;
        $this->container['return_type'] = isset($data['return_type']) ? $data['return_type'] : null;
        $this->container['supported_operators'] = isset($data['supported_operators']) ? $data['supported_operators'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['args'] === null) {
            $invalid_properties[] = "'args' can't be null";
        }
        if ($this->container['op'] === null) {
            $invalid_properties[] = "'op' can't be null";
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

        if ($this->container['args'] === null) {
            return false;
        }
        if ($this->container['op'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets args
     * @return \KnetikCloud\Model\ExpressionResource[]
     */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
     * Sets args
     * @param \KnetikCloud\Model\ExpressionResource[] $args The arguments the operator apply to. See notes for details.
     * @return $this
     */
    public function setArgs($args)
    {
        $this->container['args'] = $args;

        return $this;
    }

    /**
     * Gets definition
     * @return string
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition
     * @param string $definition
     * @return $this
     */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets op
     * @return string
     */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
     * Sets op
     * @param string $op The operator to be used in this predicate. See notes for details.
     * @return $this
     */
    public function setOp($op)
    {
        $this->container['op'] = $op;

        return $this;
    }

    /**
     * Gets return_type
     * @return string
     */
    public function getReturnType()
    {
        return $this->container['return_type'];
    }

    /**
     * Sets return_type
     * @param string $return_type
     * @return $this
     */
    public function setReturnType($return_type)
    {
        $this->container['return_type'] = $return_type;

        return $this;
    }

    /**
     * Gets supported_operators
     * @return \KnetikCloud\Model\OperationDefinitionResource[]
     */
    public function getSupportedOperators()
    {
        return $this->container['supported_operators'];
    }

    /**
     * Sets supported_operators
     * @param \KnetikCloud\Model\OperationDefinitionResource[] $supported_operators The operators supported by this expression
     * @return $this
     */
    public function setSupportedOperators($supported_operators)
    {
        $this->container['supported_operators'] = $supported_operators;

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
     * @param string $type
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


