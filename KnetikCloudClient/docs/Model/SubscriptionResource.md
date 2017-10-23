# SubscriptionResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | The additional properties for the subscription | [optional] 
**availability** | **string** | Who can purchase this subscription | [optional] 
**behaviors** | [**\KnetikCloud\Model\Behavior[]**](Behavior.md) | The behaviors linked to the item, describing various options and interactions. May not be included in item lists | [optional] 
**category** | **string** | The category of the subscription | [optional] 
**consolidation_day_of_month** | **int** | The day of the month 1..31 this subscription will renew | [optional] 
**created_date** | **int** | The date the item was created, unix timestamp in seconds | [optional] 
**displayable** | **bool** | Whether or not the item is currently visible to users. Does not block purchase; Use store_start or store_end to block purchase.  Default &#x3D; true | [optional] 
**geo_country_list** | **string[]** | The geo country list for the subscription | [optional] 
**geo_policy_type** | **string** | The geo policy type for the subscription | [optional] 
**id** | **int** | The id of the item | [optional] 
**long_description** | **string** | A long description of the subscription | [optional] 
**name** | **string** | The name of the item | 
**plans** | [**\KnetikCloud\Model\SubscriptionPlanResource[]**](SubscriptionPlanResource.md) | The billing options for this subscription | [optional] 
**short_description** | **string** | A short description of the subscription.  Max 255 characters | [optional] 
**sort** | **int** | A number to use in sorting items.  Default 500 | [optional] 
**store_end** | **int** | Used to schedule removal from store.  Null means the subscription will never be removed | [optional] 
**store_start** | **int** | Used to schedule appearance in store.  Null means the subscription will appear now | [optional] 
**tags** | **string[]** | The tags for the subscription | [optional] 
**template** | **string** | The template being used | [optional] 
**unique_key** | **string** | The unique key of the subscription | [optional] 
**updated_date** | **int** | The date the item was last updated | [optional] 
**vendor_id** | **int** | The id of the vendor | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


