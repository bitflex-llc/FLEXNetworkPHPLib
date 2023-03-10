<?php
/**
 * ApiGetOrders
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
 * ApiGetOrders Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ApiGetOrders implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiGetOrders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'pair_name' => 'string',
        'created' => 'int',
        'date_created' => 'int',
        'price' => 'double',
        'amount' => 'double',
        'amount_left' => 'double',
        'trade_type' => '\OpenAPI\Client\Model\TradeType',
        'order_type' => '\OpenAPI\Client\Model\OrderTypes',
        'is_margin' => 'bool',
        'liquidation_price' => 'double',
        'initial_price' => 'double',
        'leverage' => 'int',
        'initial_amount' => 'double',
        'stop_loss_price' => 'double',
        'take_profit_price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'pair_name' => null,
        'created' => 'int64',
        'date_created' => 'int64',
        'price' => 'double',
        'amount' => 'double',
        'amount_left' => 'double',
        'trade_type' => null,
        'order_type' => null,
        'is_margin' => null,
        'liquidation_price' => 'double',
        'initial_price' => 'double',
        'leverage' => 'int32',
        'initial_amount' => 'double',
        'stop_loss_price' => 'double',
        'take_profit_price' => 'double'
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
        'pair_name' => 'pairName',
        'created' => 'created',
        'date_created' => 'dateCreated',
        'price' => 'price',
        'amount' => 'amount',
        'amount_left' => 'amountLeft',
        'trade_type' => 'tradeType',
        'order_type' => 'orderType',
        'is_margin' => 'isMargin',
        'liquidation_price' => 'liquidationPrice',
        'initial_price' => 'initialPrice',
        'leverage' => 'leverage',
        'initial_amount' => 'initialAmount',
        'stop_loss_price' => 'stopLossPrice',
        'take_profit_price' => 'takeProfitPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'pair_name' => 'setPairName',
        'created' => 'setCreated',
        'date_created' => 'setDateCreated',
        'price' => 'setPrice',
        'amount' => 'setAmount',
        'amount_left' => 'setAmountLeft',
        'trade_type' => 'setTradeType',
        'order_type' => 'setOrderType',
        'is_margin' => 'setIsMargin',
        'liquidation_price' => 'setLiquidationPrice',
        'initial_price' => 'setInitialPrice',
        'leverage' => 'setLeverage',
        'initial_amount' => 'setInitialAmount',
        'stop_loss_price' => 'setStopLossPrice',
        'take_profit_price' => 'setTakeProfitPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'pair_name' => 'getPairName',
        'created' => 'getCreated',
        'date_created' => 'getDateCreated',
        'price' => 'getPrice',
        'amount' => 'getAmount',
        'amount_left' => 'getAmountLeft',
        'trade_type' => 'getTradeType',
        'order_type' => 'getOrderType',
        'is_margin' => 'getIsMargin',
        'liquidation_price' => 'getLiquidationPrice',
        'initial_price' => 'getInitialPrice',
        'leverage' => 'getLeverage',
        'initial_amount' => 'getInitialAmount',
        'stop_loss_price' => 'getStopLossPrice',
        'take_profit_price' => 'getTakeProfitPrice'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['pair_name'] = $data['pair_name'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['date_created'] = $data['date_created'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amount_left'] = $data['amount_left'] ?? null;
        $this->container['trade_type'] = $data['trade_type'] ?? null;
        $this->container['order_type'] = $data['order_type'] ?? null;
        $this->container['is_margin'] = $data['is_margin'] ?? null;
        $this->container['liquidation_price'] = $data['liquidation_price'] ?? null;
        $this->container['initial_price'] = $data['initial_price'] ?? null;
        $this->container['leverage'] = $data['leverage'] ?? null;
        $this->container['initial_amount'] = $data['initial_amount'] ?? null;
        $this->container['stop_loss_price'] = $data['stop_loss_price'] ?? null;
        $this->container['take_profit_price'] = $data['take_profit_price'] ?? null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets pair_name
     *
     * @return string|null
     */
    public function getPairName()
    {
        return $this->container['pair_name'];
    }

    /**
     * Sets pair_name
     *
     * @param string|null $pair_name pair_name
     *
     * @return self
     */
    public function setPairName($pair_name)
    {
        $this->container['pair_name'] = $pair_name;

        return $this;
    }

    /**
     * Gets created
     *
     * @return int|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return int|null
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param int|null $date_created date_created
     *
     * @return self
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_left
     *
     * @return double|null
     */
    public function getAmountLeft()
    {
        return $this->container['amount_left'];
    }

    /**
     * Sets amount_left
     *
     * @param double|null $amount_left amount_left
     *
     * @return self
     */
    public function setAmountLeft($amount_left)
    {
        $this->container['amount_left'] = $amount_left;

        return $this;
    }

    /**
     * Gets trade_type
     *
     * @return \OpenAPI\Client\Model\TradeType|null
     */
    public function getTradeType()
    {
        return $this->container['trade_type'];
    }

    /**
     * Sets trade_type
     *
     * @param \OpenAPI\Client\Model\TradeType|null $trade_type trade_type
     *
     * @return self
     */
    public function setTradeType($trade_type)
    {
        $this->container['trade_type'] = $trade_type;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return \OpenAPI\Client\Model\OrderTypes|null
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param \OpenAPI\Client\Model\OrderTypes|null $order_type order_type
     *
     * @return self
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets is_margin
     *
     * @return bool|null
     */
    public function getIsMargin()
    {
        return $this->container['is_margin'];
    }

    /**
     * Sets is_margin
     *
     * @param bool|null $is_margin is_margin
     *
     * @return self
     */
    public function setIsMargin($is_margin)
    {
        $this->container['is_margin'] = $is_margin;

        return $this;
    }

    /**
     * Gets liquidation_price
     *
     * @return double|null
     */
    public function getLiquidationPrice()
    {
        return $this->container['liquidation_price'];
    }

    /**
     * Sets liquidation_price
     *
     * @param double|null $liquidation_price liquidation_price
     *
     * @return self
     */
    public function setLiquidationPrice($liquidation_price)
    {
        $this->container['liquidation_price'] = $liquidation_price;

        return $this;
    }

    /**
     * Gets initial_price
     *
     * @return double|null
     */
    public function getInitialPrice()
    {
        return $this->container['initial_price'];
    }

    /**
     * Sets initial_price
     *
     * @param double|null $initial_price initial_price
     *
     * @return self
     */
    public function setInitialPrice($initial_price)
    {
        $this->container['initial_price'] = $initial_price;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return int|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param int|null $leverage leverage
     *
     * @return self
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets initial_amount
     *
     * @return double|null
     */
    public function getInitialAmount()
    {
        return $this->container['initial_amount'];
    }

    /**
     * Sets initial_amount
     *
     * @param double|null $initial_amount initial_amount
     *
     * @return self
     */
    public function setInitialAmount($initial_amount)
    {
        $this->container['initial_amount'] = $initial_amount;

        return $this;
    }

    /**
     * Gets stop_loss_price
     *
     * @return double|null
     */
    public function getStopLossPrice()
    {
        return $this->container['stop_loss_price'];
    }

    /**
     * Sets stop_loss_price
     *
     * @param double|null $stop_loss_price stop_loss_price
     *
     * @return self
     */
    public function setStopLossPrice($stop_loss_price)
    {
        $this->container['stop_loss_price'] = $stop_loss_price;

        return $this;
    }

    /**
     * Gets take_profit_price
     *
     * @return double|null
     */
    public function getTakeProfitPrice()
    {
        return $this->container['take_profit_price'];
    }

    /**
     * Sets take_profit_price
     *
     * @param double|null $take_profit_price take_profit_price
     *
     * @return self
     */
    public function setTakeProfitPrice($take_profit_price)
    {
        $this->container['take_profit_price'] = $take_profit_price;

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


