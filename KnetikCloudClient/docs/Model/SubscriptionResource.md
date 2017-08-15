# SubscriptionResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of item additional properties, keyed on the property name. Must match the names and types defined in the template for this item type. | [optional] 
**availability** | **string** | Who can purchase this subscription | [optional] 
**behaviors** | [**\KnetikCloud\Model\Behavior[]**](Behavior.md) | The behaviors linked to the item, describing various options and interactions. May not be included in item lists | [optional] 
**category** | **string** | A category for filtering items | [optional] 
**consolidation_day_of_month** | **int** | The day of the month 1..31 this subscription will renew | [optional] 
**created_date** | **int** | The date the item was created, unix timestamp in seconds | [optional] 
**geo_country_list** | **string[]** | A list of country iso3 codes to include in the blacklist/whitelist geo policy | [optional] 
**geo_policy_type** | **string** | Whether to use the geo_country_list as a black list or white list for item geographical availability | [optional] 
**id** | **int** | The id of the item | [optional] 
**long_description** | **string** | A long description of the subscription | [optional] 
**name** | **string** | The name of the item | 
**plans** | [**\KnetikCloud\Model\SubscriptionPlanResource[]**](SubscriptionPlanResource.md) | The billing options for this subscription | [optional] 
**short_description** | **string** | A short description of the subscription.  Max 255 characters | [optional] 
**sort** | **int** | A number to use in sorting items.  Default 500 | [optional] 
**store_end** | **int** | Used to schedule removal from store.  Null means the subscription will never be removed | [optional] 
**store_start** | **int** | Used to schedule appearance in store.  Null means the subscription will appear now | [optional] 
**tags** | **string[]** | List of tags used for filtering items | [optional] 
**template** | **string** | An item template this item is validated against. May be null and no validation of additional properties will be done. | [optional] 
**unique_key** | **string** | The unique key for the item | [optional] 
**updated_date** | **int** | The date the item was last updated | [optional] 
**vendor_id** | **int** | The vendor who provides the item | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


