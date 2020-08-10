# Swagger\Client\PriceListProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListProductItem**](PriceListProductApi.md#deletepricelistproductitem) | **DELETE** /api/price_list_products/{id} | Removes the PriceListProduct resource.
[**getPriceListProductCollection**](PriceListProductApi.md#getpricelistproductcollection) | **GET** /api/price_list_products | Retrieves the collection of PriceListProduct resources.
[**getPriceListProductItem**](PriceListProductApi.md#getpricelistproductitem) | **GET** /api/price_list_products/{id} | Retrieves a PriceListProduct resource.
[**patchPriceListProductItem**](PriceListProductApi.md#patchpricelistproductitem) | **PATCH** /api/price_list_products/{id} | Updates the PriceListProduct resource.
[**postPriceListProductCollection**](PriceListProductApi.md#postpricelistproductcollection) | **POST** /api/price_list_products | Creates a PriceListProduct resource.
[**putPriceListProductItem**](PriceListProductApi.md#putpricelistproductitem) | **PUT** /api/price_list_products/{id} | Replaces the PriceListProduct resource.

# **deletePriceListProductItem**
> deletePriceListProductItem($id)

Removes the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListProductCollection**
> \Swagger\Client\Model\InlineResponse200 getPriceListProductCollection($page)

Retrieves the collection of PriceListProduct resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getPriceListProductCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListProductApi->getPriceListProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListProductItem**
> \Swagger\Client\Model\PriceListProductJsonld getPriceListProductItem($id)

Retrieves a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPriceListProductItem**
> \Swagger\Client\Model\PriceListProductJsonld patchPriceListProductItem($id, $body)

Updates the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\PriceListProduct(); // \Swagger\Client\Model\PriceListProduct | The updated PriceListProduct resource

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
 **body** | [**\Swagger\Client\Model\PriceListProduct**](../Model/PriceListProduct.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListProductCollection**
> \Swagger\Client\Model\PriceListProductJsonld postPriceListProductCollection($body)

Creates a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PriceListProductJsonld(); // \Swagger\Client\Model\PriceListProductJsonld | The new PriceListProduct resource

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
 **body** | [**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)| The new PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListProductCollection**
> \Swagger\Client\Model\PriceListProductJsonld postPriceListProductCollection($body)

Creates a PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PriceListProduct(); // \Swagger\Client\Model\PriceListProduct | The new PriceListProduct resource

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
 **body** | [**\Swagger\Client\Model\PriceListProduct**](../Model/PriceListProduct.md)| The new PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListProductItem**
> \Swagger\Client\Model\PriceListProductJsonld putPriceListProductItem($id, $body)

Replaces the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\PriceListProductJsonld(); // \Swagger\Client\Model\PriceListProductJsonld | The updated PriceListProduct resource

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
 **body** | [**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListProductItem**
> \Swagger\Client\Model\PriceListProductJsonld putPriceListProductItem($id, $body)

Replaces the PriceListProduct resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\PriceListProduct(); // \Swagger\Client\Model\PriceListProduct | The updated PriceListProduct resource

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
 **body** | [**\Swagger\Client\Model\PriceListProduct**](../Model/PriceListProduct.md)| The updated PriceListProduct resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListProductJsonld**](../Model/PriceListProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json, application/json, text/html
 - **Accept**: application/ld+json, application/json, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

