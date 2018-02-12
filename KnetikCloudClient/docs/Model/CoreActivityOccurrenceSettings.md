# CoreActivityOccurrenceSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_in_play** | **bool** | Whether the host can boot another user while the status is PLAYING. Must be false or null unless this setting is true in activity (or challenge if applicable). Null to inherit | [optional] 
**custom_launch_address** | **string** | A custom address (url, ip or whatever is needed in your game) that users should connect to to play in this occurrence rather than the usual game server. Could be the ip address of the host for peer-to-peer play. Can only be set if the activity/challenge custom_launch_address_allowed is true. Max length: 255 | [optional] 
**host_status_control** | **bool** | Restriction for whether the host has control of the status once the game launches. If false they can only manage the game before (when setup and open). Cannot be true if activity/challenge has it false. Null to inherit | [optional] 
**join_in_play** | **bool** | Whether users can join while the status is PLAYING. Must be false or null unless this setting is true in activity (or challenge if applicable). Null to inherit | [optional] 
**leave_in_play** | **bool** | Whether users can leave while the status is PLAYING. Must be false or null unless this setting is true in activity (or challenge if applicable). Null to inherit | [optional] 
**max_players** | **int** | The maximum number of players the game can hold. Must be equal or less than activity (or must match challenge if applicable) | [optional] 
**min_players** | **int** | The minimum number of players the game can hold. Must be equal or greater than activity (or must match challenge if applicable) | [optional] 
**non_host_status_control** | **bool** | Restriction for whether the non-host players can control of the status in place of the host. Default: false | [optional] 
**results_trust** | **string** | Restriction for who is able to report game end and results. Admin is always able to send results as well. Must be equal or more restrictive than activity (or must match challenge if applicable). Default inherits | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


