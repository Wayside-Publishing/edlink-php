<?php
/**
 * Demographics
 *
 * PHP version 7.4
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EdLink\Model;

use \ArrayAccess;
use \EdLink\ObjectSerializer;

/**
 * Demographics Class Doc Comment
 *
 * @category Class
 * @package  EdLink
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Demographics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Demographics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'birthday' => '\DateTime',
        'gender' => 'string',
        'residence_status' => 'string',
        'english_language_learner' => 'bool',
        'country_of_birth' => 'string',
        'state_of_birth' => 'string',
        'city_of_birth' => 'string',
        'hispanic_or_latino_ethnicity' => 'bool',
        'races' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'birthday' => 'date-time',
        'gender' => null,
        'residence_status' => null,
        'english_language_learner' => null,
        'country_of_birth' => null,
        'state_of_birth' => null,
        'city_of_birth' => null,
        'hispanic_or_latino_ethnicity' => null,
        'races' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'birthday' => true,
		'gender' => true,
		'residence_status' => true,
		'english_language_learner' => true,
		'country_of_birth' => true,
		'state_of_birth' => true,
		'city_of_birth' => true,
		'hispanic_or_latino_ethnicity' => true,
		'races' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'birthday' => 'birthday',
        'gender' => 'gender',
        'residence_status' => 'residence_status',
        'english_language_learner' => 'english_language_learner',
        'country_of_birth' => 'country_of_birth',
        'state_of_birth' => 'state_of_birth',
        'city_of_birth' => 'city_of_birth',
        'hispanic_or_latino_ethnicity' => 'hispanic_or_latino_ethnicity',
        'races' => 'races'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'birthday' => 'setBirthday',
        'gender' => 'setGender',
        'residence_status' => 'setResidenceStatus',
        'english_language_learner' => 'setEnglishLanguageLearner',
        'country_of_birth' => 'setCountryOfBirth',
        'state_of_birth' => 'setStateOfBirth',
        'city_of_birth' => 'setCityOfBirth',
        'hispanic_or_latino_ethnicity' => 'setHispanicOrLatinoEthnicity',
        'races' => 'setRaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'birthday' => 'getBirthday',
        'gender' => 'getGender',
        'residence_status' => 'getResidenceStatus',
        'english_language_learner' => 'getEnglishLanguageLearner',
        'country_of_birth' => 'getCountryOfBirth',
        'state_of_birth' => 'getStateOfBirth',
        'city_of_birth' => 'getCityOfBirth',
        'hispanic_or_latino_ethnicity' => 'getHispanicOrLatinoEthnicity',
        'races' => 'getRaces'
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

    public const GENDER_MALE = 'male';
    public const GENDER_FEMALE = 'female';
    public const GENDER_OTHER = 'other';
    public const RESIDENCE_STATUS__01652 = '01652';
    public const RESIDENCE_STATUS__01653 = '01653';
    public const RESIDENCE_STATUS__01654 = '01654';
    public const RESIDENCE_STATUS__01655 = '01655';
    public const RESIDENCE_STATUS__01656 = '01656';
    public const RACES_AMERICAN_INDIAN_OR_ALASKA_NATIVE = 'american-indian-or-alaska-native';
    public const RACES_ASIAN = 'asian';
    public const RACES_BLACK_OR_AFRICAN_AMERICAN = 'black-or-african-american';
    public const RACES_NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER = 'native-hawaiian-or-other-pacific-islander';
    public const RACES_WHITE = 'white';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResidenceStatusAllowableValues()
    {
        return [
            self::RESIDENCE_STATUS__01652,
            self::RESIDENCE_STATUS__01653,
            self::RESIDENCE_STATUS__01654,
            self::RESIDENCE_STATUS__01655,
            self::RESIDENCE_STATUS__01656,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRacesAllowableValues()
    {
        return [
            self::RACES_AMERICAN_INDIAN_OR_ALASKA_NATIVE,
            self::RACES_ASIAN,
            self::RACES_BLACK_OR_AFRICAN_AMERICAN,
            self::RACES_NATIVE_HAWAIIAN_OR_OTHER_PACIFIC_ISLANDER,
            self::RACES_WHITE,
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
        $this->setIfExists('birthday', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('residence_status', $data ?? [], null);
        $this->setIfExists('english_language_learner', $data ?? [], null);
        $this->setIfExists('country_of_birth', $data ?? [], null);
        $this->setIfExists('state_of_birth', $data ?? [], null);
        $this->setIfExists('city_of_birth', $data ?? [], null);
        $this->setIfExists('hispanic_or_latino_ethnicity', $data ?? [], null);
        $this->setIfExists('races', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['birthday'] === null) {
            $invalidProperties[] = "'birthday' can't be null";
        }
        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['residence_status'] === null) {
            $invalidProperties[] = "'residence_status' can't be null";
        }
        $allowedValues = $this->getResidenceStatusAllowableValues();
        if (!is_null($this->container['residence_status']) && !in_array($this->container['residence_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'residence_status', must be one of '%s'",
                $this->container['residence_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['english_language_learner'] === null) {
            $invalidProperties[] = "'english_language_learner' can't be null";
        }
        if ($this->container['country_of_birth'] === null) {
            $invalidProperties[] = "'country_of_birth' can't be null";
        }
        if ($this->container['state_of_birth'] === null) {
            $invalidProperties[] = "'state_of_birth' can't be null";
        }
        if ($this->container['city_of_birth'] === null) {
            $invalidProperties[] = "'city_of_birth' can't be null";
        }
        if ($this->container['hispanic_or_latino_ethnicity'] === null) {
            $invalidProperties[] = "'hispanic_or_latino_ethnicity' can't be null";
        }
        if ($this->container['races'] === null) {
            $invalidProperties[] = "'races' can't be null";
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
     * Gets birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime $birthday birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        if (is_null($birthday)) {
            array_push($this->openAPINullablesSetToNull, 'birthday');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('birthday', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            array_push($this->openAPINullablesSetToNull, 'gender');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gender', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets residence_status
     *
     * @return string
     */
    public function getResidenceStatus()
    {
        return $this->container['residence_status'];
    }

    /**
     * Sets residence_status
     *
     * @param string $residence_status [https://ed.link/docs/api/v2.0/models/external/enums/public-school-residence-status](https://ed.link/docs/api/v2.0/models/external/enums/public-school-residence-status)
     *
     * @return self
     */
    public function setResidenceStatus($residence_status)
    {
        if (is_null($residence_status)) {
            array_push($this->openAPINullablesSetToNull, 'residence_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('residence_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getResidenceStatusAllowableValues();
        if (!is_null($residence_status) && !in_array($residence_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'residence_status', must be one of '%s'",
                    $residence_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['residence_status'] = $residence_status;

        return $this;
    }

    /**
     * Gets english_language_learner
     *
     * @return bool
     */
    public function getEnglishLanguageLearner()
    {
        return $this->container['english_language_learner'];
    }

    /**
     * Sets english_language_learner
     *
     * @param bool $english_language_learner english_language_learner
     *
     * @return self
     */
    public function setEnglishLanguageLearner($english_language_learner)
    {
        if (is_null($english_language_learner)) {
            array_push($this->openAPINullablesSetToNull, 'english_language_learner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('english_language_learner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['english_language_learner'] = $english_language_learner;

        return $this;
    }

    /**
     * Gets country_of_birth
     *
     * @return string
     */
    public function getCountryOfBirth()
    {
        return $this->container['country_of_birth'];
    }

    /**
     * Sets country_of_birth
     *
     * @param string $country_of_birth country_of_birth
     *
     * @return self
     */
    public function setCountryOfBirth($country_of_birth)
    {
        if (is_null($country_of_birth)) {
            array_push($this->openAPINullablesSetToNull, 'country_of_birth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('country_of_birth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['country_of_birth'] = $country_of_birth;

        return $this;
    }

    /**
     * Gets state_of_birth
     *
     * @return string
     */
    public function getStateOfBirth()
    {
        return $this->container['state_of_birth'];
    }

    /**
     * Sets state_of_birth
     *
     * @param string $state_of_birth state_of_birth
     *
     * @return self
     */
    public function setStateOfBirth($state_of_birth)
    {
        if (is_null($state_of_birth)) {
            array_push($this->openAPINullablesSetToNull, 'state_of_birth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('state_of_birth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['state_of_birth'] = $state_of_birth;

        return $this;
    }

    /**
     * Gets city_of_birth
     *
     * @return string
     */
    public function getCityOfBirth()
    {
        return $this->container['city_of_birth'];
    }

    /**
     * Sets city_of_birth
     *
     * @param string $city_of_birth city_of_birth
     *
     * @return self
     */
    public function setCityOfBirth($city_of_birth)
    {
        if (is_null($city_of_birth)) {
            array_push($this->openAPINullablesSetToNull, 'city_of_birth');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('city_of_birth', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['city_of_birth'] = $city_of_birth;

        return $this;
    }

    /**
     * Gets hispanic_or_latino_ethnicity
     *
     * @return bool
     */
    public function getHispanicOrLatinoEthnicity()
    {
        return $this->container['hispanic_or_latino_ethnicity'];
    }

    /**
     * Sets hispanic_or_latino_ethnicity
     *
     * @param bool $hispanic_or_latino_ethnicity hispanic_or_latino_ethnicity
     *
     * @return self
     */
    public function setHispanicOrLatinoEthnicity($hispanic_or_latino_ethnicity)
    {
        if (is_null($hispanic_or_latino_ethnicity)) {
            array_push($this->openAPINullablesSetToNull, 'hispanic_or_latino_ethnicity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hispanic_or_latino_ethnicity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hispanic_or_latino_ethnicity'] = $hispanic_or_latino_ethnicity;

        return $this;
    }

    /**
     * Gets races
     *
     * @return string[]
     */
    public function getRaces()
    {
        return $this->container['races'];
    }

    /**
     * Sets races
     *
     * @param string[] $races races
     *
     * @return self
     */
    public function setRaces($races)
    {
        if (is_null($races)) {
            array_push($this->openAPINullablesSetToNull, 'races');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('races', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getRacesAllowableValues();
        if (!is_null($races) && array_diff($races, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'races', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['races'] = $races;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


