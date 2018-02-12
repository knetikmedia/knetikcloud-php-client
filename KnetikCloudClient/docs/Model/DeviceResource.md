# DeviceResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name.  Must match the names and types defined in the template if one is specified | [optional] 
**created_date** | **int** | The date the device log was created | [optional] 
**description** | **string** | The description of the device | [optional] 
**device_type** | **string** | The type of device. Use mobile_device to specifically register mobile devices. This particular type will be used to send and receive notifications | [optional] 
**id** | **string** | The unique ID for this device. Cannot be changed after creation. Default: random | [optional] 
**location** | **string** | The physical location of the device, coordinates or named place (office, living room, etc) | [optional] 
**mac_address** | **string** | The MAC (media access control) address of the device | [optional] 
**make** | **string** | The make of the device | [optional] 
**model** | **string** | The model of the device | [optional] 
**name** | **string** | The name of the device | [optional] 
**os** | **string** | The OS (operating system) on the device | [optional] 
**owner** | [**\KnetikCloud\Model\SimpleUserResource**](SimpleUserResource.md) | The user that owns the device | [optional] 
**serial** | **string** | The serial number of the device | [optional] 
**tags** | **string[]** | Random tags to facilitate search | [optional] 
**template** | **string** | Use to describe and validate custom properties (custom schema). May be null and no validation of additional_properties will be done | [optional] 
**updated_date** | **int** | The date the device log was updated | [optional] 
**users** | [**\KnetikCloud\Model\SimpleUserResource[]**](SimpleUserResource.md) | The users currently using the device | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


