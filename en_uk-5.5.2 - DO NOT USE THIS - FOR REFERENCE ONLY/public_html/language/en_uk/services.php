<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 7.7.7
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['Services.!error.key.empty'] = "The service field key must not be empty.";
$lang['Services.!error.value.empty'] = "The service field value must not be empty.";
$lang['Services.!error.encrypted.format'] = "Invalid format for encrypted.";
$lang['Services.!error.parent_service_id.exists'] = "Invalid parent service ID.";
$lang['Services.!error.id_value.valid'] = "Unable to determine invoice ID value.";
$lang['Services.!error.qty.format'] = "Quantity must be a number.";
$lang['Services.!error.qty.length'] = "Quantity length may not exceed 10 characters.";
$lang['Services.!error.status.format'] = "Invalid status.";
$lang['Services.!error.date_added.format'] = "Invalid date added format.";
$lang['Services.!error.date_canceled.format'] = "Invalid cancelled date format.";
$lang['Services.!error.use_module.format'] = "Invalid use module format.";
$lang['Services.!error.fields[][key].empty'] = "A key is empty from the service fields.";
$lang['Services.!error.fields[][value].empty'] = "A value is empty from the service fields.";
$lang['Services.!error.fields[][encrypted].format'] = "A service field for encryption is in an invalid format.";
$lang['Services.getStatusTypes.active'] = "Active";
$lang['Services.getStatusTypes.canceled'] = "Cancelled";
$lang['Services.getStatusTypes.pending'] = "Pending";
$lang['Services.getStatusTypes.suspended'] = "Suspended";
$lang['Services.!error.coupon_id.valid'] = "That coupon does not appear to be valid.";
$lang['Services.!error.pricing_id.valid'] = "You must select a valid term.";
$lang['Services.!error.date_canceled.valid'] = "You must set a valid date to cancel this service.";
$lang['Services.getActions.unsuspend'] = "Unsuspend";
$lang['Services.getActions.cancel'] = "Cancel";
$lang['Services.!error.package_group_id.exists'] = "Invalid package group ID.";
$lang['Services.!error.date_renews.valid'] = "Renew date must be greater than last renew date of %1\$s."; // %1$s is the last renew date
$lang['Services.getStatusTypes.in_review'] = "In Review";
$lang['Services.getActions.change_renew'] = "Change Renew Date";
$lang['Services.!error.qty.available'] = "Quantity limit reached. If possible, please select a smaller quantity.";
$lang['Services.!error.client_id.allowed'] = "The client can not access that package.";
$lang['Services.!error.configoptions.valid'] = "One of the configurable options selected is not valid for the service.";
$lang['Services.!error.pricing_id.overrides'] = "The package term cannot be changed when price overrides are set.";
$lang['Services.!error.override_price.format'] = "The price override must be a number.";
$lang['Services.!error.override_price.override'] = "Both a price and currency must be set to override the current price.";
$lang['Services.!error.override_currency.format'] = "Please select a valid currency.";
$lang['Services.!error.prorate.format'] = "Whether to prorate must be set to 'true' or 'false'.";
$lang['Services.!error.service_id.exists'] = "Invalid service ID.";
?>