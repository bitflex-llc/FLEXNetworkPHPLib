# # ApplicationUser

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**user_name** | **string** |  | [optional]
**normalized_user_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**normalized_email** | **string** |  | [optional]
**email_confirmed** | **bool** |  | [optional]
**password_hash** | **string** |  | [optional]
**security_stamp** | **string** |  | [optional]
**concurrency_stamp** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**phone_number_confirmed** | **bool** |  | [optional]
**two_factor_enabled** | **bool** |  | [optional]
**lockout_end** | [**\DateTime**](\DateTime.md) |  | [optional]
**lockout_enabled** | **bool** |  | [optional]
**access_failed_count** | **int** |  | [optional]
**fullname** | **string** |  | [optional]
**pin_code** | **string** |  | [optional]
**last_ip_access** | **string** |  | [optional]
**last_date_access** | **int** |  | [optional]
**is_chat_disabled** | **bool** |  | [optional]
**maker_fee** | **double** |  | [optional]
**taker_fee** | **double** |  | [optional]
**category** | [**\OpenAPI\Client\Model\UserCategory**](UserCategory.md) |  | [optional]
**is_google_sign_in_allowed** | **bool** |  | [optional]
**is_facebook_sign_in_allowed** | **bool** |  | [optional]
**registration_date_time** | **int** |  | [optional]
**verification_level** | **int** |  | [optional]
**two_step_verification_type** | [**\OpenAPI\Client\Model\TwoStepVerificationTypes**](TwoStepVerificationTypes.md) |  | [optional]
**two_step_backup_code** | **string** |  | [optional]
**kyc_sefile_blob_guid** | **string** |  | [optional]
**kyc_passport_blob_guid** | **string** |  | [optional]
**is_club_account** | **bool** |  | [optional]
**withdraw_locked_till** | **int** |  | [optional]
**ref_id** | **string** |  | [optional]
**session_life_time** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
