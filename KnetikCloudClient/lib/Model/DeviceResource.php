<?php
/**
 * DeviceResource
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
 * DeviceResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeviceResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeviceResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorization' => 'string',
        'condition' => 'string',
        'created_date' => 'int',
        'data' => 'map[string,string]',
        'description' => 'string',
        'device_type' => 'string',
        'id' => 'int',
        'location' => 'string',
        'mac_address' => 'string',
        'make' => 'string',
        'model' => 'string',
        'name' => 'string',
        'os' => 'string',
        'serial' => 'string',
        'status' => 'string',
        'updated_date' => 'int',
        'user' => '\KnetikCloud\Model\SimpleUserResource'
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
        'authorization' => 'authorization',
        'condition' => 'condition',
        'created_date' => 'created_date',
        'data' => 'data',
        'description' => 'description',
        'device_type' => 'device_type',
        'id' => 'id',
        'location' => 'location',
        'mac_address' => 'mac_address',
        'make' => 'make',
        'model' => 'model',
        'name' => 'name',
        'os' => 'os',
        'serial' => 'serial',
        'status' => 'status',
        'updated_date' => 'updated_date',
        'user' => 'user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authorization' => 'setAuthorization',
        'condition' => 'setCondition',
        'created_date' => 'setCreatedDate',
        'data' => 'setData',
        'description' => 'setDescription',
        'device_type' => 'setDeviceType',
        'id' => 'setId',
        'location' => 'setLocation',
        'mac_address' => 'setMacAddress',
        'make' => 'setMake',
        'model' => 'setModel',
        'name' => 'setName',
        'os' => 'setOs',
        'serial' => 'setSerial',
        'status' => 'setStatus',
        'updated_date' => 'setUpdatedDate',
        'user' => 'setUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authorization' => 'getAuthorization',
        'condition' => 'getCondition',
        'created_date' => 'getCreatedDate',
        'data' => 'getData',
        'description' => 'getDescription',
        'device_type' => 'getDeviceType',
        'id' => 'getId',
        'location' => 'getLocation',
        'mac_address' => 'getMacAddress',
        'make' => 'getMake',
        'model' => 'getModel',
        'name' => 'getName',
        'os' => 'getOs',
        'serial' => 'getSerial',
        'status' => 'getStatus',
        'updated_date' => 'getUpdatedDate',
        'user' => 'getUser'
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

    const CONDITION_NEW = 'New';
    const CONDITION_DEFECTIVE = 'Defective';
    const CONDITION_RECONDITIONED = 'Reconditioned';
    const STATUS_ACTIVE = 'Active';
    const STATUS_PENDING_ACTIVE = 'PendingActive';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_REPAIR = 'Repair';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION_NEW,
            self::CONDITION_DEFECTIVE,
            self::CONDITION_RECONDITIONED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PENDING_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_REPAIR,
        ];
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['device_type'] = isset($data['device_type']) ? $data['device_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['serial'] = isset($data['serial']) ? $data['serial'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["New", "Defective", "Reconditioned"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'condition', must be one of 'New', 'Defective', 'Reconditioned'.";
        }

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        $allowed_values = ["Active", "PendingActive", "Inactive", "Repair"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'Active', 'PendingActive', 'Inactive', 'Repair'.";
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

        $allowed_values = ["New", "Defective", "Reconditioned"];
        if (!in_array($this->container['condition'], $allowed_values)) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        $allowed_values = ["Active", "PendingActive", "Inactive", "Repair"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorization
     * @return string
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     * @param string $authorization The authorization code for the device
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition The current condition of the device (New, Defective, Reconditioned)
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowed_values = array('New', 'Defective', 'Reconditioned');
        if (!is_null($condition) && (!in_array($condition, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'condition', must be one of 'New', 'Defective', 'Reconditioned'");
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets created_date
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param int $created_date The date the device log was created
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets data
     * @return map[string,string]
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param map[string,string] $data The key/value pairs for extended data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
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
     * @param string $description The description of the device
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets device_type
     * @return string
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     * @param string $device_type The type of the device
     * @return $this
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

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
     * @param int $id The unique ID for this device. Cannot be changed once created
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location The location of the device
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets mac_address
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     * @param string $mac_address The MAC (media access control) address of the device
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets make
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     * @param string $make The make of the device
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     * @param string $model The model of the device
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * @param string $name The name of the device
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets os
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     * @param string $os The OS (operating system) on the device
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets serial
     * @return string
     */
    public function getSerial()
    {
        return $this->container['serial'];
    }

    /**
     * Sets serial
     * @param string $serial The serial number of the device
     * @return $this
     */
    public function setSerial($serial)
    {
        $this->container['serial'] = $serial;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The current status the device (Active, Pending Active, Inactive, Repair
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('Active', 'PendingActive', 'Inactive', 'Repair');
        if (!is_null($status) && (!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'Active', 'PendingActive', 'Inactive', 'Repair'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updated_date
     * @return int
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     * @param int $updated_date The date the device log was updated
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets user
     * @return \KnetikCloud\Model\SimpleUserResource
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \KnetikCloud\Model\SimpleUserResource $user The user that owns the device
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


