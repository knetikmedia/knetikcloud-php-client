# PollResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the poll is active | 
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type | [optional] 
**answers** | [**\KnetikCloud\Model\PollAnswerResource[]**](PollAnswerResource.md) | The answers to the poll | 
**category** | [**\KnetikCloud\Model\NestedCategory**](NestedCategory.md) | The category for the poll | 
**created_date** | **int** | The date/time this resource was created in seconds since unix epoch | [optional] 
**id** | **string** | The id of the poll | [optional] 
**tags** | **string[]** | The tags for the poll | [optional] 
**template** | **string** | A poll template this poll is validated against (private). May be null and no validation of additional_properties will be done | [optional] 
**text** | **string** | The text of the poll | 
**type** | **string** | The media type of the poll | 
**updated_date** | **int** | The date/time this resource was last updated in seconds since unix epoch | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


