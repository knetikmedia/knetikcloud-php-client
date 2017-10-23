# GroupMemberResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name (private). Must match the names and types defined in the template for this type, or be an extra not from the template | [optional] 
**avatar_url** | **string** | The url of the user&#39;s avatar image | [optional] 
**display_name** | **string** | The public username of the user | [optional] 
**id** | **int** | The id of the user | 
**order** | **string** | The position of the member in the group if applicable. Read notes for details | [optional] 
**status** | **string** | The member&#39;s access level. Default: member | [optional] 
**template** | **string** | A template this member additional properties are validated against (private). May be null and no validation of properties will be done | [optional] 
**username** | **string** | The username of the user | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


