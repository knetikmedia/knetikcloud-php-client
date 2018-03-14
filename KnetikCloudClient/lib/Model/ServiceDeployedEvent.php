<?php
/**
 * ServiceDeployedEvent
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
 * ServiceDeployedEvent Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ServiceDeployedEvent extends BroadcastableEvent implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ServiceDeployedEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'events' => '\KnetikCloud\Model\BreTriggerResource[]',
        'resources' => '\KnetikCloud\Model\ResourceTypeDescription[]',
        'service_name' => 'string',
        'swagger_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'events' => null,
        'resources' => null,
        'service_name' => null,
        'swagger_url' => null
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
        'events' => 'events',
        'resources' => 'resources',
        'service_name' => 'service_name',
        'swagger_url' => 'swagger_url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'events' => 'setEvents',
        'resources' => 'setResources',
        'service_name' => 'setServiceName',
        'swagger_url' => 'setSwaggerUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'events' => 'getEvents',
        'resources' => 'getResources',
        'service_name' => 'getServiceName',
        'swagger_url' => 'getSwaggerUrl'
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

        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['service_name'] = isset($data['service_name']) ? $data['service_name'] : null;
        $this->container['swagger_url'] = isset($data['swagger_url']) ? $data['swagger_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = parent::listInvalidProperties();

        if ($this->container['events'] === null) {
            $invalid_properties[] = "'events' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalid_properties[] = "'resources' can't be null";
        }
        if ($this->container['service_name'] === null) {
            $invalid_properties[] = "'service_name' can't be null";
        }
        if ($this->container['swagger_url'] === null) {
            $invalid_properties[] = "'swagger_url' can't be null";
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

        if ($this->container['events'] === null) {
            return false;
        }
        if ($this->container['resources'] === null) {
            return false;
        }
        if ($this->container['service_name'] === null) {
            return false;
        }
        if ($this->container['swagger_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets events
     * @return \KnetikCloud\Model\BreTriggerResource[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param \KnetikCloud\Model\BreTriggerResource[] $events The events fired by this service
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets resources
     * @return \KnetikCloud\Model\ResourceTypeDescription[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     * @param \KnetikCloud\Model\ResourceTypeDescription[] $resources The resources managed by this service
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets service_name
     * @return string
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     * @param string $service_name The unique name for the service. This serves as the unique identifier. Cannot be changed after creation
     * @return $this
     */
    public function setServiceName($service_name)
    {
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets swagger_url
     * @return string
     */
    public function getSwaggerUrl()
    {
        return $this->container['swagger_url'];
    }

    /**
     * Sets swagger_url
     * @param string $swagger_url The url of the swagger doc
     * @return $this
     */
    public function setSwaggerUrl($swagger_url)
    {
        $this->container['swagger_url'] = $swagger_url;

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

