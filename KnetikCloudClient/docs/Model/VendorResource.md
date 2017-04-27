# VendorResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Whether the vendor is active.  Default &#x3D; true | [optional] 
**additional_properties** | [**map[string,\KnetikCloud\Model\Property]**](Property.md) | A map of additional properties, keyed on the property name (private). Must match the names and types defined in the template for this user type, or be an extra not from the template | [optional] 
**create_date** | **int** | The date the vendor was added. Unix timestamp in seconds | [optional] 
**description** | **string** | A description of the vendor | [optional] 
**id** | **int** | The id of the vendor | [optional] 
**image_url** | **string** | The url of an image for the vendor | [optional] 
**manual_approval** | **bool** | Whether the vendor needs to manually approve invoices before they are paid.  A separate checkout flow is required in this case.  Default: false | [optional] 
**name** | **string** | The name of the vendor | 
**primary_contact_email** | **string** | The primary email address for the vendor | [optional] 
**primary_contact_name** | **string** | The name of the primary contact for the vendor | [optional] 
**primary_contact_phone** | **string** | The primary phone number for the vendor | [optional] 
**sales_email** | **string** | The email address for sale inquiries for the vendor | [optional] 
**support_email** | **string** | The email address for support inquiries for the vendor | [optional] 
**template** | **string** | A user template this user is validated against (private). May be null and no validation of properties will be done | [optional] 
**update_date** | **int** | The date the vendor was last updated. Unix timestamp in seconds | [optional] 
**url** | **string** | The url for the vendor&#39;s site | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


