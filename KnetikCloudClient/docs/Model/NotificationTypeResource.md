# NotificationTypeResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_date** | **int** | The date the type was created, as a unix timestamp in seconds | [optional] 
**email_body_template_external** | **bool** | Whether the email body should be resolved. If true, the external email delivery system will be expected to handle the templating (Mandrill/Mailchimp). default: false | [optional] 
**email_body_template_id** | **string** | The id of a message template to resolve the email body. If null, no websocket message wil be sent | [optional] 
**email_subject_template_id** | **string** | The id of a message template to resolve the email subject. If null, no websocket message wil be sent | [optional] 
**id** | **string** | The id of the notification type. Default: random | [optional] 
**name** | **string** | The name of the notification type | 
**sms_template_id** | **string** | The id of a message template to resolve the SMS message. If null, no sms message wil be sent | [optional] 
**updated_date** | **int** | The date the type was last updated, as a unix timestamp in seconds | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


