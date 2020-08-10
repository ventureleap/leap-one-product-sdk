# Swagger\Client\PriceListApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListItem**](PriceListApi.md#deletepricelistitem) | **DELETE** /api/price_lists/{id} | Removes the PriceList resource.
[**getPriceListCollection**](PriceListApi.md#getpricelistcollection) | **GET** /api/price_lists | Retrieves the collection of PriceList resources.
[**getPriceListItem**](PriceListApi.md#getpricelistitem) | **GET** /api/price_lists/{id} | Retrieves a PriceList resource.
[**patchPriceListItem**](PriceListApi.md#patchpricelistitem) | **PATCH** /api/price_lists/{id} | Updates the PriceList resource.
[**postPriceListCollection**](PriceListApi.md#postpricelistcollection) | **POST** /api/price_lists | Creates a PriceList resource.
[**putPriceListItem**](PriceListApi.md#putpricelistitem) | **PUT** /api/price_lists/{id} | Replaces the PriceList resource.

# **deletePriceListItem**
> deletePriceListItem($id)

Removes the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListCollection**
> \Swagger\Client\Model\InlineResponse2001 getPriceListCollection($page)

Retrieves the collection of PriceList resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getPriceListCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListItem**
> \Swagger\Client\Model\PriceListJsonld getPriceListItem($id)

Retrieves a PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

[**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchPriceListItem**
> \Swagger\Client\Model\PriceListJsonld patchPriceListItem($id, $body)

Updates the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\PriceList(); // \Swagger\Client\Model\PriceList | The updated PriceList resource

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
 **body** | [**\Swagger\Client\Model\PriceList**](../Model/PriceList.md)| The updated PriceList resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPriceListCollection**
> \Swagger\Client\Model\PriceListJsonld postPriceListCollection($body)

Creates a PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PriceListJsonld(); // \Swagger\Client\Model\PriceListJsonld | The new PriceList resource

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
 **body** | [**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)| The new PriceList resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPriceListItem**
> \Swagger\Client\Model\PriceListJsonld putPriceListItem($id, $body)

Replaces the PriceList resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\PriceListJsonld(); // \Swagger\Client\Model\PriceListJsonld | The updated PriceList resource

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
 **body** | [**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)| The updated PriceList resource | [optional]

### Return type

[**\Swagger\Client\Model\PriceListJsonld**](../Model/PriceListJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

