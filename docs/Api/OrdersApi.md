# OpenAPI\Client\OrdersApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiOrdersCancelPost()**](OrdersApi.md#apiOrdersCancelPost) | **POST** /api/Orders/cancel | 
[**apiOrdersCancelallPost()**](OrdersApi.md#apiOrdersCancelallPost) | **POST** /api/Orders/cancelall | 
[**apiOrdersPost()**](OrdersApi.md#apiOrdersPost) | **POST** /api/Orders | 
[**apiVversionOrdersCancelPost()**](OrdersApi.md#apiVversionOrdersCancelPost) | **POST** /api/v{version}/Orders/cancel | 
[**apiVversionOrdersCancelallPost()**](OrdersApi.md#apiVversionOrdersCancelallPost) | **POST** /api/v{version}/Orders/cancelall | 
[**apiVversionOrdersPost()**](OrdersApi.md#apiVversionOrdersPost) | **POST** /api/v{version}/Orders | 


## `apiOrdersCancelPost()`

```php
apiOrdersCancelPost($order_id): \OpenAPI\Client\Model\OrderCancelResult
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
    $result = $apiInstance->apiOrdersCancelPost($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiOrdersCancelPost: ', $e->getMessage(), PHP_EOL;
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

## `apiOrdersCancelallPost()`

```php
apiOrdersCancelallPost($pair_name, $is_margin): \OpenAPI\Client\Model\OrderCancelResult[]
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
    $result = $apiInstance->apiOrdersCancelallPost($pair_name, $is_margin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiOrdersCancelallPost: ', $e->getMessage(), PHP_EOL;
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

## `apiOrdersPost()`

```php
apiOrdersPost($post_orders_request): \OpenAPI\Client\Model\OrderCreateResult
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
    $result = $apiInstance->apiOrdersPost($post_orders_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiOrdersPost: ', $e->getMessage(), PHP_EOL;
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

## `apiVversionOrdersCancelPost()`

```php
apiVversionOrdersCancelPost($version, $order_id): \OpenAPI\Client\Model\OrderCancelResult
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
$version = 'version_example'; // string
$order_id = 56; // int

try {
    $result = $apiInstance->apiVversionOrdersCancelPost($version, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiVversionOrdersCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
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

## `apiVversionOrdersCancelallPost()`

```php
apiVversionOrdersCancelallPost($version, $pair_name, $is_margin): \OpenAPI\Client\Model\OrderCancelResult[]
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
$version = 'version_example'; // string
$pair_name = 'pair_name_example'; // string
$is_margin = True; // bool

try {
    $result = $apiInstance->apiVversionOrdersCancelallPost($version, $pair_name, $is_margin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiVversionOrdersCancelallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
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

## `apiVversionOrdersPost()`

```php
apiVversionOrdersPost($version, $post_orders_request): \OpenAPI\Client\Model\OrderCreateResult
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
$version = 'version_example'; // string
$post_orders_request = new \OpenAPI\Client\Model\PostOrdersRequest(); // \OpenAPI\Client\Model\PostOrdersRequest

try {
    $result = $apiInstance->apiVversionOrdersPost($version, $post_orders_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiVversionOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
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
