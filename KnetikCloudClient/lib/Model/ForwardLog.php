<?php
/**
 * ForwardLog
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
 * ForwardLog Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ForwardLog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ForwardLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'end_date' => 'int',
        'error_msg' => 'string',
        'http_status_code' => 'int',
        'id' => 'string',
        'payload' => 'object',
        'response' => 'string',
        'retry_count' => 'int',
        'start_date' => 'int',
        'url' => 'string'
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
        'end_date' => 'end_date',
        'error_msg' => 'error_msg',
        'http_status_code' => 'http_status_code',
        'id' => 'id',
        'payload' => 'payload',
        'response' => 'response',
        'retry_count' => 'retry_count',
        'start_date' => 'start_date',
        'url' => 'url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'end_date' => 'setEndDate',
        'error_msg' => 'setErrorMsg',
        'http_status_code' => 'setHttpStatusCode',
        'id' => 'setId',
        'payload' => 'setPayload',
        'response' => 'setResponse',
        'retry_count' => 'setRetryCount',
        'start_date' => 'setStartDate',
        'url' => 'setUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'end_date' => 'getEndDate',
        'error_msg' => 'getErrorMsg',
        'http_status_code' => 'getHttpStatusCode',
        'id' => 'getId',
        'payload' => 'getPayload',
        'response' => 'getResponse',
        'retry_count' => 'getRetryCount',
        'start_date' => 'getStartDate',
        'url' => 'getUrl'
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
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['error_msg'] = isset($data['error_msg']) ? $data['error_msg'] : null;
        $this->container['http_status_code'] = isset($data['http_status_code']) ? $data['http_status_code'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['retry_count'] = isset($data['retry_count']) ? $data['retry_count'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets end_date
     * @return int
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param int $end_date The end date of the forward log entry
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets error_msg
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->container['error_msg'];
    }

    /**
     * Sets error_msg
     * @param string $error_msg
     * @return $this
     */
    public function setErrorMsg($error_msg)
    {
        $this->container['error_msg'] = $error_msg;

        return $this;
    }

    /**
     * Gets http_status_code
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->container['http_status_code'];
    }

    /**
     * Sets http_status_code
     * @param int $http_status_code The http status code the forward log entry
     * @return $this
     */
    public function setHttpStatusCode($http_status_code)
    {
        $this->container['http_status_code'] = $http_status_code;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The id of the forward log entry
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payload
     * @return object
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     * @param object $payload The payload of the forward log entry
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets response
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     * @param string $response The response string of the forward log entry
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets retry_count
     * @return int
     */
    public function getRetryCount()
    {
        return $this->container['retry_count'];
    }

    /**
     * Sets retry_count
     * @param int $retry_count The retry count of the forward log entry
     * @return $this
     */
    public function setRetryCount($retry_count)
    {
        $this->container['retry_count'] = $retry_count;

        return $this;
    }

    /**
     * Gets start_date
     * @return int
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param int $start_date The start date of the forward log entry
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url The endpoint url of the forward log entry
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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

