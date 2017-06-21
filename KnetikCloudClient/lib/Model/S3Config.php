<?php
/**
 * S3Config
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
 * S3Config Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class S3Config implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'S3Config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket_name' => 'string',
        'cdn_url' => 'string',
        'region' => 'string',
        'upload_prefix' => 'string'
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
        'bucket_name' => 'bucket_name',
        'cdn_url' => 'cdn_url',
        'region' => 'region',
        'upload_prefix' => 'upload_prefix'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bucket_name' => 'setBucketName',
        'cdn_url' => 'setCdnUrl',
        'region' => 'setRegion',
        'upload_prefix' => 'setUploadPrefix'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bucket_name' => 'getBucketName',
        'cdn_url' => 'getCdnUrl',
        'region' => 'getRegion',
        'upload_prefix' => 'getUploadPrefix'
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
        $this->container['bucket_name'] = isset($data['bucket_name']) ? $data['bucket_name'] : null;
        $this->container['cdn_url'] = isset($data['cdn_url']) ? $data['cdn_url'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['upload_prefix'] = isset($data['upload_prefix']) ? $data['upload_prefix'] : null;
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
     * Gets bucket_name
     * @return string
     */
    public function getBucketName()
    {
        return $this->container['bucket_name'];
    }

    /**
     * Sets bucket_name
     * @param string $bucket_name
     * @return $this
     */
    public function setBucketName($bucket_name)
    {
        $this->container['bucket_name'] = $bucket_name;

        return $this;
    }

    /**
     * Gets cdn_url
     * @return string
     */
    public function getCdnUrl()
    {
        return $this->container['cdn_url'];
    }

    /**
     * Sets cdn_url
     * @param string $cdn_url
     * @return $this
     */
    public function setCdnUrl($cdn_url)
    {
        $this->container['cdn_url'] = $cdn_url;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets upload_prefix
     * @return string
     */
    public function getUploadPrefix()
    {
        return $this->container['upload_prefix'];
    }

    /**
     * Sets upload_prefix
     * @param string $upload_prefix
     * @return $this
     */
    public function setUploadPrefix($upload_prefix)
    {
        $this->container['upload_prefix'] = $upload_prefix;

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

