<?php
/**
 * ModelClass
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  EdLink
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Edlink Graph API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2.0.0
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EdLink\Model;

use ArrayAccess;
use EdLink\ObjectSerializer;

/**
 * ModelClass Class Doc Comment
 *
 * @category Class
 * @package  EdLink
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ModelClass implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Class';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => '\DateTime',
        'updated_date' => '\DateTime',
        'properties' => 'object',
        'name' => 'string',
        'description' => 'string',
        'picture_url' => 'string',
        'locale' => 'string',
        'time_zone' => 'string',
        'subjects' => 'string[]',
        'grade_levels' => 'string[]',
        'periods' => 'string[]',
        'state' => 'string',
        'session_ids' => 'string[]',
        'course_id' => 'string',
        'school_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'created_date' => 'date-time',
        'updated_date' => 'date-time',
        'properties' => null,
        'name' => null,
        'description' => null,
        'picture_url' => null,
        'locale' => null,
        'time_zone' => null,
        'subjects' => null,
        'grade_levels' => null,
        'periods' => 'uuid',
        'state' => null,
        'session_ids' => 'uuid',
        'course_id' => 'uuid',
        'school_id' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_date' => 'created_date',
        'updated_date' => 'updated_date',
        'properties' => 'properties',
        'name' => 'name',
        'description' => 'description',
        'picture_url' => 'picture_url',
        'locale' => 'locale',
        'time_zone' => 'time_zone',
        'subjects' => 'subjects',
        'grade_levels' => 'grade_levels',
        'periods' => 'periods',
        'state' => 'state',
        'session_ids' => 'session_ids',
        'course_id' => 'course_id',
        'school_id' => 'school_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'updated_date' => 'setUpdatedDate',
        'properties' => 'setProperties',
        'name' => 'setName',
        'description' => 'setDescription',
        'picture_url' => 'setPictureUrl',
        'locale' => 'setLocale',
        'time_zone' => 'setTimeZone',
        'subjects' => 'setSubjects',
        'grade_levels' => 'setGradeLevels',
        'periods' => 'setPeriods',
        'state' => 'setState',
        'session_ids' => 'setSessionIds',
        'course_id' => 'setCourseId',
        'school_id' => 'setSchoolId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'updated_date' => 'getUpdatedDate',
        'properties' => 'getProperties',
        'name' => 'getName',
        'description' => 'getDescription',
        'picture_url' => 'getPictureUrl',
        'locale' => 'getLocale',
        'time_zone' => 'getTimeZone',
        'subjects' => 'getSubjects',
        'grade_levels' => 'getGradeLevels',
        'periods' => 'getPeriods',
        'state' => 'getState',
        'session_ids' => 'getSessionIds',
        'course_id' => 'getCourseId',
        'school_id' => 'getSchoolId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const SUBJECTS_CEDS_01 = 'CEDS.01';
    const SUBJECTS_CEDS_02 = 'CEDS.02';
    const SUBJECTS_CEDS_03 = 'CEDS.03';
    const SUBJECTS_CEDS_04 = 'CEDS.04';
    const SUBJECTS_CEDS_05 = 'CEDS.05';
    const SUBJECTS_CEDS_07 = 'CEDS.07';
    const SUBJECTS_CEDS_08 = 'CEDS.08';
    const SUBJECTS_CEDS_09 = 'CEDS.09';
    const SUBJECTS_CEDS_10 = 'CEDS.10';
    const SUBJECTS_CEDS_11 = 'CEDS.11';
    const SUBJECTS_CEDS_12 = 'CEDS.12';
    const SUBJECTS_CEDS_13 = 'CEDS.13';
    const SUBJECTS_CEDS_14 = 'CEDS.14';
    const SUBJECTS_CEDS_15 = 'CEDS.15';
    const SUBJECTS_CEDS_16 = 'CEDS.16';
    const SUBJECTS_CEDS_17 = 'CEDS.17';
    const SUBJECTS_CEDS_18 = 'CEDS.18';
    const SUBJECTS_CEDS_19 = 'CEDS.19';
    const SUBJECTS_CEDS_20 = 'CEDS.20';
    const SUBJECTS_CEDS_21 = 'CEDS.21';
    const SUBJECTS_CEDS_22 = 'CEDS.22';
    const SUBJECTS_CEDS_23 = 'CEDS.23';
    const SUBJECTS_CEDS_24 = 'CEDS.24';
    const SUBJECTS_EL_01 = 'EL.01';
    const SUBJECTS_EL_02 = 'EL.02';
    const GRADE_LEVELS_BIRTH = 'Birth';
    const GRADE_LEVELS_PRENATAL = 'Prenatal';
    const GRADE_LEVELS_IT = 'IT';
    const GRADE_LEVELS_PR = 'PR';
    const GRADE_LEVELS_PK = 'PK';
    const GRADE_LEVELS_TK = 'TK';
    const GRADE_LEVELS_KG = 'KG';
    const GRADE_LEVELS__01 = '01';
    const GRADE_LEVELS__02 = '02';
    const GRADE_LEVELS__03 = '03';
    const GRADE_LEVELS__04 = '04';
    const GRADE_LEVELS__05 = '05';
    const GRADE_LEVELS__06 = '06';
    const GRADE_LEVELS__07 = '07';
    const GRADE_LEVELS__08 = '08';
    const GRADE_LEVELS__09 = '09';
    const GRADE_LEVELS__10 = '10';
    const GRADE_LEVELS__11 = '11';
    const GRADE_LEVELS__12 = '12';
    const GRADE_LEVELS__13 = '13';
    const GRADE_LEVELS_PS = 'PS';
    const GRADE_LEVELS_UG = 'UG';
    const GRADE_LEVELS_OTHER = 'Other';
    const STATE_TEMPLATE = 'template';
    const STATE_UPCOMING = 'upcoming';
    const STATE_INACTIVE = 'inactive';
    const STATE_ACTIVE = 'active';
    const STATE_COMPLETED = 'completed';
    const STATE_ARCHIVED = 'archived';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubjectsAllowableValues()
    {
        return [
            self::SUBJECTS_CEDS_01,
            self::SUBJECTS_CEDS_02,
            self::SUBJECTS_CEDS_03,
            self::SUBJECTS_CEDS_04,
            self::SUBJECTS_CEDS_05,
            self::SUBJECTS_CEDS_07,
            self::SUBJECTS_CEDS_08,
            self::SUBJECTS_CEDS_09,
            self::SUBJECTS_CEDS_10,
            self::SUBJECTS_CEDS_11,
            self::SUBJECTS_CEDS_12,
            self::SUBJECTS_CEDS_13,
            self::SUBJECTS_CEDS_14,
            self::SUBJECTS_CEDS_15,
            self::SUBJECTS_CEDS_16,
            self::SUBJECTS_CEDS_17,
            self::SUBJECTS_CEDS_18,
            self::SUBJECTS_CEDS_19,
            self::SUBJECTS_CEDS_20,
            self::SUBJECTS_CEDS_21,
            self::SUBJECTS_CEDS_22,
            self::SUBJECTS_CEDS_23,
            self::SUBJECTS_CEDS_24,
            self::SUBJECTS_EL_01,
            self::SUBJECTS_EL_02,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_TEMPLATE,
            self::STATE_UPCOMING,
            self::STATE_INACTIVE,
            self::STATE_ACTIVE,
            self::STATE_COMPLETED,
            self::STATE_ARCHIVED,
        ];
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['created_date'] = $data['created_date'] ?? null;
        $this->container['updated_date'] = $data['updated_date'] ?? null;
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['picture_url'] = $data['picture_url'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['time_zone'] = $data['time_zone'] ?? null;
        $this->container['subjects'] = $data['subjects'] ?? null;
        $this->container['grade_levels'] = $data['grade_levels'] ?? null;
        $this->container['periods'] = $data['periods'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['session_ids'] = $data['session_ids'] ?? null;
        $this->container['course_id'] = $data['course_id'] ?? null;
        $this->container['school_id'] = $data['school_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created_date'] === null) {
            $invalidProperties[] = "'created_date' can't be null";
        }
        if ($this->container['updated_date'] === null) {
            $invalidProperties[] = "'updated_date' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['picture_url'] === null) {
            $invalidProperties[] = "'picture_url' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['time_zone'] === null) {
            $invalidProperties[] = "'time_zone' can't be null";
        }
        if ($this->container['subjects'] === null) {
            $invalidProperties[] = "'subjects' can't be null";
        }
        if ($this->container['grade_levels'] === null) {
            $invalidProperties[] = "'grade_levels' can't be null";
        }
        if ($this->container['periods'] === null) {
            $invalidProperties[] = "'periods' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['session_ids'] === null) {
            $invalidProperties[] = "'session_ids' can't be null";
        }
        if ($this->container['course_id'] === null) {
            $invalidProperties[] = "'course_id' can't be null";
        }
        if ($this->container['school_id'] === null) {
            $invalidProperties[] = "'school_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets updated_date
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->container['updated_date'];
    }

    /**
     * Sets updated_date
     *
     * @param \DateTime $updated_date updated_date
     *
     * @return self
     */
    public function setUpdatedDate($updated_date)
    {
        $this->container['updated_date'] = $updated_date;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return object
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param object $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets picture_url
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->container['picture_url'];
    }

    /**
     * Sets picture_url
     *
     * @param string $picture_url picture_url
     *
     * @return self
     */
    public function setPictureUrl($picture_url)
    {
        $this->container['picture_url'] = $picture_url;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets time_zone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     *
     * @param string $time_zone time_zone
     *
     * @return self
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets subjects
     *
     * @return string[]
     */
    public function getSubjects()
    {
        return $this->container['subjects'];
    }

    /**
     * Sets subjects
     *
     * @param string[] $subjects [https://ed.link/docs/api/v2.0/models/external/enums/subject](https://ed.link/docs/api/v2.0/models/external/enums/subject)
     *
     * @return self
     */
    public function setSubjects($subjects)
    {
        $allowedValues = $this->getSubjectsAllowableValues();
        if (array_diff($subjects, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subjects', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subjects'] = $subjects;

        return $this;
    }

    /**
     * Gets grade_levels
     *
     * @return string[]
     */
    public function getGradeLevels()
    {
        return $this->container['grade_levels'];
    }

    /**
     * Sets grade_levels
     *
     * @param string[] $grade_levels [https://ed.link/docs/api/v2.0/models/external/enums/grade-level](https://ed.link/docs/api/v2.0/models/external/enums/grade-level)
     *
     * @return self
     */
    public function setGradeLevels($grade_levels)
    {
        $this->container['grade_levels'] = $grade_levels;

        return $this;
    }

    /**
     * Gets periods
     *
     * @return string[]
     */
    public function getPeriods()
    {
        return $this->container['periods'];
    }

    /**
     * Sets periods
     *
     * @param string[] $periods periods
     *
     * @return self
     */
    public function setPeriods($periods)
    {
        $this->container['periods'] = $periods;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets session_ids
     *
     * @return string[]
     */
    public function getSessionIds()
    {
        return $this->container['session_ids'];
    }

    /**
     * Sets session_ids
     *
     * @param string[] $session_ids session_ids
     *
     * @return self
     */
    public function setSessionIds($session_ids)
    {
        $this->container['session_ids'] = $session_ids;

        return $this;
    }

    /**
     * Gets course_id
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     *
     * @param string $course_id course_id
     *
     * @return self
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets school_id
     *
     * @return string
     */
    public function getSchoolId()
    {
        return $this->container['school_id'];
    }

    /**
     * Sets school_id
     *
     * @param string $school_id school_id
     *
     * @return self
     */
    public function setSchoolId($school_id)
    {
        $this->container['school_id'] = $school_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


