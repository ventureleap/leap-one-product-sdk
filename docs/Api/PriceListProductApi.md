# Swagger\Client\PriceListProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListProductItem**](PriceListProductApi.md#deletepricelistproductitem) | **DELETE** /price_list_products/{id} | Removes the PriceListProduct resource.
[**getPriceListProductCollection**](PriceListProductApi.md#getpricelistproductcollection) | **GET** /price_list_products | Retrieves the collection of PriceListProduct resources.
[**getPriceListProductItem**](PriceListProductApi.md#getpricelistproductitem) | **GET** /price_list_products/{id} | Retrieves a PriceListProduct resource.
[**patchPriceListProductItem**](PriceListProductApi.md#patchpricelistproductitem) | **PATCH** /price_list_products/{id} | Updates the PriceListProduct resource.
[**postPriceListProductCollection**](PriceListProductApi.md#postpricelistproductcollection) | **POST** /price_list_products | Creates a PriceListProduct resource.
[**putPriceListProductItem**](PriceListProductApi.md#putpricelistproductitem) | **PUT** /price_list_products/{id} | Replaces the PriceListProduct resource.

# **deletePriceListProductItem**
> deletePriceListProductItem($id)

Removes the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
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

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListProductCollection**
> \Swagger\Client\LeapOneProductModels\InlineResponse200 getPriceListProductCollection($product, $price_list, $page)

Retrieves the collection of PriceListProduct resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = "product_example"; // string | 
$price_list = "price_list_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getPriceListProductCollection($product, $price_list, $page);
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

### Return type

[**\Swagger\Client\LeapOneProductModels\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListProductItem**
> \Swagger\Client\LeapOneProductModels\PriceListProductJsonld getPriceListProductItem($id)

Retrieves a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
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

[**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPriceListProductItem**
> \Swagger\Client\LeapOneProductModels\PriceListProductJsonld patchPriceListProductItem($id, $body)

Updates the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\PriceListProduct(); // \Swagger\Client\LeapOneProductModels\PriceListProduct | The updated PriceListProduct resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\PriceListProduct**](../Model/PriceListProduct.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListProductCollection**
> \Swagger\Client\LeapOneProductModels\PriceListProductJsonld postPriceListProductCollection($body)

Creates a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\LeapOneProductModels\PriceListProductJsonld(); // \Swagger\Client\LeapOneProductModels\PriceListProductJsonld | The new PriceListProduct resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)| The new PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListProductItem**
> \Swagger\Client\LeapOneProductModels\PriceListProductJsonld putPriceListProductItem($id, $body)

Replaces the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\PriceListProductJsonld(); // \Swagger\Client\LeapOneProductModels\PriceListProductJsonld | The updated PriceListProduct resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

