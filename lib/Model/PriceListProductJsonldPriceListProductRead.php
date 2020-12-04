<?php
/**
 * PriceListProductJsonldPriceListProductRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  VentureLeap\ProductService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Product API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VentureLeap\ProductService\Model;

use \ArrayAccess;
use \VentureLeap\ProductService\ObjectSerializer;

/**
 * PriceListProductJsonldPriceListProductRead Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\ProductService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceListProductJsonldPriceListProductRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PriceListProduct:jsonld-priceListProduct:read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'uuid' => 'string',
'gross_price_per_unit' => 'float',
'price_list' => 'string',
'product' => 'AnyOfPriceListProductJsonldPriceListProductReadProduct',
'active' => 'bool',
'custom_data' => 'string',
'price_list_uuid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'uuid' => null,
'gross_price_per_unit' => null,
'price_list' => 'iri-reference',
'product' => 'iri-reference',
'active' => null,
'custom_data' => null,
'price_list_uuid' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'uuid' => 'uuid',
'gross_price_per_unit' => 'grossPricePerUnit',
'price_list' => 'priceList',
'product' => 'product',
'active' => 'active',
'custom_data' => 'customData',
'price_list_uuid' => 'priceListUuid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'uuid' => 'setUuid',
'gross_price_per_unit' => 'setGrossPricePerUnit',
'price_list' => 'setPriceList',
'product' => 'setProduct',
'active' => 'setActive',
'custom_data' => 'setCustomData',
'price_list_uuid' => 'setPriceListUuid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'uuid' => 'getUuid',
'gross_price_per_unit' => 'getGrossPricePerUnit',
'price_list' => 'getPriceList',
'product' => 'getProduct',
'active' => 'getActive',
'custom_data' => 'getCustomData',
'price_list_uuid' => 'getPriceListUuid'    ];

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
        return self::$swaggerModelName;
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['gross_price_per_unit'] = isset($data['gross_price_per_unit']) ? $data['gross_price_per_unit'] : null;
        $this->container['price_list'] = isset($data['price_list']) ? $data['price_list'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
        $this->container['price_list_uuid'] = isset($data['price_list_uuid']) ? $data['price_list_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['custom_data'] === null) {
            $invalidProperties[] = "'custom_data' can't be null";
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
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
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets gross_price_per_unit
     *
     * @return float
     */
    public function getGrossPricePerUnit()
    {
        return $this->container['gross_price_per_unit'];
    }

    /**
     * Sets gross_price_per_unit
     *
     * @param float $gross_price_per_unit gross_price_per_unit
     *
     * @return $this
     */
    public function setGrossPricePerUnit($gross_price_per_unit)
    {
        $this->container['gross_price_per_unit'] = $gross_price_per_unit;

        return $this;
    }

    /**
     * Gets price_list
     *
     * @return string
     */
    public function getPriceList()
    {
        return $this->container['price_list'];
    }

    /**
     * Sets price_list
     *
     * @param string $price_list price_list
     *
     * @return $this
     */
    public function setPriceList($price_list)
    {
        $this->container['price_list'] = $price_list;

        return $this;
    }

    /**
     * Gets product
     *
     * @return AnyOfPriceListProductJsonldPriceListProductReadProduct
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param AnyOfPriceListProductJsonldPriceListProductReadProduct $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets custom_data
     *
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param string $custom_data custom_data
     *
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets price_list_uuid
     *
     * @return string
     */
    public function getPriceListUuid()
    {
        return $this->container['price_list_uuid'];
    }

    /**
     * Sets price_list_uuid
     *
     * @param string $price_list_uuid price_list_uuid
     *
     * @return $this
     */
    public function setPriceListUuid($price_list_uuid)
    {
        $this->container['price_list_uuid'] = $price_list_uuid;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
