# OpenAPI\Client\GuardApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiGuardGetAccessTokensGet()**](GuardApi.md#apiGuardGetAccessTokensGet) | **GET** /api/Guard/GetAccessTokens | 
[**apiGuardGetlastGet()**](GuardApi.md#apiGuardGetlastGet) | **GET** /api/Guard/getlast | 
[**apiGuardPrecheckLogoutPost()**](GuardApi.md#apiGuardPrecheckLogoutPost) | **POST** /api/Guard/PrecheckLogout | 
[**apiGuardRequestGet()**](GuardApi.md#apiGuardRequestGet) | **GET** /api/Guard/request | 
[**apiGuardRequestPost()**](GuardApi.md#apiGuardRequestPost) | **POST** /api/Guard/request | 
[**apiGuardRequestSettingsTokenPost()**](GuardApi.md#apiGuardRequestSettingsTokenPost) | **POST** /api/Guard/RequestSettingsToken | 
[**apiGuardRevokeTokenByIdPost()**](GuardApi.md#apiGuardRevokeTokenByIdPost) | **POST** /api/Guard/RevokeTokenById | 
[**apiGuardRevokeTokenPost()**](GuardApi.md#apiGuardRevokeTokenPost) | **POST** /api/Guard/RevokeToken | 
[**apiGuardSubmitPost()**](GuardApi.md#apiGuardSubmitPost) | **POST** /api/Guard/submit | 
[**apiGuardUpdatePost()**](GuardApi.md#apiGuardUpdatePost) | **POST** /api/Guard/update | 
[**apiVversionGuardGetAccessTokensGet()**](GuardApi.md#apiVversionGuardGetAccessTokensGet) | **GET** /api/v{version}/Guard/GetAccessTokens | 
[**apiVversionGuardGetlastGet()**](GuardApi.md#apiVversionGuardGetlastGet) | **GET** /api/v{version}/Guard/getlast | 
[**apiVversionGuardPrecheckLogoutPost()**](GuardApi.md#apiVversionGuardPrecheckLogoutPost) | **POST** /api/v{version}/Guard/PrecheckLogout | 
[**apiVversionGuardRequestGet()**](GuardApi.md#apiVversionGuardRequestGet) | **GET** /api/v{version}/Guard/request | 
[**apiVversionGuardRequestPost()**](GuardApi.md#apiVversionGuardRequestPost) | **POST** /api/v{version}/Guard/request | 
[**apiVversionGuardRequestSettingsTokenPost()**](GuardApi.md#apiVversionGuardRequestSettingsTokenPost) | **POST** /api/v{version}/Guard/RequestSettingsToken | 
[**apiVversionGuardRevokeTokenByIdPost()**](GuardApi.md#apiVversionGuardRevokeTokenByIdPost) | **POST** /api/v{version}/Guard/RevokeTokenById | 
[**apiVversionGuardRevokeTokenPost()**](GuardApi.md#apiVversionGuardRevokeTokenPost) | **POST** /api/v{version}/Guard/RevokeToken | 
[**apiVversionGuardSubmitPost()**](GuardApi.md#apiVversionGuardSubmitPost) | **POST** /api/v{version}/Guard/submit | 
[**apiVversionGuardUpdatePost()**](GuardApi.md#apiVversionGuardUpdatePost) | **POST** /api/v{version}/Guard/update | 


## `apiGuardGetAccessTokensGet()`

```php
apiGuardGetAccessTokensGet(): \OpenAPI\Client\Model\GetAccessTokensResponse[]
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiGuardGetAccessTokensGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardGetAccessTokensGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetAccessTokensResponse[]**](../Model/GetAccessTokensResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardGetlastGet()`

```php
apiGuardGetlastGet(): \OpenAPI\Client\Model\GuardRequest
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiGuardGetlastGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardGetlastGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GuardRequest**](../Model/GuardRequest.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardPrecheckLogoutPost()`

```php
apiGuardPrecheckLogoutPost(): \OpenAPI\Client\Model\PrecheckLogoutResult
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiGuardPrecheckLogoutPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardPrecheckLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PrecheckLogoutResult**](../Model/PrecheckLogoutResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardRequestGet()`

```php
apiGuardRequestGet($encrypted_id): \OpenAPI\Client\Model\GetGuardRequestDataResponse
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$encrypted_id = 'encrypted_id_example'; // string

try {
    $result = $apiInstance->apiGuardRequestGet($encrypted_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardRequestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetGuardRequestDataResponse**](../Model/GetGuardRequestDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardRequestPost()`

```php
apiGuardRequestPost($guard_action_type, $create_request_payload): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$guard_action_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GuardActionType(); // \OpenAPI\Client\Model\GuardActionType
$create_request_payload = new \OpenAPI\Client\Model\CreateRequestPayload(); // \OpenAPI\Client\Model\CreateRequestPayload

try {
    $result = $apiInstance->apiGuardRequestPost($guard_action_type, $create_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guard_action_type** | [**\OpenAPI\Client\Model\GuardActionType**](../Model/.md)|  | [optional]
 **create_request_payload** | [**\OpenAPI\Client\Model\CreateRequestPayload**](../Model/CreateRequestPayload.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardRequestSettingsTokenPost()`

```php
apiGuardRequestSettingsTokenPost($request_settings_token_response_request_model): \OpenAPI\Client\Model\RequestSettingsTokenResponseModel
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_settings_token_response_request_model = new \OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel(); // \OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel

try {
    $result = $apiInstance->apiGuardRequestSettingsTokenPost($request_settings_token_response_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardRequestSettingsTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_settings_token_response_request_model** | [**\OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel**](../Model/RequestSettingsTokenResponseRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RequestSettingsTokenResponseModel**](../Model/RequestSettingsTokenResponseModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardRevokeTokenByIdPost()`

```php
apiGuardRevokeTokenByIdPost($revoke_token_by_id_request_model)
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revoke_token_by_id_request_model = new \OpenAPI\Client\Model\RevokeTokenByIdRequestModel(); // \OpenAPI\Client\Model\RevokeTokenByIdRequestModel

try {
    $apiInstance->apiGuardRevokeTokenByIdPost($revoke_token_by_id_request_model);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardRevokeTokenByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revoke_token_by_id_request_model** | [**\OpenAPI\Client\Model\RevokeTokenByIdRequestModel**](../Model/RevokeTokenByIdRequestModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardRevokeTokenPost()`

```php
apiGuardRevokeTokenPost($body)
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->apiGuardRevokeTokenPost($body);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardRevokeTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardSubmitPost()`

```php
apiGuardSubmitPost($id): \OpenAPI\Client\Model\GuardSubmitResult
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiGuardSubmitPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardSubmitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuardSubmitResult**](../Model/GuardSubmitResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiGuardUpdatePost()`

```php
apiGuardUpdatePost($id, $status): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GuardRequestStatus(); // \OpenAPI\Client\Model\GuardRequestStatus

try {
    $result = $apiInstance->apiGuardUpdatePost($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiGuardUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **status** | [**\OpenAPI\Client\Model\GuardRequestStatus**](../Model/.md)|  | [optional]

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

## `apiVversionGuardGetAccessTokensGet()`

```php
apiVversionGuardGetAccessTokensGet($version): \OpenAPI\Client\Model\GetAccessTokensResponse[]
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionGuardGetAccessTokensGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardGetAccessTokensGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GetAccessTokensResponse[]**](../Model/GetAccessTokensResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardGetlastGet()`

```php
apiVversionGuardGetlastGet($version): \OpenAPI\Client\Model\GuardRequest
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionGuardGetlastGet($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardGetlastGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\GuardRequest**](../Model/GuardRequest.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardPrecheckLogoutPost()`

```php
apiVversionGuardPrecheckLogoutPost($version): \OpenAPI\Client\Model\PrecheckLogoutResult
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $result = $apiInstance->apiVversionGuardPrecheckLogoutPost($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardPrecheckLogoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\PrecheckLogoutResult**](../Model/PrecheckLogoutResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardRequestGet()`

```php
apiVversionGuardRequestGet($version, $encrypted_id): \OpenAPI\Client\Model\GetGuardRequestDataResponse
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$encrypted_id = 'encrypted_id_example'; // string

try {
    $result = $apiInstance->apiVversionGuardRequestGet($version, $encrypted_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardRequestGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **encrypted_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GetGuardRequestDataResponse**](../Model/GetGuardRequestDataResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardRequestPost()`

```php
apiVversionGuardRequestPost($version, $guard_action_type, $create_request_payload): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$guard_action_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GuardActionType(); // \OpenAPI\Client\Model\GuardActionType
$create_request_payload = new \OpenAPI\Client\Model\CreateRequestPayload(); // \OpenAPI\Client\Model\CreateRequestPayload

try {
    $result = $apiInstance->apiVversionGuardRequestPost($version, $guard_action_type, $create_request_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **guard_action_type** | [**\OpenAPI\Client\Model\GuardActionType**](../Model/.md)|  | [optional]
 **create_request_payload** | [**\OpenAPI\Client\Model\CreateRequestPayload**](../Model/CreateRequestPayload.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\BitflexApiResponseBase**](../Model/BitflexApiResponseBase.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardRequestSettingsTokenPost()`

```php
apiVversionGuardRequestSettingsTokenPost($version, $request_settings_token_response_request_model): \OpenAPI\Client\Model\RequestSettingsTokenResponseModel
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$request_settings_token_response_request_model = new \OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel(); // \OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel

try {
    $result = $apiInstance->apiVversionGuardRequestSettingsTokenPost($version, $request_settings_token_response_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardRequestSettingsTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **request_settings_token_response_request_model** | [**\OpenAPI\Client\Model\RequestSettingsTokenResponseRequestModel**](../Model/RequestSettingsTokenResponseRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\RequestSettingsTokenResponseModel**](../Model/RequestSettingsTokenResponseModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardRevokeTokenByIdPost()`

```php
apiVversionGuardRevokeTokenByIdPost($version, $revoke_token_by_id_request_model)
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$revoke_token_by_id_request_model = new \OpenAPI\Client\Model\RevokeTokenByIdRequestModel(); // \OpenAPI\Client\Model\RevokeTokenByIdRequestModel

try {
    $apiInstance->apiVversionGuardRevokeTokenByIdPost($version, $revoke_token_by_id_request_model);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardRevokeTokenByIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **revoke_token_by_id_request_model** | [**\OpenAPI\Client\Model\RevokeTokenByIdRequestModel**](../Model/RevokeTokenByIdRequestModel.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardRevokeTokenPost()`

```php
apiVversionGuardRevokeTokenPost($version, $body)
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiVversionGuardRevokeTokenPost($version, $body);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardRevokeTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardSubmitPost()`

```php
apiVversionGuardSubmitPost($version, $id): \OpenAPI\Client\Model\GuardSubmitResult
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiVversionGuardSubmitPost($version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardSubmitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\GuardSubmitResult**](../Model/GuardSubmitResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionGuardUpdatePost()`

```php
apiVversionGuardUpdatePost($version, $id, $status): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\GuardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$id = 'id_example'; // string
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GuardRequestStatus(); // \OpenAPI\Client\Model\GuardRequestStatus

try {
    $result = $apiInstance->apiVversionGuardUpdatePost($version, $id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GuardApi->apiVversionGuardUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **id** | **string**|  | [optional]
 **status** | [**\OpenAPI\Client\Model\GuardRequestStatus**](../Model/.md)|  | [optional]

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
