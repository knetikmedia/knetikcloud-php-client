<?php
/**
 * StateTaxResource
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
 * StateTaxResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StateTaxResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StateTaxResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country_iso3' => 'string',
        'federally_exempt' => 'bool',
        'name' => 'string',
        'rate' => 'double',
        'state_code' => 'string',
        'tax_shipping' => 'bool'
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
        'country_iso3' => 'country_iso3',
        'federally_exempt' => 'federally_exempt',
        'name' => 'name',
        'rate' => 'rate',
        'state_code' => 'state_code',
        'tax_shipping' => 'tax_shipping'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country_iso3' => 'setCountryIso3',
        'federally_exempt' => 'setFederallyExempt',
        'name' => 'setName',
        'rate' => 'setRate',
        'state_code' => 'setStateCode',
        'tax_shipping' => 'setTaxShipping'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country_iso3' => 'getCountryIso3',
        'federally_exempt' => 'getFederallyExempt',
        'name' => 'getName',
        'rate' => 'getRate',
        'state_code' => 'getStateCode',
        'tax_shipping' => 'getTaxShipping'
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
        $this->container['country_iso3'] = isset($data['country_iso3']) ? $data['country_iso3'] : null;
        $this->container['federally_exempt'] = isset($data['federally_exempt']) ? $data['federally_exempt'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['tax_shipping'] = isset($data['tax_shipping']) ? $data['tax_shipping'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['country_iso3'] === null) {
            $invalid_properties[] = "'country_iso3' can't be null";
        }
        if ($this->container['federally_exempt'] === null) {
            $invalid_properties[] = "'federally_exempt' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalid_properties[] = "'rate' can't be null";
        }
        if ($this->container['state_code'] === null) {
            $invalid_properties[] = "'state_code' can't be null";
        }
        if ($this->container['tax_shipping'] === null) {
            $invalid_properties[] = "'tax_shipping' can't be null";
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

        if ($this->container['country_iso3'] === null) {
            return false;
        }
        if ($this->container['federally_exempt'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['rate'] === null) {
            return false;
        }
        if ($this->container['state_code'] === null) {
            return false;
        }
        if ($this->container['tax_shipping'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets country_iso3
     * @return string
     */
    public function getCountryIso3()
    {
        return $this->container['country_iso3'];
    }

    /**
     * Sets country_iso3
     * @param string $country_iso3 The iso3 code of the country, cannot be changed
     * @return $this
     */
    public function setCountryIso3($country_iso3)
    {
        $this->container['country_iso3'] = $country_iso3;

        return $this;
    }

    /**
     * Gets federally_exempt
     * @return bool
     */
    public function getFederallyExempt()
    {
        return $this->container['federally_exempt'];
    }

    /**
     * Sets federally_exempt
     * @param bool $federally_exempt Whether the state is exempt from paying the country tax
     * @return $this
     */
    public function setFederallyExempt($federally_exempt)
    {
        $this->container['federally_exempt'] = $federally_exempt;

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
     * @param string $name The name of the tax
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rate
     * @return double
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     * @param double $rate The tax rate as a percentage to a maximum of two decimal places (1.5 means 1.5%)
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

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
     * @param string $state_code The code of the state, cannot be changed
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets tax_shipping
     * @return bool
     */
    public function getTaxShipping()
    {
        return $this->container['tax_shipping'];
    }

    /**
     * Sets tax_shipping
     * @param bool $tax_shipping Whether the tax applies to shipping costs
     * @return $this
     */
    public function setTaxShipping($tax_shipping)
    {
        $this->container['tax_shipping'] = $tax_shipping;

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


