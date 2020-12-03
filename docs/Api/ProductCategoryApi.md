# VentureLeap\ProductService\ProductCategoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductCategoryItem**](ProductCategoryApi.md#deleteproductcategoryitem) | **DELETE** /product/product_categories/{id} | Removes the ProductCategory resource.
[**getProductCategoryCollection**](ProductCategoryApi.md#getproductcategorycollection) | **GET** /product/product_categories | Retrieves the collection of ProductCategory resources.
[**getProductCategoryItem**](ProductCategoryApi.md#getproductcategoryitem) | **GET** /product/product_categories/{id} | Retrieves a ProductCategory resource.
[**postProductCategoryCollection**](ProductCategoryApi.md#postproductcategorycollection) | **POST** /product/product_categories | Creates a ProductCategory resource.
[**putProductCategoryItem**](ProductCategoryApi.md#putproductcategoryitem) | **PUT** /product/product_categories/{id} | Replaces the ProductCategory resource.

# **deleteProductCategoryItem**
> deleteProductCategoryItem($id)

Removes the ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteProductCategoryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->deleteProductCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCategoryCollection**
> \VentureLeap\ProductService\Model\InlineResponse2003 getProductCategoryCollection($name, $products, $type, $page, $items_per_page, $pagination, $accept_language)

Retrieves the collection of ProductCategory resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$products = "products_example"; // string | 
$type = "type_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$pagination = true; // bool | Enable or disable pagination
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->getProductCategoryCollection($name, $products, $type, $page, $items_per_page, $pagination, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->getProductCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **products** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **pagination** | **bool**| Enable or disable pagination | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCategoryItem**
> \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead getProductCategoryItem($id, $accept_language)

Retrieves a ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->getProductCategoryItem($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->getProductCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead**](../Model/ProductCategoryJsonldProductCategoryRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductCategoryCollection**
> \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead postProductCategoryCollection($body, $accept_language)

Creates a ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite(); // \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite | The new ProductCategory resource
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->postProductCategoryCollection($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->postProductCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite**](../Model/ProductCategoryJsonldProductCategoryWrite.md)| The new ProductCategory resource | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead**](../Model/ProductCategoryJsonldProductCategoryRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductCategoryItem**
> \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead putProductCategoryItem($id, $body, $accept_language)

Replaces the ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite(); // \VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite | The updated ProductCategory resource
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->putProductCategoryItem($id, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->putProductCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryWrite**](../Model/ProductCategoryJsonldProductCategoryWrite.md)| The updated ProductCategory resource | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductCategoryJsonldProductCategoryRead**](../Model/ProductCategoryJsonldProductCategoryRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

