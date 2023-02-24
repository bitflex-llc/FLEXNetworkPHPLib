# # OrderCreateResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**success** | **bool** |  | [optional]
**error_message** | **string** |  | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**balance** | [**\OpenAPI\Client\Model\Balance[]**](Balance.md) |  | [optional] [readonly]
**execution** | **int** |  | [optional] [readonly]
**request_time** | **int** |  | [optional]
**trades** | [**\OpenAPI\Client\Model\TradesGetViewModel[]**](TradesGetViewModel.md) |  | [optional] [readonly]
**balance_actions** | [**\OpenAPI\Client\Model\BalanceActionModel[]**](BalanceActionModel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
