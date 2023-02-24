# OpenAPI\Client\NotificationsApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiNotificationsPricealertDelete()**](NotificationsApi.md#apiNotificationsPricealertDelete) | **DELETE** /api/Notifications/pricealert | 
[**apiNotificationsPricealertGet()**](NotificationsApi.md#apiNotificationsPricealertGet) | **GET** /api/Notifications/pricealert | 
[**apiNotificationsPricealertPost()**](NotificationsApi.md#apiNotificationsPricealertPost) | **POST** /api/Notifications/pricealert | 
[**apiVversionNotificationsPricealertDelete()**](NotificationsApi.md#apiVversionNotificationsPricealertDelete) | **DELETE** /api/v{version}/Notifications/pricealert | 
[**apiVversionNotificationsPricealertGet()**](NotificationsApi.md#apiVversionNotificationsPricealertGet) | **GET** /api/v{version}/Notifications/pricealert | 
[**apiVversionNotificationsPricealertPost()**](NotificationsApi.md#apiVversionNotificationsPricealertPost) | **POST** /api/v{version}/Notifications/pricealert | 


## `apiNotificationsPricealertDelete()`

```php
apiNotificationsPricealertDelete($alert_id): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$alert_id = 'alert_id_example'; // string

try {
    $result = $apiInstance->apiNotificationsPricealertDelete($alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiNotificationsPricealertDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alert_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotificationsPricealertGet()`

```php
apiNotificationsPricealertGet($pair_name): \OpenAPI\Client\Model\PriceAlert[]
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pair_name = 'pair_name_example'; // string

try {
    $result = $apiInstance->apiNotificationsPricealertGet($pair_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiNotificationsPricealertGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pair_name** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PriceAlert[]**](../Model/PriceAlert.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiNotificationsPricealertPost()`

```php
apiNotificationsPricealertPost($set_price_alert_request_model): \OpenAPI\Client\Model\SetPriceAlertResponseModel
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_price_alert_request_model = new \OpenAPI\Client\Model\SetPriceAlertRequestModel(); // \OpenAPI\Client\Model\SetPriceAlertRequestModel

try {
    $result = $apiInstance->apiNotificationsPricealertPost($set_price_alert_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiNotificationsPricealertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_price_alert_request_model** | [**\OpenAPI\Client\Model\SetPriceAlertRequestModel**](../Model/SetPriceAlertRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SetPriceAlertResponseModel**](../Model/SetPriceAlertResponseModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionNotificationsPricealertDelete()`

```php
apiVversionNotificationsPricealertDelete($version, $alert_id): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$alert_id = 'alert_id_example'; // string

try {
    $result = $apiInstance->apiVversionNotificationsPricealertDelete($version, $alert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiVversionNotificationsPricealertDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **alert_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionNotificationsPricealertGet()`

```php
apiVversionNotificationsPricealertGet($version, $pair_name): \OpenAPI\Client\Model\PriceAlert[]
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$pair_name = 'pair_name_example'; // string

try {
    $result = $apiInstance->apiVversionNotificationsPricealertGet($version, $pair_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiVversionNotificationsPricealertGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **pair_name** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PriceAlert[]**](../Model/PriceAlert.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionNotificationsPricealertPost()`

```php
apiVversionNotificationsPricealertPost($version, $set_price_alert_request_model): \OpenAPI\Client\Model\SetPriceAlertResponseModel
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


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$set_price_alert_request_model = new \OpenAPI\Client\Model\SetPriceAlertRequestModel(); // \OpenAPI\Client\Model\SetPriceAlertRequestModel

try {
    $result = $apiInstance->apiVversionNotificationsPricealertPost($version, $set_price_alert_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->apiVversionNotificationsPricealertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **set_price_alert_request_model** | [**\OpenAPI\Client\Model\SetPriceAlertRequestModel**](../Model/SetPriceAlertRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SetPriceAlertResponseModel**](../Model/SetPriceAlertResponseModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
