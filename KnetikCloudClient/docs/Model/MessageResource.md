# MessageResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | [**\KnetikCloud\Model\MessageContentResource**](MessageContentResource.md) | The content of the message in various formats | 
**recipient** | **string** | The id of the recipient, dependent on the recipient_type. The user&#39;s id or the topic&#39;s id. Required if sending directly to messaging service | [optional] 
**recipient_type** | **string** | The type of recipient for the message. Either a user, or all users in a topic. Required if sending directly to messaging service | [optional] 
**subject** | **string** | The subject of the message. Required for email messages | [optional] 
**type** | **string** | The type of message for websocket type hinting. will be added to the payload with the key _type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


