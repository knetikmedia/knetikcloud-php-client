# GroupMemberResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name (private). Must match the names and types defined in the template for this type, or be an extra not from the template | [optional] 
**group** | [**\KnetikCloud\Model\SimpleGroupResource**](SimpleGroupResource.md) | The group. Id is the unique name | [optional] 
**implicit** | **bool** | Whether this membership is explicit (the user was added directly to the group) or implicit (the user was added only to one or more child groups) | [optional] 
**membership_id** | **int** | The id of the membership entry | [optional] 
**order** | **string** | The position of the member in the group if applicable. Read notes for details | [optional] 
**status** | **string** | The member&#39;s access level. Default: member | [optional] 
**template** | **string** | A template this member additional properties are validated against (private). May be null and no validation of properties will be done | [optional] 
**user** | [**\KnetikCloud\Model\SimpleUserResource**](SimpleUserResource.md) | The user | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


