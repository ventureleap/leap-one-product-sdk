# Swagger\Client\ProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductItem**](ProductApi.md#deleteproductitem) | **DELETE** /api/products/{id} | Removes the Product resource.
[**getProductCollection**](ProductApi.md#getproductcollection) | **GET** /api/products | Retrieves the collection of Product resources.
[**getProductItem**](ProductApi.md#getproductitem) | **GET** /api/products/{id} | Retrieves a Product resource.
[**patchProductItem**](ProductApi.md#patchproductitem) | **PATCH** /api/products/{id} | Updates the Product resource.
[**postProductCollection**](ProductApi.md#postproductcollection) | **POST** /api/products | Creates a Product resource.
[**putProductItem**](ProductApi.md#putproductitem) | **PUT** /api/products/{id} | Replaces the Product resource.

# **deleteProductItem**
> deleteProductItem($id)

Removes the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCollection**
> \Swagger\Client\Model\InlineResponse2002 getProductCollection($name, $application_id, $order_id, $order_name, $page)

Retrieves the collection of Product resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$application_id = "application_id_example"; // string | 
$order_id = "order_id_example"; // string | 
$order_name = "order_name_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getProductCollection($name, $application_id, $order_id, $order_name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **application_id** | **string**|  | [optional]
 **order_id** | **string**|  | [optional]
 **order_name** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductItem**
> \Swagger\Client\Model\ProductJsonld getProductItem($id)

Retrieves a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getProductItem($id);
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

### Return type

[**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProductItem**
> \Swagger\Client\Model\ProductJsonld patchProductItem($id, $body)

Updates the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | The updated Product resource

try {
    $result = $apiInstance->patchProductItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchProductItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Product**](../Model/Product.md)| The updated Product resource | [optional]

### Return type

[**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductCollection**
> \Swagger\Client\Model\ProductJsonld postProductCollection($body)

Creates a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ProductJsonld(); // \Swagger\Client\Model\ProductJsonld | The new Product resource

try {
    $result = $apiInstance->postProductCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProductCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)| The new Product resource | [optional]

### Return type

[**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductItem**
> \Swagger\Client\Model\ProductJsonld putProductItem($id, $body)

Replaces the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\ProductJsonld(); // \Swagger\Client\Model\ProductJsonld | The updated Product resource

try {
    $result = $apiInstance->putProductItem($id, $body);
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
 **body** | [**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)| The updated Product resource | [optional]

### Return type

[**\Swagger\Client\Model\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

