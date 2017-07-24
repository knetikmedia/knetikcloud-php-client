<?php
/**
 * CartShippingAddressRequest
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
 * CartShippingAddressRequest Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartShippingAddressRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartShippingAddressRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'city' => 'string',
        'country_code_iso3' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'name_prefix' => 'string',
        'order_notes' => 'string',
        'phone_number' => 'string',
        'postal_state_code' => 'string',
        'shipping_address_line1' => 'string',
        'shipping_address_line2' => 'string',
        'zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'city' => null,
        'country_code_iso3' => null,
        'email' => null,
        'first_name' => null,
        'last_name' => null,
        'name_prefix' => null,
        'order_notes' => null,
        'phone_number' => null,
        'postal_state_code' => null,
        'shipping_address_line1' => null,
        'shipping_address_line2' => null,
        'zip' => null
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
        'city' => 'city',
        'country_code_iso3' => 'country_code_iso3',
        'email' => 'email',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'name_prefix' => 'name_prefix',
        'order_notes' => 'order_notes',
        'phone_number' => 'phone_number',
        'postal_state_code' => 'postal_state_code',
        'shipping_address_line1' => 'shipping_address_line1',
        'shipping_address_line2' => 'shipping_address_line2',
        'zip' => 'zip'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'country_code_iso3' => 'setCountryCodeIso3',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'name_prefix' => 'setNamePrefix',
        'order_notes' => 'setOrderNotes',
        'phone_number' => 'setPhoneNumber',
        'postal_state_code' => 'setPostalStateCode',
        'shipping_address_line1' => 'setShippingAddressLine1',
        'shipping_address_line2' => 'setShippingAddressLine2',
        'zip' => 'setZip'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'country_code_iso3' => 'getCountryCodeIso3',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'name_prefix' => 'getNamePrefix',
        'order_notes' => 'getOrderNotes',
        'phone_number' => 'getPhoneNumber',
        'postal_state_code' => 'getPostalStateCode',
        'shipping_address_line1' => 'getShippingAddressLine1',
        'shipping_address_line2' => 'getShippingAddressLine2',
        'zip' => 'getZip'
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code_iso3'] = isset($data['country_code_iso3']) ? $data['country_code_iso3'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['name_prefix'] = isset($data['name_prefix']) ? $data['name_prefix'] : null;
        $this->container['order_notes'] = isset($data['order_notes']) ? $data['order_notes'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['postal_state_code'] = isset($data['postal_state_code']) ? $data['postal_state_code'] : null;
        $this->container['shipping_address_line1'] = isset($data['shipping_address_line1']) ? $data['shipping_address_line1'] : null;
        $this->container['shipping_address_line2'] = isset($data['shipping_address_line2']) ? $data['shipping_address_line2'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
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
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city The city of the user
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code_iso3
     * @return string
     */
    public function getCountryCodeIso3()
    {
        return $this->container['country_code_iso3'];
    }

    /**
     * Sets country_code_iso3
     * @param string $country_code_iso3 The country code of the user
     * @return $this
     */
    public function setCountryCodeIso3($country_code_iso3)
    {
        $this->container['country_code_iso3'] = $country_code_iso3;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email The email of the user
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets name_prefix
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->container['name_prefix'];
    }

    /**
     * Sets name_prefix
     * @param string $name_prefix
     * @return $this
     */
    public function setNamePrefix($name_prefix)
    {
        $this->container['name_prefix'] = $name_prefix;

        return $this;
    }

    /**
     * Gets order_notes
     * @return string
     */
    public function getOrderNotes()
    {
        return $this->container['order_notes'];
    }

    /**
     * Sets order_notes
     * @param string $order_notes The order notes the user
     * @return $this
     */
    public function setOrderNotes($order_notes)
    {
        $this->container['order_notes'] = $order_notes;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number The phone number of the user
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postal_state_code
     * @return string
     */
    public function getPostalStateCode()
    {
        return $this->container['postal_state_code'];
    }

    /**
     * Sets postal_state_code
     * @param string $postal_state_code The postal state code of the user
     * @return $this
     */
    public function setPostalStateCode($postal_state_code)
    {
        $this->container['postal_state_code'] = $postal_state_code;

        return $this;
    }

    /**
     * Gets shipping_address_line1
     * @return string
     */
    public function getShippingAddressLine1()
    {
        return $this->container['shipping_address_line1'];
    }

    /**
     * Sets shipping_address_line1
     * @param string $shipping_address_line1 The shipping address of the user, first line
     * @return $this
     */
    public function setShippingAddressLine1($shipping_address_line1)
    {
        $this->container['shipping_address_line1'] = $shipping_address_line1;

        return $this;
    }

    /**
     * Gets shipping_address_line2
     * @return string
     */
    public function getShippingAddressLine2()
    {
        return $this->container['shipping_address_line2'];
    }

    /**
     * Sets shipping_address_line2
     * @param string $shipping_address_line2 The shipping address of the user, second line
     * @return $this
     */
    public function setShippingAddressLine2($shipping_address_line2)
    {
        $this->container['shipping_address_line2'] = $shipping_address_line2;

        return $this;
    }

    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     * @param string $zip The zipcode of the user
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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


