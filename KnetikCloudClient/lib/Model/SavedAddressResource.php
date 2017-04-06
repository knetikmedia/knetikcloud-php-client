<?php
/**
 * SavedAddressResource
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
 * SavedAddressResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SavedAddressResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SavedAddressResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'country_code' => 'string',
        'default' => 'bool',
        'first_name' => 'string',
        'id' => 'int',
        'last_name' => 'string',
        'name' => 'string',
        'phone1' => 'string',
        'phone2' => 'string',
        'postal_code' => 'string',
        'state_code' => 'string'
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
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'country_code' => 'country_code',
        'default' => 'default',
        'first_name' => 'first_name',
        'id' => 'id',
        'last_name' => 'last_name',
        'name' => 'name',
        'phone1' => 'phone1',
        'phone2' => 'phone2',
        'postal_code' => 'postal_code',
        'state_code' => 'state_code'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'country_code' => 'setCountryCode',
        'default' => 'setDefault',
        'first_name' => 'setFirstName',
        'id' => 'setId',
        'last_name' => 'setLastName',
        'name' => 'setName',
        'phone1' => 'setPhone1',
        'phone2' => 'setPhone2',
        'postal_code' => 'setPostalCode',
        'state_code' => 'setStateCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'country_code' => 'getCountryCode',
        'default' => 'getDefault',
        'first_name' => 'getFirstName',
        'id' => 'getId',
        'last_name' => 'getLastName',
        'name' => 'getName',
        'phone1' => 'getPhone1',
        'phone2' => 'getPhone2',
        'postal_code' => 'getPostalCode',
        'state_code' => 'getStateCode'
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
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone1'] = isset($data['phone1']) ? $data['phone1'] : null;
        $this->container['phone2'] = isset($data['phone2']) ? $data['phone2'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['address1'] === null) {
            $invalid_properties[] = "'address1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalid_properties[] = "'country_code' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalid_properties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalid_properties[] = "'last_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
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

        if ($this->container['address1'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['country_code'] === null) {
            return false;
        }
        if ($this->container['first_name'] === null) {
            return false;
        }
        if ($this->container['last_name'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 The first line of the address
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 A second line of the address
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city The city
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code The iso3 code for the country
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets default
     * @return bool
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The first name of the user
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

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
     * @param int $id The id of the address
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The last name of the user
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * @param string $name The name of the address
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone1
     * @return string
     */
    public function getPhone1()
    {
        return $this->container['phone1'];
    }

    /**
     * Sets phone1
     * @param string $phone1 The first phone number of the user
     * @return $this
     */
    public function setPhone1($phone1)
    {
        $this->container['phone1'] = $phone1;

        return $this;
    }

    /**
     * Gets phone2
     * @return string
     */
    public function getPhone2()
    {
        return $this->container['phone2'];
    }

    /**
     * Sets phone2
     * @param string $phone2 The second phone number of the user
     * @return $this
     */
    public function setPhone2($phone2)
    {
        $this->container['phone2'] = $phone2;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code The postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_code
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     * @param string $state_code The code for the state. Required if the country has states/provinces/equivalent
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

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


