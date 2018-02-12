# GroupResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type | [optional] 
**description** | **string** | A description of the group | [optional] 
**member_count** | **int** | The number of users in the group | [optional] 
**message_of_the_day** | **string** | A message of the day for members of the group | [optional] 
**name** | **string** | The name of the group. Max 50 characters | 
**parent** | **string** | The unique name of another group that this group is a subset of | [optional] 
**status** | **string** | The status which describes whether other users can freely join the group or not | 
**sub_member_count** | **int** | The number of users in child groups | [optional] 
**tags** | **string[]** | Tags for search | [optional] 
**template** | **string** | A group template this group is validated against. May be null and no validation of additional_properties will be done | [optional] 
**unique_name** | **string** | Unique name used in url and references. Uppercase, lowercase, numbers and hyphens only. Max 50 characters. Cannot be altered once created. Default: random UUID | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


