<?php
/**
 * PostSignInRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * BCFLEX API
 *
 * BCFLEX Public API Documentation
 *
 * The version of the OpenAPI document: v1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PostSignInRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PostSignInRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PostSignInRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'password' => 'string',
        're_captchav3_token' => 'string',
        'bitflex_device_id' => 'string',
        'google_tfa_code' => 'string',
        'remember_device' => 'bool',
        'remembered_device_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => null,
        'password' => null,
        're_captchav3_token' => null,
        'bitflex_device_id' => null,
        'google_tfa_code' => null,
        'remember_device' => null,
        'remembered_device_token' => null
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
        'email' => 'email',
        'password' => 'password',
        're_captchav3_token' => 'reCaptchav3Token',
        'bitflex_device_id' => 'bitflexDeviceId',
        'google_tfa_code' => 'googleTfaCode',
        'remember_device' => 'rememberDevice',
        'remembered_device_token' => 'rememberedDeviceToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'password' => 'setPassword',
        're_captchav3_token' => 'setReCaptchav3Token',
        'bitflex_device_id' => 'setBitflexDeviceId',
        'google_tfa_code' => 'setGoogleTfaCode',
        'remember_device' => 'setRememberDevice',
        'remembered_device_token' => 'setRememberedDeviceToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'password' => 'getPassword',
        're_captchav3_token' => 'getReCaptchav3Token',
        'bitflex_device_id' => 'getBitflexDeviceId',
        'google_tfa_code' => 'getGoogleTfaCode',
        'remember_device' => 'getRememberDevice',
        'remembered_device_token' => 'getRememberedDeviceToken'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['password'] = $data['password'] ?? null;
        $this->container['re_captchav3_token'] = $data['re_captchav3_token'] ?? null;
        $this->container['bitflex_device_id'] = $data['bitflex_device_id'] ?? null;
        $this->container['google_tfa_code'] = $data['google_tfa_code'] ?? null;
        $this->container['remember_device'] = $data['remember_device'] ?? null;
        $this->container['remembered_device_token'] = $data['remembered_device_token'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ((mb_strlen($this->container['email']) < 1)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((mb_strlen($this->container['password']) < 1)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['bitflex_device_id'] === null) {
            $invalidProperties[] = "'bitflex_device_id' can't be null";
        }
        if ((mb_strlen($this->container['bitflex_device_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'bitflex_device_id', the character length must be bigger than or equal to 1.";
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
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {

        if ((mb_strlen($email) < 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PostSignInRequest., must be bigger than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return self
     */
    public function setPassword($password)
    {

        if ((mb_strlen($password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $password when calling PostSignInRequest., must be bigger than or equal to 1.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets re_captchav3_token
     *
     * @return string|null
     */
    public function getReCaptchav3Token()
    {
        return $this->container['re_captchav3_token'];
    }

    /**
     * Sets re_captchav3_token
     *
     * @param string|null $re_captchav3_token re_captchav3_token
     *
     * @return self
     */
    public function setReCaptchav3Token($re_captchav3_token)
    {
        $this->container['re_captchav3_token'] = $re_captchav3_token;

        return $this;
    }

    /**
     * Gets bitflex_device_id
     *
     * @return string
     */
    public function getBitflexDeviceId()
    {
        return $this->container['bitflex_device_id'];
    }

    /**
     * Sets bitflex_device_id
     *
     * @param string $bitflex_device_id bitflex_device_id
     *
     * @return self
     */
    public function setBitflexDeviceId($bitflex_device_id)
    {

        if ((mb_strlen($bitflex_device_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bitflex_device_id when calling PostSignInRequest., must be bigger than or equal to 1.');
        }

        $this->container['bitflex_device_id'] = $bitflex_device_id;

        return $this;
    }

    /**
     * Gets google_tfa_code
     *
     * @return string|null
     */
    public function getGoogleTfaCode()
    {
        return $this->container['google_tfa_code'];
    }

    /**
     * Sets google_tfa_code
     *
     * @param string|null $google_tfa_code google_tfa_code
     *
     * @return self
     */
    public function setGoogleTfaCode($google_tfa_code)
    {
        $this->container['google_tfa_code'] = $google_tfa_code;

        return $this;
    }

    /**
     * Gets remember_device
     *
     * @return bool|null
     */
    public function getRememberDevice()
    {
        return $this->container['remember_device'];
    }

    /**
     * Sets remember_device
     *
     * @param bool|null $remember_device remember_device
     *
     * @return self
     */
    public function setRememberDevice($remember_device)
    {
        $this->container['remember_device'] = $remember_device;

        return $this;
    }

    /**
     * Gets remembered_device_token
     *
     * @return string|null
     */
    public function getRememberedDeviceToken()
    {
        return $this->container['remembered_device_token'];
    }

    /**
     * Sets remembered_device_token
     *
     * @param string|null $remembered_device_token remembered_device_token
     *
     * @return self
     */
    public function setRememberedDeviceToken($remembered_device_token)
    {
        $this->container['remembered_device_token'] = $remembered_device_token;

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


