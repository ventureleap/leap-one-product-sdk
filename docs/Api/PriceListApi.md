# VentureLeap\ProductService\PriceListApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListItem**](PriceListApi.md#deletepricelistitem) | **DELETE** /product/price_lists/{id} | Removes the PriceList resource.
[**getPriceListCollection**](PriceListApi.md#getpricelistcollection) | **GET** /product/price_lists | Retrieves the collection of PriceList resources.
[**getPriceListItem**](PriceListApi.md#getpricelistitem) | **GET** /product/price_lists/{id} | Retrieves a PriceList resource.
[**patchPriceListItem**](PriceListApi.md#patchpricelistitem) | **PATCH** /product/price_lists/{id} | Updates the PriceList resource.
[**postPriceListCollection**](PriceListApi.md#postpricelistcollection) | **POST** /product/price_lists | Creates a PriceList resource.
[**putPriceListItem**](PriceListApi.md#putpricelistitem) | **PUT** /product/price_lists/{id} | Replaces the PriceList resource.

# **deletePriceListItem**
> deletePriceListItem($id)

Removes the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deletePriceListItem($id);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->deletePriceListItem: ', $e->getMessage(), PHP_EOL;
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

# **getPriceListCollection**
> \VentureLeap\ProductService\Model\InlineResponse2002 getPriceListCollection($name, $custom_data, $pagination)

Retrieves the collection of PriceList resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$custom_data = "custom_data_example"; // string | 
$pagination = true; // bool | Enable or disable pagination

try {
    $result = $apiInstance->getPriceListCollection($name, $custom_data, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **custom_data** | **string**|  | [optional]
 **pagination** | **bool**| Enable or disable pagination | [optional]

### Return type

[**\VentureLeap\ProductService\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListItem**
> \VentureLeap\ProductService\Model\PriceListJsonldPriceListRead getPriceListItem($id)

Retrieves a PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getPriceListItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\ProductService\Model\PriceListJsonldPriceListRead**](../Model/PriceListJsonldPriceListRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPriceListItem**
> \VentureLeap\ProductService\Model\PriceListJsonldPriceListRead patchPriceListItem($id, $body)

Updates the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\PriceListPriceListWrite(); // \VentureLeap\ProductService\Model\PriceListPriceListWrite | The updated PriceList resource

try {
    $result = $apiInstance->patchPriceListItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->patchPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\PriceListPriceListWrite**](../Model/PriceListPriceListWrite.md)| The updated PriceList resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListJsonldPriceListRead**](../Model/PriceListJsonldPriceListRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListCollection**
> \VentureLeap\ProductService\Model\PriceListJsonldPriceListRead postPriceListCollection($body)

Creates a PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite(); // \VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite | The new PriceList resource

try {
    $result = $apiInstance->postPriceListCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->postPriceListCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite**](../Model/PriceListJsonldPriceListWrite.md)| The new PriceList resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListJsonldPriceListRead**](../Model/PriceListJsonldPriceListRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListItem**
> \VentureLeap\ProductService\Model\PriceListJsonldPriceListRead putPriceListItem($id, $body)

Replaces the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\ProductService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\ProductService\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite(); // \VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite | The updated PriceList resource

try {
    $result = $apiInstance->putPriceListItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->putPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\ProductService\Model\PriceListJsonldPriceListWrite**](../Model/PriceListJsonldPriceListWrite.md)| The updated PriceList resource | [optional]

### Return type

[**\VentureLeap\ProductService\Model\PriceListJsonldPriceListRead**](../Model/PriceListJsonldPriceListRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

