<?php
/**
 * ContributionResource
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
 * ContributionResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ContributionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContributionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'artist' => '\KnetikCloud\Model\SimpleReferenceResourceLong_',
        'media' => '\KnetikCloud\Model\SimpleReferenceResourceLong_',
        'role' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'artist' => null,
        'media' => null,
        'role' => null
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
        'artist' => 'artist',
        'media' => 'media',
        'role' => 'role'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'artist' => 'setArtist',
        'media' => 'setMedia',
        'role' => 'setRole'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'artist' => 'getArtist',
        'media' => 'getMedia',
        'role' => 'getRole'
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
        $this->container['artist'] = isset($data['artist']) ? $data['artist'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['artist'] === null) {
            $invalid_properties[] = "'artist' can't be null";
        }
        if ($this->container['media'] === null) {
            $invalid_properties[] = "'media' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalid_properties[] = "'role' can't be null";
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

        if ($this->container['artist'] === null) {
            return false;
        }
        if ($this->container['media'] === null) {
            return false;
        }
        if ($this->container['role'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets artist
     * @return \KnetikCloud\Model\SimpleReferenceResourceLong_
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /**
     * Sets artist
     * @param \KnetikCloud\Model\SimpleReferenceResourceLong_ $artist A reference to the contributing artist
     * @return $this
     */
    public function setArtist($artist)
    {
        $this->container['artist'] = $artist;

        return $this;
    }

    /**
     * Gets media
     * @return \KnetikCloud\Model\SimpleReferenceResourceLong_
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     * @param \KnetikCloud\Model\SimpleReferenceResourceLong_ $media A reference to the media being contributed to
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets role
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     * @param string $role The nature of the contribution (role of the artist as in 'producer', 'performer', etc)
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

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


