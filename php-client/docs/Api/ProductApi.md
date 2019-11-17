# Swagger\Client\ProductApi

All URIs are relative to *https://productstore.infoenter.com.br/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addproduct**](ProductApi.md#addproduct) | **POST** /product | Add a new product to the store
[**deleteproduct**](ProductApi.md#deleteproduct) | **DELETE** /product/{productId} | Deletes a product
[**findproductsByStatus**](ProductApi.md#findproductsByStatus) | **GET** /product/findByStatus | Finds products by status
[**findproductsByTags**](ProductApi.md#findproductsByTags) | **GET** /product/findByTags | Finds products by tags
[**getproductById**](ProductApi.md#getproductById) | **GET** /product/{productId} | Find product by ID
[**updateproduct**](ProductApi.md#updateproduct) | **PUT** /product | Update an existing product
[**updateproductWithForm**](ProductApi.md#updateproductWithForm) | **POST** /product/{productId} | Updates a product in the store with form data
[**uploadFile**](ProductApi.md#uploadFile) | **POST** /product/{productId}/uploadImage | uploads an image


# **addproduct**
> addproduct($body)

Add a new product to the store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | product object that needs to be added to the store

try {
    $apiInstance->addproduct($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->addproduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Product**](../Model/Product.md)| product object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteproduct**
> deleteproduct($product_id, $api_key)

Deletes a product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 789; // int | product id to delete
$api_key = "api_key_example"; // string | 

try {
    $apiInstance->deleteproduct($product_id, $api_key);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteproduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| product id to delete |
 **api_key** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findproductsByStatus**
> \Swagger\Client\Model\Product[] findproductsByStatus($status)

Finds products by status

Multiple status values can be provided with comma separated strings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = array("status_example"); // string[] | Status values that need to be considered for filter

try {
    $result = $apiInstance->findproductsByStatus($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->findproductsByStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**string[]**](../Model/string.md)| Status values that need to be considered for filter |

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findproductsByTags**
> \Swagger\Client\Model\Product[] findproductsByTags($tags)

Finds products by tags

Muliple tags can be provided with comma separated strings. Use         tag1, tag2, tag3 for testing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tags = array("tags_example"); // string[] | Tags to filter by

try {
    $result = $apiInstance->findproductsByTags($tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->findproductsByTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**string[]**](../Model/string.md)| Tags to filter by |

### Return type

[**\Swagger\Client\Model\Product[]**](../Model/Product.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getproductById**
> \Swagger\Client\Model\Product getproductById($product_id)

Find product by ID

Returns a single product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 789; // int | ID of product to return

try {
    $result = $apiInstance->getproductById($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getproductById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of product to return |

### Return type

[**\Swagger\Client\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateproduct**
> updateproduct($body)

Update an existing product



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Product(); // \Swagger\Client\Model\Product | product object that needs to be added to the store

try {
    $apiInstance->updateproduct($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateproduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Product**](../Model/Product.md)| product object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateproductWithForm**
> updateproductWithForm($product_id, $name, $status)

Updates a product in the store with form data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 789; // int | ID of product that needs to be updated
$name = "name_example"; // string | Updated name of the product
$status = "status_example"; // string | Updated status of the product

try {
    $apiInstance->updateproductWithForm($product_id, $name, $status);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->updateproductWithForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of product that needs to be updated |
 **name** | **string**| Updated name of the product | [optional]
 **status** | **string**| Updated status of the product | [optional]

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Swagger\Client\Model\ApiResponse uploadFile($product_id, $additional_metadata, $file)

uploads an image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: productstore_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 789; // int | ID of product to update
$additional_metadata = "additional_metadata_example"; // string | Additional data to pass to server
$file = "/path/to/file.txt"; // \SplFileObject | file to upload

try {
    $result = $apiInstance->uploadFile($product_id, $additional_metadata, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| ID of product to update |
 **additional_metadata** | **string**| Additional data to pass to server | [optional]
 **file** | **\SplFileObject**| file to upload | [optional]

### Return type

[**\Swagger\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

