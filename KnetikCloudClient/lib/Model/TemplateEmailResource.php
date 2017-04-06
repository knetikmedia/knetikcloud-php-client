<?php
/**
 * TemplateEmailResource
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
 * TemplateEmailResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TemplateEmailResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TemplateEmailResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from' => 'string',
        'recipients' => 'int[]',
        'template_key' => 'string',
        'template_vars' => '\KnetikCloud\Model\KeyValuePairStringString_[]'
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
        'from' => 'from',
        'recipients' => 'recipients',
        'template_key' => 'template_key',
        'template_vars' => 'template_vars'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'recipients' => 'setRecipients',
        'template_key' => 'setTemplateKey',
        'template_vars' => 'setTemplateVars'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'recipients' => 'getRecipients',
        'template_key' => 'getTemplateKey',
        'template_vars' => 'getTemplateVars'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['template_key'] = isset($data['template_key']) ? $data['template_key'] : null;
        $this->container['template_vars'] = isset($data['template_vars']) ? $data['template_vars'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['recipients'] === null) {
            $invalid_properties[] = "'recipients' can't be null";
        }
        if ($this->container['template_key'] === null) {
            $invalid_properties[] = "'template_key' can't be null";
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

        if ($this->container['recipients'] === null) {
            return false;
        }
        if ($this->container['template_key'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param string $from Address to attribute the outgoing message to. Optional if the config email.out_address is set.
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets recipients
     * @return int[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     * @param int[] $recipients A list of user ids to send the message to.
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets template_key
     * @return string
     */
    public function getTemplateKey()
    {
        return $this->container['template_key'];
    }

    /**
     * Sets template_key
     * @param string $template_key The key for the template
     * @return $this
     */
    public function setTemplateKey($template_key)
    {
        $this->container['template_key'] = $template_key;

        return $this;
    }

    /**
     * Gets template_vars
     * @return \KnetikCloud\Model\KeyValuePairStringString_[]
     */
    public function getTemplateVars()
    {
        return $this->container['template_vars'];
    }

    /**
     * Sets template_vars
     * @param \KnetikCloud\Model\KeyValuePairStringString_[] $template_vars A list of variables to fill in the template
     * @return $this
     */
    public function setTemplateVars($template_vars)
    {
        $this->container['template_vars'] = $template_vars;

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


