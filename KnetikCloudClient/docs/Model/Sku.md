# Sku

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name.  Must match the names and types defined in the template for this item type, or be an extra not from the template | [optional] 
**currency_code** | **string** | The currency code for the SKU, a three letter string (ISO3) | 
**description** | **string** | The friendly name of the SKU as it will appear on invoices and reports. Typically represents the option name like red, large, etc | 
**inventory** | **int** | The number of SKUs currently in stock | [optional] 
**min_inventory_threshold** | **int** | Alerts vendor when SKU inventory drops below this value | [optional] 
**not_available** | **bool** |  | [optional] 
**not_displayable** | **bool** |  | [optional] 
**original_price** | **float** | The base price before any sale | 
**price** | **float** | The current price of the SKU with sales, if any. Set original_price for the base | [optional] 
**published** | **bool** | Whether or not the SKU is currently visible to users. This will not block users from purchase. Use start_date or stop_date to prevent purchase. Default: true | [optional] 
**sale_id** | **int** | The id of a sale affecting the price, if any | [optional] 
**sale_name** | **string** | The name of a sale affecting the price, if any | [optional] 
**sku** | **string** | The stock keeping unit (SKU), a unique identifier for a given product.  Max 40 characters | 
**start_date** | **int** | The date the sku becomes visible (if published) and available for purchase, unix timestamp in seconds.  If set to null, sku will become available immediately | [optional] 
**stop_date** | **int** | The date the sku becomes hidden and unavailable for purchase, unix timestamp in seconds.  If set to null, sku is always available | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


