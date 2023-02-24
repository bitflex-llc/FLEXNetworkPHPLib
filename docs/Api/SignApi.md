# OpenAPI\Client\SignApi

All URIs are relative to http://127.0.0.1:5000.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSignAskForPermissionPost()**](SignApi.md#apiSignAskForPermissionPost) | **POST** /api/Sign/AskForPermission | 
[**apiSignAskPermissionSignInPost()**](SignApi.md#apiSignAskPermissionSignInPost) | **POST** /api/Sign/AskPermissionSignIn | 
[**apiSignCheck2StepVerificationStatusGet()**](SignApi.md#apiSignCheck2StepVerificationStatusGet) | **GET** /api/Sign/Check2StepVerificationStatus | 
[**apiSignConfirmPermissionSignInPost()**](SignApi.md#apiSignConfirmPermissionSignInPost) | **POST** /api/Sign/ConfirmPermissionSignIn | 
[**apiSignConfirmemailPost()**](SignApi.md#apiSignConfirmemailPost) | **POST** /api/Sign/confirmemail | 
[**apiSignGetPermissionDetailsGet()**](SignApi.md#apiSignGetPermissionDetailsGet) | **GET** /api/Sign/GetPermissionDetails | 
[**apiSignGetreferreremailGet()**](SignApi.md#apiSignGetreferreremailGet) | **GET** /api/Sign/getreferreremail | 
[**apiSignIsAnyDeviceOnlinePost()**](SignApi.md#apiSignIsAnyDeviceOnlinePost) | **POST** /api/Sign/IsAnyDeviceOnline | 
[**apiSignMobileConfirmationRequestPost()**](SignApi.md#apiSignMobileConfirmationRequestPost) | **POST** /api/Sign/MobileConfirmationRequest | 
[**apiSignResetpasswordPost()**](SignApi.md#apiSignResetpasswordPost) | **POST** /api/Sign/resetpassword | 
[**apiSignRestorepasswordPost()**](SignApi.md#apiSignRestorepasswordPost) | **POST** /api/Sign/restorepassword | 
[**apiSignSetnewpasswordPost()**](SignApi.md#apiSignSetnewpasswordPost) | **POST** /api/Sign/setnewpassword | 
[**apiSignSigninGet()**](SignApi.md#apiSignSigninGet) | **GET** /api/Sign/signin | 
[**apiSignSigninPost()**](SignApi.md#apiSignSigninPost) | **POST** /api/Sign/signin | 
[**apiSignSignoutDelete()**](SignApi.md#apiSignSignoutDelete) | **DELETE** /api/Sign/signout | 
[**apiSignSignupPost()**](SignApi.md#apiSignSignupPost) | **POST** /api/Sign/signup | 
[**apiVversionSignAskForPermissionPost()**](SignApi.md#apiVversionSignAskForPermissionPost) | **POST** /api/v{version}/Sign/AskForPermission | 
[**apiVversionSignAskPermissionSignInPost()**](SignApi.md#apiVversionSignAskPermissionSignInPost) | **POST** /api/v{version}/Sign/AskPermissionSignIn | 
[**apiVversionSignCheck2StepVerificationStatusGet()**](SignApi.md#apiVversionSignCheck2StepVerificationStatusGet) | **GET** /api/v{version}/Sign/Check2StepVerificationStatus | 
[**apiVversionSignConfirmPermissionSignInPost()**](SignApi.md#apiVversionSignConfirmPermissionSignInPost) | **POST** /api/v{version}/Sign/ConfirmPermissionSignIn | 
[**apiVversionSignConfirmemailPost()**](SignApi.md#apiVversionSignConfirmemailPost) | **POST** /api/v{version}/Sign/confirmemail | 
[**apiVversionSignGetPermissionDetailsGet()**](SignApi.md#apiVversionSignGetPermissionDetailsGet) | **GET** /api/v{version}/Sign/GetPermissionDetails | 
[**apiVversionSignGetreferreremailGet()**](SignApi.md#apiVversionSignGetreferreremailGet) | **GET** /api/v{version}/Sign/getreferreremail | 
[**apiVversionSignIsAnyDeviceOnlinePost()**](SignApi.md#apiVversionSignIsAnyDeviceOnlinePost) | **POST** /api/v{version}/Sign/IsAnyDeviceOnline | 
[**apiVversionSignMobileConfirmationRequestPost()**](SignApi.md#apiVversionSignMobileConfirmationRequestPost) | **POST** /api/v{version}/Sign/MobileConfirmationRequest | 
[**apiVversionSignResetpasswordPost()**](SignApi.md#apiVversionSignResetpasswordPost) | **POST** /api/v{version}/Sign/resetpassword | 
[**apiVversionSignRestorepasswordPost()**](SignApi.md#apiVversionSignRestorepasswordPost) | **POST** /api/v{version}/Sign/restorepassword | 
[**apiVversionSignSetnewpasswordPost()**](SignApi.md#apiVversionSignSetnewpasswordPost) | **POST** /api/v{version}/Sign/setnewpassword | 
[**apiVversionSignSigninGet()**](SignApi.md#apiVversionSignSigninGet) | **GET** /api/v{version}/Sign/signin | 
[**apiVversionSignSigninPost()**](SignApi.md#apiVversionSignSigninPost) | **POST** /api/v{version}/Sign/signin | 
[**apiVversionSignSignoutDelete()**](SignApi.md#apiVversionSignSignoutDelete) | **DELETE** /api/v{version}/Sign/signout | 
[**apiVversionSignSignupPost()**](SignApi.md#apiVversionSignSignupPost) | **POST** /api/v{version}/Sign/signup | 


## `apiSignAskForPermissionPost()`

```php
apiSignAskForPermissionPost($ask_for_permission_request_model): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ask_for_permission_request_model = new \OpenAPI\Client\Model\AskForPermissionRequestModel(); // \OpenAPI\Client\Model\AskForPermissionRequestModel

try {
    $result = $apiInstance->apiSignAskForPermissionPost($ask_for_permission_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignAskForPermissionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ask_for_permission_request_model** | [**\OpenAPI\Client\Model\AskForPermissionRequestModel**](../Model/AskForPermissionRequestModel.md)|  | [optional]

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

## `apiSignAskPermissionSignInPost()`

```php
apiSignAskPermissionSignInPost($ask_for_permission_request_model): \OpenAPI\Client\Model\AskPermissionSignInResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ask_for_permission_request_model = new \OpenAPI\Client\Model\AskForPermissionRequestModel(); // \OpenAPI\Client\Model\AskForPermissionRequestModel

try {
    $result = $apiInstance->apiSignAskPermissionSignInPost($ask_for_permission_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignAskPermissionSignInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ask_for_permission_request_model** | [**\OpenAPI\Client\Model\AskForPermissionRequestModel**](../Model/AskForPermissionRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AskPermissionSignInResponse**](../Model/AskPermissionSignInResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignCheck2StepVerificationStatusGet()`

```php
apiSignCheck2StepVerificationStatusGet($bitflex_device_id): \OpenAPI\Client\Model\Check2StepVerificationStatusResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bitflex_device_id = 'bitflex_device_id_example'; // string

try {
    $result = $apiInstance->apiSignCheck2StepVerificationStatusGet($bitflex_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignCheck2StepVerificationStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bitflex_device_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Check2StepVerificationStatusResponse**](../Model/Check2StepVerificationStatusResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignConfirmPermissionSignInPost()`

```php
apiSignConfirmPermissionSignInPost($post_confirm_permission_sign_in_request)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_confirm_permission_sign_in_request = new \OpenAPI\Client\Model\PostConfirmPermissionSignInRequest(); // \OpenAPI\Client\Model\PostConfirmPermissionSignInRequest

try {
    $apiInstance->apiSignConfirmPermissionSignInPost($post_confirm_permission_sign_in_request);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignConfirmPermissionSignInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_confirm_permission_sign_in_request** | [**\OpenAPI\Client\Model\PostConfirmPermissionSignInRequest**](../Model/PostConfirmPermissionSignInRequest.md)|  | [optional]

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

## `apiSignConfirmemailPost()`

```php
apiSignConfirmemailPost($post_confirm_request): \OpenAPI\Client\Model\EmailConfirmationResult
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_confirm_request = new \OpenAPI\Client\Model\PostConfirmRequest(); // \OpenAPI\Client\Model\PostConfirmRequest

try {
    $result = $apiInstance->apiSignConfirmemailPost($post_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignConfirmemailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_confirm_request** | [**\OpenAPI\Client\Model\PostConfirmRequest**](../Model/PostConfirmRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\EmailConfirmationResult**](../Model/EmailConfirmationResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignGetPermissionDetailsGet()`

```php
apiSignGetPermissionDetailsGet($id): \OpenAPI\Client\Model\SignInPermissionModel
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiSignGetPermissionDetailsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignGetPermissionDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SignInPermissionModel**](../Model/SignInPermissionModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignGetreferreremailGet()`

```php
apiSignGetreferreremailGet($ref_id): string
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_id = 'ref_id_example'; // string

try {
    $result = $apiInstance->apiSignGetreferreremailGet($ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignGetreferreremailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ref_id** | **string**|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignIsAnyDeviceOnlinePost()`

```php
apiSignIsAnyDeviceOnlinePost()
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiSignIsAnyDeviceOnlinePost();
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignIsAnyDeviceOnlinePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignMobileConfirmationRequestPost()`

```php
apiSignMobileConfirmationRequestPost($post_mobile_confirmation_request_model)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_mobile_confirmation_request_model = new \OpenAPI\Client\Model\PostMobileConfirmationRequestModel(); // \OpenAPI\Client\Model\PostMobileConfirmationRequestModel

try {
    $apiInstance->apiSignMobileConfirmationRequestPost($post_mobile_confirmation_request_model);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignMobileConfirmationRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_mobile_confirmation_request_model** | [**\OpenAPI\Client\Model\PostMobileConfirmationRequestModel**](../Model/PostMobileConfirmationRequestModel.md)|  | [optional]

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

## `apiSignResetpasswordPost()`

```php
apiSignResetpasswordPost($post_reset_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_reset_password_request = new \OpenAPI\Client\Model\PostResetPasswordRequest(); // \OpenAPI\Client\Model\PostResetPasswordRequest

try {
    $result = $apiInstance->apiSignResetpasswordPost($post_reset_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignResetpasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_reset_password_request** | [**\OpenAPI\Client\Model\PostResetPasswordRequest**](../Model/PostResetPasswordRequest.md)|  | [optional]

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

## `apiSignRestorepasswordPost()`

```php
apiSignRestorepasswordPost($post_forgot_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_forgot_password_request = new \OpenAPI\Client\Model\PostForgotPasswordRequest(); // \OpenAPI\Client\Model\PostForgotPasswordRequest

try {
    $result = $apiInstance->apiSignRestorepasswordPost($post_forgot_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignRestorepasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_forgot_password_request** | [**\OpenAPI\Client\Model\PostForgotPasswordRequest**](../Model/PostForgotPasswordRequest.md)|  | [optional]

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

## `apiSignSetnewpasswordPost()`

```php
apiSignSetnewpasswordPost($confirmation_code, $change_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$confirmation_code = 'confirmation_code_example'; // string
$change_password_request = new \OpenAPI\Client\Model\ChangePasswordRequest(); // \OpenAPI\Client\Model\ChangePasswordRequest

try {
    $result = $apiInstance->apiSignSetnewpasswordPost($confirmation_code, $change_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignSetnewpasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **confirmation_code** | **string**|  | [optional]
 **change_password_request** | [**\OpenAPI\Client\Model\ChangePasswordRequest**](../Model/ChangePasswordRequest.md)|  | [optional]

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

## `apiSignSigninGet()`

```php
apiSignSigninGet()
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiSignSigninGet();
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignSigninGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignSigninPost()`

```php
apiSignSigninPost($post_sign_in_request): \OpenAPI\Client\Model\PostSignInResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sign_in_request = new \OpenAPI\Client\Model\PostSignInRequest(); // \OpenAPI\Client\Model\PostSignInRequest

try {
    $result = $apiInstance->apiSignSigninPost($post_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignSigninPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sign_in_request** | [**\OpenAPI\Client\Model\PostSignInRequest**](../Model/PostSignInRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostSignInResponse**](../Model/PostSignInResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignSignoutDelete()`

```php
apiSignSignoutDelete()
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiSignSignoutDelete();
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignSignoutDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiSignSignupPost()`

```php
apiSignSignupPost($post_sign_up_request): \OpenAPI\Client\Model\PostSignUpResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_sign_up_request = new \OpenAPI\Client\Model\PostSignUpRequest(); // \OpenAPI\Client\Model\PostSignUpRequest

try {
    $result = $apiInstance->apiSignSignupPost($post_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiSignSignupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_sign_up_request** | [**\OpenAPI\Client\Model\PostSignUpRequest**](../Model/PostSignUpRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostSignUpResponse**](../Model/PostSignUpResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignAskForPermissionPost()`

```php
apiVversionSignAskForPermissionPost($version, $ask_for_permission_request_model): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$ask_for_permission_request_model = new \OpenAPI\Client\Model\AskForPermissionRequestModel(); // \OpenAPI\Client\Model\AskForPermissionRequestModel

try {
    $result = $apiInstance->apiVversionSignAskForPermissionPost($version, $ask_for_permission_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignAskForPermissionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **ask_for_permission_request_model** | [**\OpenAPI\Client\Model\AskForPermissionRequestModel**](../Model/AskForPermissionRequestModel.md)|  | [optional]

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

## `apiVversionSignAskPermissionSignInPost()`

```php
apiVversionSignAskPermissionSignInPost($version, $ask_for_permission_request_model): \OpenAPI\Client\Model\AskPermissionSignInResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$ask_for_permission_request_model = new \OpenAPI\Client\Model\AskForPermissionRequestModel(); // \OpenAPI\Client\Model\AskForPermissionRequestModel

try {
    $result = $apiInstance->apiVversionSignAskPermissionSignInPost($version, $ask_for_permission_request_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignAskPermissionSignInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **ask_for_permission_request_model** | [**\OpenAPI\Client\Model\AskForPermissionRequestModel**](../Model/AskForPermissionRequestModel.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\AskPermissionSignInResponse**](../Model/AskPermissionSignInResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignCheck2StepVerificationStatusGet()`

```php
apiVversionSignCheck2StepVerificationStatusGet($version, $bitflex_device_id): \OpenAPI\Client\Model\Check2StepVerificationStatusResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$bitflex_device_id = 'bitflex_device_id_example'; // string

try {
    $result = $apiInstance->apiVversionSignCheck2StepVerificationStatusGet($version, $bitflex_device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignCheck2StepVerificationStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **bitflex_device_id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Check2StepVerificationStatusResponse**](../Model/Check2StepVerificationStatusResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignConfirmPermissionSignInPost()`

```php
apiVversionSignConfirmPermissionSignInPost($version, $post_confirm_permission_sign_in_request)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_confirm_permission_sign_in_request = new \OpenAPI\Client\Model\PostConfirmPermissionSignInRequest(); // \OpenAPI\Client\Model\PostConfirmPermissionSignInRequest

try {
    $apiInstance->apiVversionSignConfirmPermissionSignInPost($version, $post_confirm_permission_sign_in_request);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignConfirmPermissionSignInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_confirm_permission_sign_in_request** | [**\OpenAPI\Client\Model\PostConfirmPermissionSignInRequest**](../Model/PostConfirmPermissionSignInRequest.md)|  | [optional]

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

## `apiVversionSignConfirmemailPost()`

```php
apiVversionSignConfirmemailPost($version, $post_confirm_request): \OpenAPI\Client\Model\EmailConfirmationResult
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_confirm_request = new \OpenAPI\Client\Model\PostConfirmRequest(); // \OpenAPI\Client\Model\PostConfirmRequest

try {
    $result = $apiInstance->apiVversionSignConfirmemailPost($version, $post_confirm_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignConfirmemailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_confirm_request** | [**\OpenAPI\Client\Model\PostConfirmRequest**](../Model/PostConfirmRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\EmailConfirmationResult**](../Model/EmailConfirmationResult.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignGetPermissionDetailsGet()`

```php
apiVversionSignGetPermissionDetailsGet($version, $id): \OpenAPI\Client\Model\SignInPermissionModel
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiVversionSignGetPermissionDetailsGet($version, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignGetPermissionDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **id** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\SignInPermissionModel**](../Model/SignInPermissionModel.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignGetreferreremailGet()`

```php
apiVversionSignGetreferreremailGet($version, $ref_id): string
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$ref_id = 'ref_id_example'; // string

try {
    $result = $apiInstance->apiVversionSignGetreferreremailGet($version, $ref_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignGetreferreremailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **ref_id** | **string**|  | [optional]

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignIsAnyDeviceOnlinePost()`

```php
apiVversionSignIsAnyDeviceOnlinePost($version)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $apiInstance->apiVversionSignIsAnyDeviceOnlinePost($version);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignIsAnyDeviceOnlinePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignMobileConfirmationRequestPost()`

```php
apiVversionSignMobileConfirmationRequestPost($version, $post_mobile_confirmation_request_model)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_mobile_confirmation_request_model = new \OpenAPI\Client\Model\PostMobileConfirmationRequestModel(); // \OpenAPI\Client\Model\PostMobileConfirmationRequestModel

try {
    $apiInstance->apiVversionSignMobileConfirmationRequestPost($version, $post_mobile_confirmation_request_model);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignMobileConfirmationRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_mobile_confirmation_request_model** | [**\OpenAPI\Client\Model\PostMobileConfirmationRequestModel**](../Model/PostMobileConfirmationRequestModel.md)|  | [optional]

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

## `apiVversionSignResetpasswordPost()`

```php
apiVversionSignResetpasswordPost($version, $post_reset_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_reset_password_request = new \OpenAPI\Client\Model\PostResetPasswordRequest(); // \OpenAPI\Client\Model\PostResetPasswordRequest

try {
    $result = $apiInstance->apiVversionSignResetpasswordPost($version, $post_reset_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignResetpasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_reset_password_request** | [**\OpenAPI\Client\Model\PostResetPasswordRequest**](../Model/PostResetPasswordRequest.md)|  | [optional]

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

## `apiVversionSignRestorepasswordPost()`

```php
apiVversionSignRestorepasswordPost($version, $post_forgot_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_forgot_password_request = new \OpenAPI\Client\Model\PostForgotPasswordRequest(); // \OpenAPI\Client\Model\PostForgotPasswordRequest

try {
    $result = $apiInstance->apiVversionSignRestorepasswordPost($version, $post_forgot_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignRestorepasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_forgot_password_request** | [**\OpenAPI\Client\Model\PostForgotPasswordRequest**](../Model/PostForgotPasswordRequest.md)|  | [optional]

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

## `apiVversionSignSetnewpasswordPost()`

```php
apiVversionSignSetnewpasswordPost($version, $confirmation_code, $change_password_request): \OpenAPI\Client\Model\BitflexApiResponseBase
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$confirmation_code = 'confirmation_code_example'; // string
$change_password_request = new \OpenAPI\Client\Model\ChangePasswordRequest(); // \OpenAPI\Client\Model\ChangePasswordRequest

try {
    $result = $apiInstance->apiVversionSignSetnewpasswordPost($version, $confirmation_code, $change_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignSetnewpasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **confirmation_code** | **string**|  | [optional]
 **change_password_request** | [**\OpenAPI\Client\Model\ChangePasswordRequest**](../Model/ChangePasswordRequest.md)|  | [optional]

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

## `apiVversionSignSigninGet()`

```php
apiVversionSignSigninGet($version)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $apiInstance->apiVversionSignSigninGet($version);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignSigninGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignSigninPost()`

```php
apiVversionSignSigninPost($version, $post_sign_in_request): \OpenAPI\Client\Model\PostSignInResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_sign_in_request = new \OpenAPI\Client\Model\PostSignInRequest(); // \OpenAPI\Client\Model\PostSignInRequest

try {
    $result = $apiInstance->apiVversionSignSigninPost($version, $post_sign_in_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignSigninPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_sign_in_request** | [**\OpenAPI\Client\Model\PostSignInRequest**](../Model/PostSignInRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostSignInResponse**](../Model/PostSignInResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignSignoutDelete()`

```php
apiVversionSignSignoutDelete($version)
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string

try {
    $apiInstance->apiVversionSignSignoutDelete($version);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignSignoutDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiVversionSignSignupPost()`

```php
apiVversionSignSignupPost($version, $post_sign_up_request): \OpenAPI\Client\Model\PostSignUpResponse
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


$apiInstance = new OpenAPI\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = 'version_example'; // string
$post_sign_up_request = new \OpenAPI\Client\Model\PostSignUpRequest(); // \OpenAPI\Client\Model\PostSignUpRequest

try {
    $result = $apiInstance->apiVversionSignSignupPost($version, $post_sign_up_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->apiVversionSignSignupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**|  |
 **post_sign_up_request** | [**\OpenAPI\Client\Model\PostSignUpRequest**](../Model/PostSignUpRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PostSignUpResponse**](../Model/PostSignUpResponse.md)

### Authorization

[Bearer](../../README.md#Bearer), [X-BF-API-KEY](../../README.md#X-BF-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
