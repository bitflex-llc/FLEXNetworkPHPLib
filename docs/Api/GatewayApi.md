# OpenAPI\Client\GatewayApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiGatewayMerchantGet()**](GatewayApi.md#apiGatewayMerchantGet) | **GET** /api/Gateway/merchant | 
[**apiGatewayMerchantPost()**](GatewayApi.md#apiGatewayMerchantPost) | **POST** /api/Gateway/merchant | 
[**apiGatewayStatusGet()**](GatewayApi.md#apiGatewayStatusGet) | **GET** /api/Gateway/status | 
[**apiGatewayTransactionGet()**](GatewayApi.md#apiGatewayTransactionGet) | **GET** /api/Gateway/transaction | 
[**apiGatewayTransactionPost()**](GatewayApi.md#apiGatewayTransactionPost) | **POST** /api/Gateway/transaction | 
[**apiVversionGatewayMerchantGet()**](GatewayApi.md#apiVversionGatewayMerchantGet) | **GET** /api/v{version}/Gateway/merchant | 
[**apiVversionGatewayMerchantPost()**](GatewayApi.md#apiVversionGatewayMerchantPost) | **POST** /api/v{version}/Gateway/merchant | 
[**apiVversionGatewayStatusGet()**](GatewayApi.md#apiVversionGatewayStatusGet) | **GET** /api/v{version}/Gateway/status | 
[**apiVversionGatewayTransactionGet()**](GatewayApi.md#apiVversionGatewayTransactionGet) | **GET** /api/v{version}/Gateway/transaction | 
[**apiVversionGatewayTransactionPost()**](GatewayApi.md#apiVversionGatewayTransactionPost) | **POST** /api/v{version}/Gateway/transaction | 


## `apiGatewayMerchantGet()`

```php
apiGatewayMerchantGet(): \OpenAPI\Client\Model\Merchant[]
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiGatewayMerchantGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiGatewayMerchantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Merchant[]**](../Model/Merchant.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGatewayMerchantPost()`

```php
apiGatewayMerchantPost($create_merchant_request): \OpenAPI\Client\Model\Merchant
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_merchant_request = new \OpenAPI\Client\Model\CreateMerchantRequest(); // \OpenAPI\Client\Model\CreateMerchantRequest

try {
    $result = $apiInstance->apiGatewayMerchantPost($create_merchant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiGatewayMerchantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_merchant_request** | [**\OpenAPI\Client\Model\CreateMerchantRequest**](../Model/CreateMerchantRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGatewayStatusGet()`

```php
apiGatewayStatusGet($transaction_id): \OpenAPI\Client\Model\ApiTransactionStatusResponse
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiGatewayStatusGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiGatewayStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiTransactionStatusResponse**](../Model/ApiTransactionStatusResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGatewayTransactionGet()`

```php
apiGatewayTransactionGet($transaction_id): \OpenAPI\Client\Model\ApiPaymentPage
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiGatewayTransactionGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiGatewayTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiPaymentPage**](../Model/ApiPaymentPage.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGatewayTransactionPost()`

```php
apiGatewayTransactionPost($create_transaction_request): \OpenAPI\Client\Model\CreateTransactionResult
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_transaction_request = new \OpenAPI\Client\Model\CreateTransactionRequest(); // \OpenAPI\Client\Model\CreateTransactionRequest

try {
    $result = $apiInstance->apiGatewayTransactionPost($create_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiGatewayTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_transaction_request** | [**\OpenAPI\Client\Model\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateTransactionResult**](../Model/CreateTransactionResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGatewayMerchantGet()`

```php
apiVversionGatewayMerchantGet($version): \OpenAPI\Client\Model\Merchant[]
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionGatewayMerchantGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiVversionGatewayMerchantGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\Merchant[]**](../Model/Merchant.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGatewayMerchantPost()`

```php
apiVversionGatewayMerchantPost($version, $create_merchant_request): \OpenAPI\Client\Model\Merchant
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$create_merchant_request = new \OpenAPI\Client\Model\CreateMerchantRequest(); // \OpenAPI\Client\Model\CreateMerchantRequest

try {
    $result = $apiInstance->apiVversionGatewayMerchantPost($version, $create_merchant_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiVversionGatewayMerchantPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **create_merchant_request** | [**\OpenAPI\Client\Model\CreateMerchantRequest**](../Model/CreateMerchantRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Merchant**](../Model/Merchant.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGatewayStatusGet()`

```php
apiVversionGatewayStatusGet($version, $transaction_id): \OpenAPI\Client\Model\ApiTransactionStatusResponse
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiVversionGatewayStatusGet($version, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiVversionGatewayStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiTransactionStatusResponse**](../Model/ApiTransactionStatusResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGatewayTransactionGet()`

```php
apiVversionGatewayTransactionGet($version, $transaction_id): \OpenAPI\Client\Model\ApiPaymentPage
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->apiVversionGatewayTransactionGet($version, $transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiVversionGatewayTransactionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **transaction_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\ApiPaymentPage**](../Model/ApiPaymentPage.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGatewayTransactionPost()`

```php
apiVversionGatewayTransactionPost($version, $create_transaction_request): \OpenAPI\Client\Model\CreateTransactionResult
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


$apiInstance = new OpenAPI\Client\Api\GatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$create_transaction_request = new \OpenAPI\Client\Model\CreateTransactionRequest(); // \OpenAPI\Client\Model\CreateTransactionRequest

try {
    $result = $apiInstance->apiVversionGatewayTransactionPost($version, $create_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GatewayApi->apiVversionGatewayTransactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **create_transaction_request** | [**\OpenAPI\Client\Model\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\CreateTransactionResult**](../Model/CreateTransactionResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
