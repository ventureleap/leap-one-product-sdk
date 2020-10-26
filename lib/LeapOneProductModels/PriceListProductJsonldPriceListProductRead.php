<?php
/**
 * PriceListProductJsonldPriceListProductRead
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\LeapOneProductModels;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PriceListProductJsonldPriceListProductRead Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
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
'internal_id' => 'string',
'gross_price_per_unit' => 'float',
'price_list' => 'string',
'product' => '\Swagger\Client\LeapOneProductModels\ProductJsonldPriceListProductRead',
'active' => 'bool',
'price_list_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'internal_id' => null,
'gross_price_per_unit' => null,
'price_list' => 'iri-reference',
'product' => null,
'active' => null,
'price_list_id' => null    ];

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
'internal_id' => 'internalId',
'gross_price_per_unit' => 'grossPricePerUnit',
'price_list' => 'priceList',
'product' => 'product',
'active' => 'active',
'price_list_id' => 'priceListId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'internal_id' => 'setInternalId',
'gross_price_per_unit' => 'setGrossPricePerUnit',
'price_list' => 'setPriceList',
'product' => 'setProduct',
'active' => 'setActive',
'price_list_id' => 'setPriceListId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'internal_id' => 'getInternalId',
'gross_price_per_unit' => 'getGrossPricePerUnit',
'price_list' => 'getPriceList',
'product' => 'getProduct',
'active' => 'getActive',
'price_list_id' => 'getPriceListId'    ];

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
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['gross_price_per_unit'] = isset($data['gross_price_per_unit']) ? $data['gross_price_per_unit'] : null;
        $this->container['price_list'] = isset($data['price_list']) ? $data['price_list'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['price_list_id'] = isset($data['price_list_id']) ? $data['price_list_id'] : null;
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
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

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
     * @return \Swagger\Client\LeapOneProductModels\ProductJsonldPriceListProductRead
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\LeapOneProductModels\ProductJsonldPriceListProductRead $product product
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
     * Gets price_list_id
     *
     * @return string
     */
    public function getPriceListId()
    {
        return $this->container['price_list_id'];
    }

    /**
     * Sets price_list_id
     *
     * @param string $price_list_id price_list_id
     *
     * @return $this
     */
    public function setPriceListId($price_list_id)
    {
        $this->container['price_list_id'] = $price_list_id;

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
