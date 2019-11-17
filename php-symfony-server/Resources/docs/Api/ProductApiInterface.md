# Swagger\Server\Api\ProductApiInterface

All URIs are relative to *https://productstore.infoenter.com.br/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addproduct**](ProductApiInterface.md#addproduct) | **POST** /product | Add a new product to the store
[**deleteproduct**](ProductApiInterface.md#deleteproduct) | **DELETE** /product/{productId} | Deletes a product
[**findproductsByStatus**](ProductApiInterface.md#findproductsByStatus) | **GET** /product/findByStatus | Finds products by status
[**findproductsByTags**](ProductApiInterface.md#findproductsByTags) | **GET** /product/findByTags | Finds products by tags
[**getproductById**](ProductApiInterface.md#getproductById) | **GET** /product/{productId} | Find product by ID
[**updateproduct**](ProductApiInterface.md#updateproduct) | **PUT** /product | Update an existing product
[**updateproductWithForm**](ProductApiInterface.md#updateproductWithForm) | **POST** /product/{productId} | Updates a product in the store with form data
[**uploadFile**](ProductApiInterface.md#uploadFile) | **POST** /product/{productId}/uploadImage | uploads an image


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.product:
        class: Acme\MyBundle\Api\ProductApi
        tags:
            - { name: "swagger_server.api", api: "product" }
    # ...
```

## **addproduct**
> addproduct($body)

Add a new product to the store



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#addproduct
     */
    public function addproduct(Product $body)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Swagger\Server\Model\Product**](../Model/Product.md)| product object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **deleteproduct**
> deleteproduct($productId, $apiKey)

Deletes a product



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#deleteproduct
     */
    public function deleteproduct($productId, $apiKey = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| product id to delete |
 **apiKey** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **findproductsByStatus**
> Swagger\Server\Model\Product findproductsByStatus($status)

Finds products by status

Multiple status values can be provided with comma separated strings

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#findproductsByStatus
     */
    public function findproductsByStatus(array $status)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**string**](../Model/string.md)| Status values that need to be considered for filter |

### Return type

[**Swagger\Server\Model\Product**](../Model/Product.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **findproductsByTags**
> Swagger\Server\Model\Product findproductsByTags($tags)

Finds products by tags

Muliple tags can be provided with comma separated strings. Use         tag1, tag2, tag3 for testing.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#findproductsByTags
     */
    public function findproductsByTags(array $tags)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**string**](../Model/string.md)| Tags to filter by |

### Return type

[**Swagger\Server\Model\Product**](../Model/Product.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **getproductById**
> Swagger\Server\Model\Product getproductById($productId)

Find product by ID

Returns a single product

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure API key authorization: api_key
     */
    public function setapi_key($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#getproductById
     */
    public function getproductById($productId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| ID of product to return |

### Return type

[**Swagger\Server\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateproduct**
> updateproduct($body)

Update an existing product



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#updateproduct
     */
    public function updateproduct(Product $body)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**Swagger\Server\Model\Product**](../Model/Product.md)| product object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **updateproductWithForm**
> updateproductWithForm($productId, $name, $status)

Updates a product in the store with form data



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#updateproductWithForm
     */
    public function updateproductWithForm($productId, $name = null, $status = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| ID of product that needs to be updated |
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

## **uploadFile**
> Swagger\Server\Model\ApiResponse uploadFile($productId, $additionalMetadata, $file)

uploads an image



### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProductApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\ProductApiInterface;

class ProductApi implements ProductApiInterface
{

    /**
     * Configure OAuth2 access token for authorization: productstore_auth
     */
    public function setproductstore_auth($oauthToken)
    {
        // Retrieve logged in user from $oauthToken ...
    }

    // ...

    /**
     * Implementation of ProductApiInterface#uploadFile
     */
    public function uploadFile($productId, $additionalMetadata = null, UploadedFile $file = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **int**| ID of product to update |
 **additionalMetadata** | **string**| Additional data to pass to server | [optional]
 **file** | **UploadedFile**| file to upload | [optional]

### Return type

[**Swagger\Server\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[productstore_auth](../../README.md#productstore_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

