<?php
/**
 * OrderCreateResult
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
 * OrderCreateResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderCreateResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCreateResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'success' => 'bool',
        'error_message' => 'string',
        'order' => '\OpenAPI\Client\Model\Order',
        'balance' => '\OpenAPI\Client\Model\Balance[]',
        'execution' => 'int',
        'request_time' => 'int',
        'trades' => '\OpenAPI\Client\Model\TradesGetViewModel[]',
        'balance_actions' => '\OpenAPI\Client\Model\BalanceActionModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'success' => null,
        'error_message' => null,
        'order' => null,
        'balance' => null,
        'execution' => 'int64',
        'request_time' => 'int64',
        'trades' => null,
        'balance_actions' => null
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
        'success' => 'success',
        'error_message' => 'errorMessage',
        'order' => 'order',
        'balance' => 'balance',
        'execution' => 'execution',
        'request_time' => 'requestTime',
        'trades' => 'trades',
        'balance_actions' => 'balanceActions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'success' => 'setSuccess',
        'error_message' => 'setErrorMessage',
        'order' => 'setOrder',
        'balance' => 'setBalance',
        'execution' => 'setExecution',
        'request_time' => 'setRequestTime',
        'trades' => 'setTrades',
        'balance_actions' => 'setBalanceActions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'success' => 'getSuccess',
        'error_message' => 'getErrorMessage',
        'order' => 'getOrder',
        'balance' => 'getBalance',
        'execution' => 'getExecution',
        'request_time' => 'getRequestTime',
        'trades' => 'getTrades',
        'balance_actions' => 'getBalanceActions'
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
        $this->container['success'] = $data['success'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['execution'] = $data['execution'] ?? null;
        $this->container['request_time'] = $data['request_time'] ?? null;
        $this->container['trades'] = $data['trades'] ?? null;
        $this->container['balance_actions'] = $data['balance_actions'] ?? null;
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
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message error_message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\Client\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\Client\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \OpenAPI\Client\Model\Balance[]|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \OpenAPI\Client\Model\Balance[]|null $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return int|null
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param int|null $execution execution
     *
     * @return self
     */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;

        return $this;
    }

    /**
     * Gets request_time
     *
     * @return int|null
     */
    public function getRequestTime()
    {
        return $this->container['request_time'];
    }

    /**
     * Sets request_time
     *
     * @param int|null $request_time request_time
     *
     * @return self
     */
    public function setRequestTime($request_time)
    {
        $this->container['request_time'] = $request_time;

        return $this;
    }

    /**
     * Gets trades
     *
     * @return \OpenAPI\Client\Model\TradesGetViewModel[]|null
     */
    public function getTrades()
    {
        return $this->container['trades'];
    }

    /**
     * Sets trades
     *
     * @param \OpenAPI\Client\Model\TradesGetViewModel[]|null $trades trades
     *
     * @return self
     */
    public function setTrades($trades)
    {
        $this->container['trades'] = $trades;

        return $this;
    }

    /**
     * Gets balance_actions
     *
     * @return \OpenAPI\Client\Model\BalanceActionModel[]|null
     */
    public function getBalanceActions()
    {
        return $this->container['balance_actions'];
    }

    /**
     * Sets balance_actions
     *
     * @param \OpenAPI\Client\Model\BalanceActionModel[]|null $balance_actions balance_actions
     *
     * @return self
     */
    public function setBalanceActions($balance_actions)
    {
        $this->container['balance_actions'] = $balance_actions;

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

