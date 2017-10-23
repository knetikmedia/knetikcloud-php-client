# LevelingResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type | [optional] 
**created_date** | **int** | The date the leveling schema was created | [optional] 
**description** | **string** | The description of the leveling schema | [optional] 
**name** | **string** | The name of the leveling schema.  IMMUTABLE | 
**tiers** | [**\KnetikCloud\Model\TierResource[]**](TierResource.md) | A set of tiers that contain experience boundaries | [optional] 
**trigger_event_name** | **string** | The name of an event that will add one progress to this level when fired | [optional] 
**updated_date** | **int** | The date the leveling schema was updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


