# OpenAPI\Client\OrdersApi

All URIs are relative to http://api.bcflex.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1OrdersCancelPost()**](OrdersApi.md#apiV1OrdersCancelPost) | **POST** /api/v1/orders/cancel | 
[**apiV1OrdersCancelallPost()**](OrdersApi.md#apiV1OrdersCancelallPost) | **POST** /api/v1/orders/cancelall | 
[**apiV1OrdersPost()**](OrdersApi.md#apiV1OrdersPost) | **POST** /api/v1/orders | 


## `apiV1OrdersCancelPost()`

```php
apiV1OrdersCancelPost($order_id): \OpenAPI\Client\Model\OrderCancelResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int

try {
    $result = $apiInstance->apiV1OrdersCancelPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\OrderCancelResult**](../Model/OrderCancelResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersCancelallPost()`

```php
apiV1OrdersCancelallPost($pair_name, $is_margin): \OpenAPI\Client\Model\OrderCancelResult[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pair_name = 'pair_name_example'; // string
$is_margin = True; // bool

try {
    $result = $apiInstance->apiV1OrdersCancelallPost($pair_name, $is_margin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersCancelallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pair_name** | **string**|  | [optional]
 **is_margin** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\OrderCancelResult[]**](../Model/OrderCancelResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV1OrdersPost()`

```php
apiV1OrdersPost($post_orders_request): \OpenAPI\Client\Model\OrderCreateResult
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: X-BF-API-KEY
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-BF-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-BF-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_orders_request = new \OpenAPI\Client\Model\PostOrdersRequest(); // \OpenAPI\Client\Model\PostOrdersRequest

try {
    $result = $apiInstance->apiV1OrdersPost($post_orders_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiV1OrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_orders_request** | [**\OpenAPI\Client\Model\PostOrdersRequest**](../Model/PostOrdersRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\OrderCreateResult**](../Model/OrderCreateResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
