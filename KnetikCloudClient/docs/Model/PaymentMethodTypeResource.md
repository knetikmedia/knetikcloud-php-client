# PaymentMethodTypeResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The id of the payment method type | 
**invoice_processing_hours** | **int** | The maximum timelimit in hours for an invoice in the processing status while waiting on this payment method type. Defaults to the global config invoice.processing_expiration_hours if null | [optional] 
**name** | **string** | The name of the payment method type | 
**supports_capture** | **bool** | Whether the payment handler supports the authorize and capture flow | [optional] 
**supports_partial** | **bool** | Whether the payment handler supports paying for part of an invoice, rather than the full grand_total | [optional] 
**supports_rebill** | **bool** | Whether the payment handler supports rebilling the method later (for saved payments or subscriptions) | [optional] 
**supports_refunds** | **bool** | Whether the payment handler supports refunding | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


