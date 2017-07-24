<?php
/**
 * QuestionResource
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
 * QuestionResource Class Doc Comment
 *
 * @category    Class
 * @package     KnetikCloud
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionResource implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionResource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_properties' => 'map[string,\KnetikCloud\Model\Property]',
        'answers' => '\KnetikCloud\Model\AnswerResource[]',
        'category' => '\KnetikCloud\Model\NestedCategory',
        'created_date' => 'int',
        'difficulty' => 'int',
        'id' => 'string',
        'import_id' => 'int',
        'published_date' => 'int',
        'question' => '\KnetikCloud\Model\Property',
        'source1' => 'string',
        'source2' => 'string',
        'tags' => 'string[]',
        'template' => 'string',
        'updated_date' => 'int',
        'vendor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_properties' => null,
        'answers' => null,
        'category' => null,
        'created_date' => 'int64',
        'difficulty' => 'int32',
        'id' => null,
        'import_id' => 'int64',
        'published_date' => 'int64',
        'question' => null,
        'source1' => null,
        'source2' => null,
        'tags' => null,
        'template' => null,
        'updated_date' => 'int64',
        'vendor' => null
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
        'additional_properties' => 'additional_properties',
        'answers' => 'answers',
        'category' => 'category',
        'created_date' => 'created_date',
        'difficulty' => 'difficulty',
        'id' => 'id',
        'import_id' => 'import_id',
        'published_date' => 'published_date',
        'question' => 'question',
        'source1' => 'source1',
        'source2' => 'source2',
        'tags' => 'tags',
        'template' => 'template',
        'updated_date' => 'updated_date',
        'vendor' => 'vendor'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'additional_properties' => 'setAdditionalProperties',
        'answers' => 'setAnswers',
        'category' => 'setCategory',
        'created_date' => 'setCreatedDate',
        'difficulty' => 'setDifficulty',
        'id' => 'setId',
        'import_id' => 'setImportId',
        'published_date' => 'setPublishedDate',
        'question' => 'setQuestion',
        'source1' => 'setSource1',
        'source2' => 'setSource2',
        'tags' => 'setTags',
        'template' => 'setTemplate',
        'updated_date' => 'setUpdatedDate',
        'vendor' => 'setVendor'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'additional_properties' => 'getAdditionalProperties',
        'answers' => 'getAnswers',
        'category' => 'getCategory',
        'created_date' => 'getCreatedDate',
        'difficulty' => 'getDifficulty',
        'id' => 'getId',
        'import_id' => 'getImportId',
        'published_date' => 'getPublishedDate',
        'question' => 'getQuestion',
        'source1' => 'getSource1',
        'source2' => 'getSource2',
        'tags' => 'getTags',
        'template' => 'getTemplate',
        'updated_date' => 'getUpdatedDate',
        'vendor' => 'getVendor'
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
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
        $this->container['answers'] = isset($data['answers']) ? $data['answers'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['difficulty'] = isset($data['difficulty']) ? $data['difficulty'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['import_id'] = isset($data['import_id']) ? $data['import_id'] : null;
        $this->container['published_date'] = isset($data['published_date']) ? $data['published_date'] : null;
        $this->container['question'] = isset($data['question']) ? $data['question'] : null;
        $this->container['source1'] = isset($data['source1']) ? $data['source1'] : null;
        $this->container['source2'] = isset($data['source2']) ? $data['source2'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['updated_date'] = isset($data['updated_date']) ? $data['updated_date'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['category'] === null) {
            $invalid_properties[] = "'category' can't be null";
        }
        if ($this->container['difficulty'] === null) {
            $invalid_properties[] = "'difficulty' can't be null";
        }
        if ($this->container['question'] === null) {
            $invalid_properties[] = "'question' can't be null";
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

        if ($this->container['category'] === null) {
            return false;
        }
        if ($this->container['difficulty'] === null) {
            return false;
        }
        if ($this->container['question'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets additional_properties
     * @return map[string,\KnetikCloud\Model\Property]
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     * @param map[string,\KnetikCloud\Model\Property] $additional_properties A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

        return $this;
    }

    /**
     * Gets answers
     * @return \KnetikCloud\Model\AnswerResource[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * Sets answers
     * @param \KnetikCloud\Model\AnswerResource[] $answers The list of available answers
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * Gets category
     * @return \KnetikCloud\Model\NestedCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     * @param \KnetikCloud\Model\NestedCategory $category The category for the question
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

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
     * @param int $created_date The date/time this resource was created in seconds since unix epoch
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets difficulty
     * @return int
     */
    public function getDifficulty()
    {
        return $this->container['difficulty'];
    }

    /**
     * Sets difficulty
     * @param int $difficulty The difficulty of the question
     * @return $this
     */
    public function setDifficulty($difficulty)
    {
        $this->container['difficulty'] = $difficulty;

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
     * @param string $id The unique ID for that resource
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets import_id
     * @return int
     */
    public function getImportId()
    {
        return $this->container['import_id'];
    }

    /**
     * Sets import_id
     * @param int $import_id The id of the import job that created the question, or null if not from an import
     * @return $this
     */
    public function setImportId($import_id)
    {
        $this->container['import_id'] = $import_id;

        return $this;
    }

    /**
     * Gets published_date
     * @return int
     */
    public function getPublishedDate()
    {
        return $this->container['published_date'];
    }

    /**
     * Sets published_date
     * @param int $published_date When the question becomes available, null for never, in seconds since epoch
     * @return $this
     */
    public function setPublishedDate($published_date)
    {
        $this->container['published_date'] = $published_date;

        return $this;
    }

    /**
     * Gets question
     * @return \KnetikCloud\Model\Property
     */
    public function getQuestion()
    {
        return $this->container['question'];
    }

    /**
     * Sets question
     * @param \KnetikCloud\Model\Property $question The question. Different 'type' values indicate different structures as the question may be test, image, etc. See information on additional properties for the list and their structures
     * @return $this
     */
    public function setQuestion($question)
    {
        $this->container['question'] = $question;

        return $this;
    }

    /**
     * Gets source1
     * @return string
     */
    public function getSource1()
    {
        return $this->container['source1'];
    }

    /**
     * Sets source1
     * @param string $source1 The first source of the question
     * @return $this
     */
    public function setSource1($source1)
    {
        $this->container['source1'] = $source1;

        return $this;
    }

    /**
     * Gets source2
     * @return string
     */
    public function getSource2()
    {
        return $this->container['source2'];
    }

    /**
     * Sets source2
     * @param string $source2 The second source of the question
     * @return $this
     */
    public function setSource2($source2)
    {
        $this->container['source2'] = $source2;

        return $this;
    }

    /**
     * Gets tags
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string[] $tags The list of tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets template
     * @return string
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     * @param string $template A question template this question is validated against (private). May be null and no validation of additional_properties will be done
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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
     * @param int $updated_date The date/time this resource was last updated in seconds since unix epoch
     * @return $this
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets vendor
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param string $vendor The supplier of the question
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

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


