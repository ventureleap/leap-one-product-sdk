# VentureLeap\ProductService\PriceListProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListProductItem**](PriceListProductApi.md#deletepricelistproductitem) | **DELETE** /product/price_list_products/{id} | Removes the PriceListProduct resource.
[**getPriceListProductCollection**](PriceListProductApi.md#getpricelistproductcollection) | **GET** /product/price_list_products | Retrieves the collection of PriceListProduct resources.
[**getPriceListProductItem**](PriceListProductApi.md#getpricelistproductitem) | **GET** /product/price_list_products/{id} | Retrieves a PriceListProduct resource.
[**patchPriceListProductItem**](PriceListProductApi.md#patchpricelistproductitem) | **PATCH** /product/price_list_products/{id} | Updates the PriceListProduct resource.
[**postPriceListProductCollection**](PriceListProductApi.md#postpricelistproductcollection) | **POST** /product/price_list_products | Creates a PriceListProduct resource.
[**putPriceListProductItem**](PriceListProductApi.md#putpricelistproductitem) | **PUT** /product/price_list_products/{id} | Replaces the PriceListProduct resource.

# **deletePriceListProductItem**
> deletePriceListProductItem($id)

Removes the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deletePriceListProductItem($id);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->deletePriceListProductItem: ', $e->getMessage(), PHP_EOL;
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

# **getPriceListProductCollection**
> \VentureLeap\ProductService\Model\InlineResponse2001 getPriceListProductCollection($product, $price_list, $page, $items_per_page, $pagination)

Retrieves the collection of PriceListProduct resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = "product_example"; // string | 
$price_list = "price_list_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$pagination = true; // bool | Enable or disable pagination

try {
    $result = $apiInstance->getPriceListProductCollection($product, $price_list, $page, $items_per_page, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->getPriceListProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | **string**|  | [optional]
 **price_list** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]
 **items_per_page** | **int**| The number of items per page | [optional] [default to 30]
 **pagination** | **bool**| Enable or disable pagination | [optional]

### Return type

[**\VentureLeap\ProductService\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListProductItem**
> \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead getPriceListProductItem($id)

Retrieves a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getPriceListProductItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->getPriceListProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead**](../Model/PriceListProductJsonldPriceListProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPriceListProductItem**
> \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead patchPriceListProductItem($id, $body)

Updates the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\PriceListProductPriceListProductWrite(); // \VentureLeap\ProductService\Model\PriceListProductPriceListProductWrite | The updated PriceListProduct resource

try {
    $result = $apiInstance->patchPriceListProductItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->patchPriceListProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\PriceListProductPriceListProductWrite**](../Model/PriceListProductPriceListProductWrite.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead**](../Model/PriceListProductJsonldPriceListProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListProductCollection**
> \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead postPriceListProductCollection($body)

Creates a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite(); // \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite | The new PriceListProduct resource

try {
    $result = $apiInstance->postPriceListProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->postPriceListProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite**](../Model/PriceListProductJsonldPriceListProductWrite.md)| The new PriceListProduct resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead**](../Model/PriceListProductJsonldPriceListProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListProductItem**
> \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead putPriceListProductItem($id, $body)

Replaces the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite(); // \VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite | The updated PriceListProduct resource

try {
    $result = $apiInstance->putPriceListProductItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->putPriceListProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductWrite**](../Model/PriceListProductJsonldPriceListProductWrite.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListProductJsonldPriceListProductRead**](../Model/PriceListProductJsonldPriceListProductRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

