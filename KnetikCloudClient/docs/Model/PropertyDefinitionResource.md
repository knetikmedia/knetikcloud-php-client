# PropertyDefinitionResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description of the property | [optional] 
**field_list** | [**\KnetikCloud\Model\PropertyFieldListResource**](PropertyFieldListResource.md) | A list of the fields on both the property definition and property of this type | [optional] 
**friendly_name** | **string** | The friendly front-facing name of the property | [optional] 
**name** | **string** | The name of the property | 
**option_label_path** | **string** | The JSON path to the option label | [optional] 
**option_value_path** | **string** | The JSON path to the option value | [optional] 
**options_url** | **string** | URL of service containing the property options (assumed JSON array) | [optional] 
**required** | **bool** | Whether the property is required | 
**type** | **string** | The type of the property. Used for polymorphic type recognition and thus must match an expected type with additional properties. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


