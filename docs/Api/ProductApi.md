# Swagger\Client\ProductApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductItem**](ProductApi.md#deleteproductitem) | **DELETE** /products/{id} | Removes the Product resource.
[**getProductCollection**](ProductApi.md#getproductcollection) | **GET** /products | Retrieves the collection of Product resources.
[**getProductItem**](ProductApi.md#getproductitem) | **GET** /products/{id} | Retrieves a Product resource.
[**patchProductItem**](ProductApi.md#patchproductitem) | **PATCH** /products/{id} | Updates the Product resource.
[**postProductCollection**](ProductApi.md#postproductcollection) | **POST** /products | Creates a Product resource.
[**putProductItem**](ProductApi.md#putproductitem) | **PUT** /products/{id} | Replaces the Product resource.

# **deleteProductItem**
> deleteProductItem($id)

Removes the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
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

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCollection**
> \Swagger\Client\LeapOneProductModels\InlineResponse2003 getProductCollection($name, $categories, $order_id, $order_name, $page)

Retrieves the collection of Product resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | 
$categories = "categories_example"; // string | 
$order_id = "order_id_example"; // string | 
$order_name = "order_name_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getProductCollection($name, $categories, $order_id, $order_name, $page);
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
 **categories** | **string**|  | [optional]
 **order_id** | **string**|  | [optional]
 **order_name** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\LeapOneProductModels\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductItem**
> \Swagger\Client\LeapOneProductModels\ProductJsonld getProductItem($id)

Retrieves a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProductItem**
> \Swagger\Client\LeapOneProductModels\ProductJsonld patchProductItem($id, $body)

Updates the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\Product(); // \Swagger\Client\LeapOneProductModels\Product | The updated Product resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\Product**](../Model/Product.md)| The updated Product resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductCollection**
> \Swagger\Client\LeapOneProductModels\ProductJsonld postProductCollection($body)

Creates a Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\LeapOneProductModels\ProductJsonld(); // \Swagger\Client\LeapOneProductModels\ProductJsonld | The new Product resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)| The new Product resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductItem**
> \Swagger\Client\LeapOneProductModels\ProductJsonld putProductItem($id, $body)

Replaces the Product resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\ProductJsonld(); // \Swagger\Client\LeapOneProductModels\ProductJsonld | The updated Product resource

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
 **body** | [**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)| The updated Product resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductJsonld**](../Model/ProductJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

