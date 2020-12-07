# VentureLeap\ProductService\ProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductItem**](ProductApi.md#deleteproductitem) | **DELETE** /product/products/{id} | Removes the Product resource.
[**getProductCollection**](ProductApi.md#getproductcollection) | **GET** /product/products | Retrieves the collection of Product resources.
[**getProductItem**](ProductApi.md#getproductitem) | **GET** /product/products/{id} | Retrieves a Product resource.
[**postProductCollection**](ProductApi.md#postproductcollection) | **POST** /product/products | Creates a Product resource.
[**putProductItem**](ProductApi.md#putproductitem) | **PUT** /product/products/{id} | Replaces the Product resource.

# **deleteProductItem**
> deleteProductItem($id)

Removes the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProductItem: ', $e->getMessage(), PHP_EOL;
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

# **getProductCollection**
> \VentureLeap\ProductService\Model\InlineResponse2004 getProductCollection($custom_data, $name, $categories, $order_name, $active, $page, $items_per_page, $pagination, $accept_language)

Retrieves the collection of Product resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_data = "custom_data_example"; // string | 
$name = "name_example"; // string | 
$categories = "categories_example"; // string | 
$order_name = "order_name_example"; // string | 
$active = true; // bool | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$pagination = true; // bool | Enable or disable pagination
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->getProductCollection($custom_data, $name, $categories, $order_name, $active, $page, $items_per_page, $pagination, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_data** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **categories** | **string**|  | [optional]
 **order_name** | **string**|  | [optional]
 **active** | **bool**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **pagination** | **bool**| Enable or disable pagination | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductItem**
> \VentureLeap\ProductService\Model\ProductJsonldProductRead getProductItem($id, $accept_language)

Retrieves a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->getProductItem($id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductJsonldProductRead**](../Model/ProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductCollection**
> \VentureLeap\ProductService\Model\ProductJsonldProductRead postProductCollection($body, $accept_language)

Creates a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\ProductService\Model\ProductJsonldProductWrite(); // \VentureLeap\ProductService\Model\ProductJsonldProductWrite | The new Product resource
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->postProductCollection($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\ProductService\Model\ProductJsonldProductWrite**](../Model/ProductJsonldProductWrite.md)| The new Product resource | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductJsonldProductRead**](../Model/ProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductItem**
> \VentureLeap\ProductService\Model\ProductJsonldProductRead putProductItem($id, $body, $accept_language)

Replaces the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\ProductJsonldProductWrite(); // \VentureLeap\ProductService\Model\ProductJsonldProductWrite | The updated Product resource
$accept_language = "accept_language_example"; // string | Locale

try {
    $result = $apiInstance->putProductItem($id, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->putProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\ProductJsonldProductWrite**](../Model/ProductJsonldProductWrite.md)| The updated Product resource | [optional]
 **accept_language** | **string**| Locale | [optional]

### Return type

[**\VentureLeap\ProductService\Model\ProductJsonldProductRead**](../Model/ProductJsonldProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

