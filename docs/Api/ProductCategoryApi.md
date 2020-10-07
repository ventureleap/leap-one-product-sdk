# Swagger\Client\ProductCategoryApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductCategoryItem**](ProductCategoryApi.md#deleteproductcategoryitem) | **DELETE** /api/product_categories/{id} | Removes the ProductCategory resource.
[**getProductCategoryCollection**](ProductCategoryApi.md#getproductcategorycollection) | **GET** /api/product_categories | Retrieves the collection of ProductCategory resources.
[**getProductCategoryItem**](ProductCategoryApi.md#getproductcategoryitem) | **GET** /api/product_categories/{id} | Retrieves a ProductCategory resource.
[**patchProductCategoryItem**](ProductCategoryApi.md#patchproductcategoryitem) | **PATCH** /api/product_categories/{id} | Updates the ProductCategory resource.
[**postProductCategoryCollection**](ProductCategoryApi.md#postproductcategorycollection) | **POST** /api/product_categories | Creates a ProductCategory resource.
[**putProductCategoryItem**](ProductCategoryApi.md#putproductcategoryitem) | **PUT** /api/product_categories/{id} | Replaces the ProductCategory resource.

# **deleteProductCategoryItem**
> deleteProductCategoryItem($id)

Removes the ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
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

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCategoryCollection**
> \Swagger\Client\LeapOneProductModels\InlineResponse2002 getProductCategoryCollection($application_id, $name, $page)

Retrieves the collection of ProductCategory resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = "application_id_example"; // string | 
$name = "name_example"; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getProductCategoryCollection($application_id, $name, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->getProductCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\Swagger\Client\LeapOneProductModels\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductCategoryItem**
> \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld getProductCategoryItem($id)

Retrieves a ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getProductCategoryItem($id);
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

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchProductCategoryItem**
> \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld patchProductCategoryItem($id, $body)

Updates the ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\ProductCategory(); // \Swagger\Client\LeapOneProductModels\ProductCategory | The updated ProductCategory resource

try {
    $result = $apiInstance->patchProductCategoryItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->patchProductCategoryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\LeapOneProductModels\ProductCategory**](../Model/ProductCategory.md)| The updated ProductCategory resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/merge-patch+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductCategoryCollection**
> \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld postProductCategoryCollection($body)

Creates a ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld(); // \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld | The new ProductCategory resource

try {
    $result = $apiInstance->postProductCategoryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCategoryApi->postProductCategoryCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)| The new ProductCategory resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putProductCategoryItem**
> \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld putProductCategoryItem($id, $body)

Replaces the ProductCategory resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\ProductCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld(); // \Swagger\Client\LeapOneProductModels\ProductCategoryJsonld | The updated ProductCategory resource

try {
    $result = $apiInstance->putProductCategoryItem($id, $body);
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
 **body** | [**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)| The updated ProductCategory resource | [optional]

### Return type

[**\Swagger\Client\LeapOneProductModels\ProductCategoryJsonld**](../Model/ProductCategoryJsonld.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

