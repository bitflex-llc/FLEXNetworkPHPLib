<?php
/**
 * CurrencyStatus
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
 * CurrencyStatus Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CurrencyStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'image' => 'string',
        'withdraw_disabled' => 'bool',
        'deposit_disabled' => 'bool',
        'last_block' => 'int',
        'last_local_block' => 'int',
        'hot_wallet_balance' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'image' => null,
        'withdraw_disabled' => null,
        'deposit_disabled' => null,
        'last_block' => 'int32',
        'last_local_block' => 'int64',
        'hot_wallet_balance' => 'double'
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
        'name' => 'name',
        'image' => 'image',
        'withdraw_disabled' => 'withdrawDisabled',
        'deposit_disabled' => 'depositDisabled',
        'last_block' => 'lastBlock',
        'last_local_block' => 'lastLocalBlock',
        'hot_wallet_balance' => 'hotWalletBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'image' => 'setImage',
        'withdraw_disabled' => 'setWithdrawDisabled',
        'deposit_disabled' => 'setDepositDisabled',
        'last_block' => 'setLastBlock',
        'last_local_block' => 'setLastLocalBlock',
        'hot_wallet_balance' => 'setHotWalletBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'image' => 'getImage',
        'withdraw_disabled' => 'getWithdrawDisabled',
        'deposit_disabled' => 'getDepositDisabled',
        'last_block' => 'getLastBlock',
        'last_local_block' => 'getLastLocalBlock',
        'hot_wallet_balance' => 'getHotWalletBalance'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['withdraw_disabled'] = $data['withdraw_disabled'] ?? null;
        $this->container['deposit_disabled'] = $data['deposit_disabled'] ?? null;
        $this->container['last_block'] = $data['last_block'] ?? null;
        $this->container['last_local_block'] = $data['last_local_block'] ?? null;
        $this->container['hot_wallet_balance'] = $data['hot_wallet_balance'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets withdraw_disabled
     *
     * @return bool|null
     */
    public function getWithdrawDisabled()
    {
        return $this->container['withdraw_disabled'];
    }

    /**
     * Sets withdraw_disabled
     *
     * @param bool|null $withdraw_disabled withdraw_disabled
     *
     * @return self
     */
    public function setWithdrawDisabled($withdraw_disabled)
    {
        $this->container['withdraw_disabled'] = $withdraw_disabled;

        return $this;
    }

    /**
     * Gets deposit_disabled
     *
     * @return bool|null
     */
    public function getDepositDisabled()
    {
        return $this->container['deposit_disabled'];
    }

    /**
     * Sets deposit_disabled
     *
     * @param bool|null $deposit_disabled deposit_disabled
     *
     * @return self
     */
    public function setDepositDisabled($deposit_disabled)
    {
        $this->container['deposit_disabled'] = $deposit_disabled;

        return $this;
    }

    /**
     * Gets last_block
     *
     * @return int|null
     */
    public function getLastBlock()
    {
        return $this->container['last_block'];
    }

    /**
     * Sets last_block
     *
     * @param int|null $last_block last_block
     *
     * @return self
     */
    public function setLastBlock($last_block)
    {
        $this->container['last_block'] = $last_block;

        return $this;
    }

    /**
     * Gets last_local_block
     *
     * @return int|null
     */
    public function getLastLocalBlock()
    {
        return $this->container['last_local_block'];
    }

    /**
     * Sets last_local_block
     *
     * @param int|null $last_local_block last_local_block
     *
     * @return self
     */
    public function setLastLocalBlock($last_local_block)
    {
        $this->container['last_local_block'] = $last_local_block;

        return $this;
    }

    /**
     * Gets hot_wallet_balance
     *
     * @return double|null
     */
    public function getHotWalletBalance()
    {
        return $this->container['hot_wallet_balance'];
    }

    /**
     * Sets hot_wallet_balance
     *
     * @param double|null $hot_wallet_balance hot_wallet_balance
     *
     * @return self
     */
    public function setHotWalletBalance($hot_wallet_balance)
    {
        $this->container['hot_wallet_balance'] = $hot_wallet_balance;

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

