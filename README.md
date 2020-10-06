# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
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

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPriceListCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->getPriceListCollection: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
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

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\PriceList(); // \Swagger\Client\LeapOneProductModels\PriceList | The updated PriceList resource

try {
    $result = $apiInstance->patchPriceListItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->patchPriceListItem: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\LeapOneProductModels\PriceListJsonld(); // \Swagger\Client\LeapOneProductModels\PriceListJsonld | The new PriceList resource

try {
    $result = $apiInstance->postPriceListCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->postPriceListCollection: ', $e->getMessage(), PHP_EOL;
}

$apiInstance = new Swagger\Client\LeapOneProductAPIs\PriceListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$body = new \Swagger\Client\LeapOneProductModels\PriceListJsonld(); // \Swagger\Client\LeapOneProductModels\PriceListJsonld | The updated PriceList resource

try {
    $result = $apiInstance->putPriceListItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListApi->putPriceListItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PriceListApi* | [**deletePriceListItem**](docs/Api/PriceListApi.md#deletepricelistitem) | **DELETE** /api/price_lists/{id} | Removes the PriceList resource.
*PriceListApi* | [**getPriceListCollection**](docs/Api/PriceListApi.md#getpricelistcollection) | **GET** /api/price_lists | Retrieves the collection of PriceList resources.
*PriceListApi* | [**getPriceListItem**](docs/Api/PriceListApi.md#getpricelistitem) | **GET** /api/price_lists/{id} | Retrieves a PriceList resource.
*PriceListApi* | [**patchPriceListItem**](docs/Api/PriceListApi.md#patchpricelistitem) | **PATCH** /api/price_lists/{id} | Updates the PriceList resource.
*PriceListApi* | [**postPriceListCollection**](docs/Api/PriceListApi.md#postpricelistcollection) | **POST** /api/price_lists | Creates a PriceList resource.
*PriceListApi* | [**putPriceListItem**](docs/Api/PriceListApi.md#putpricelistitem) | **PUT** /api/price_lists/{id} | Replaces the PriceList resource.
*PriceListProductApi* | [**deletePriceListProductItem**](docs/Api/PriceListProductApi.md#deletepricelistproductitem) | **DELETE** /api/price_list_products/{id} | Removes the PriceListProduct resource.
*PriceListProductApi* | [**getPriceListProductCollection**](docs/Api/PriceListProductApi.md#getpricelistproductcollection) | **GET** /api/price_list_products | Retrieves the collection of PriceListProduct resources.
*PriceListProductApi* | [**getPriceListProductItem**](docs/Api/PriceListProductApi.md#getpricelistproductitem) | **GET** /api/price_list_products/{id} | Retrieves a PriceListProduct resource.
*PriceListProductApi* | [**patchPriceListProductItem**](docs/Api/PriceListProductApi.md#patchpricelistproductitem) | **PATCH** /api/price_list_products/{id} | Updates the PriceListProduct resource.
*PriceListProductApi* | [**postPriceListProductCollection**](docs/Api/PriceListProductApi.md#postpricelistproductcollection) | **POST** /api/price_list_products | Creates a PriceListProduct resource.
*PriceListProductApi* | [**putPriceListProductItem**](docs/Api/PriceListProductApi.md#putpricelistproductitem) | **PUT** /api/price_list_products/{id} | Replaces the PriceListProduct resource.
*ProductApi* | [**deleteProductItem**](docs/Api/ProductApi.md#deleteproductitem) | **DELETE** /api/products/{id} | Removes the Product resource.
*ProductApi* | [**getProductCollection**](docs/Api/ProductApi.md#getproductcollection) | **GET** /api/products | Retrieves the collection of Product resources.
*ProductApi* | [**getProductItem**](docs/Api/ProductApi.md#getproductitem) | **GET** /api/products/{id} | Retrieves a Product resource.
*ProductApi* | [**patchProductItem**](docs/Api/ProductApi.md#patchproductitem) | **PATCH** /api/products/{id} | Updates the Product resource.
*ProductApi* | [**postProductCollection**](docs/Api/ProductApi.md#postproductcollection) | **POST** /api/products | Creates a Product resource.
*ProductApi* | [**putProductItem**](docs/Api/ProductApi.md#putproductitem) | **PUT** /api/products/{id} | Replaces the Product resource.
*ProductCategoryApi* | [**deleteProductCategoryItem**](docs/Api/ProductCategoryApi.md#deleteproductcategoryitem) | **DELETE** /api/product_categories/{id} | Removes the ProductCategory resource.
*ProductCategoryApi* | [**getProductCategoryCollection**](docs/Api/ProductCategoryApi.md#getproductcategorycollection) | **GET** /api/product_categories | Retrieves the collection of ProductCategory resources.
*ProductCategoryApi* | [**getProductCategoryItem**](docs/Api/ProductCategoryApi.md#getproductcategoryitem) | **GET** /api/product_categories/{id} | Retrieves a ProductCategory resource.
*ProductCategoryApi* | [**patchProductCategoryItem**](docs/Api/ProductCategoryApi.md#patchproductcategoryitem) | **PATCH** /api/product_categories/{id} | Updates the ProductCategory resource.
*ProductCategoryApi* | [**postProductCategoryCollection**](docs/Api/ProductCategoryApi.md#postproductcategorycollection) | **POST** /api/product_categories | Creates a ProductCategory resource.
*ProductCategoryApi* | [**putProductCategoryItem**](docs/Api/ProductCategoryApi.md#putproductcategoryitem) | **PUT** /api/product_categories/{id} | Replaces the ProductCategory resource.

## Documentation For Models

 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse200Hydrasearch](docs/Model/InlineResponse200Hydrasearch.md)
 - [InlineResponse200HydrasearchHydramapping](docs/Model/InlineResponse200HydrasearchHydramapping.md)
 - [InlineResponse200Hydraview](docs/Model/InlineResponse200Hydraview.md)
 - [PriceList](docs/Model/PriceList.md)
 - [PriceListJsonld](docs/Model/PriceListJsonld.md)
 - [PriceListProduct](docs/Model/PriceListProduct.md)
 - [PriceListProductJsonld](docs/Model/PriceListProductJsonld.md)
 - [Product](docs/Model/Product.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductCategoryJsonld](docs/Model/ProductCategoryJsonld.md)
 - [ProductJsonld](docs/Model/ProductJsonld.md)

## Documentation For Authorization

 All endpoints do not require authorization.


## Author



