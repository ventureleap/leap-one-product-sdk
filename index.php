<?php

require dirname(__DIR__).'/SwaggerClient-php/vendor/autoload.php';

$product = new \Swagger\Client\Model\ProductJsonld();
$product->setName("Test");
$product->setApplicationId("Iltis");
$product->setPriority(7);

$configuration = new \Swagger\Client\Configuration();
$configuration->setHost("http://localhost:8000");

$api = new \Swagger\Client\Api\ProductApi(null, $configuration);

$api->postProductCollectionWithHttpInfo($product);
