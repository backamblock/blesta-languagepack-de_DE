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

$lang['Invoices.getPricingPeriods.day'] = "Day";
$lang['Invoices.getPricingPeriods.week'] = "Week";
$lang['Invoices.getPricingPeriods.month'] = "Month";
$lang['Invoices.getPricingPeriods.year'] = "Year";
$lang['Invoices.getDeliveryMethods.email'] = "Email";
$lang['Invoices.getDeliveryMethods.paper'] = "Paper";
$lang['Invoices.getDeliveryMethods.postalmethods'] = "PostalMethods";
$lang['Invoices.!error.invoice_id.exists'] = "Invalid invoice ID.";
$lang['Invoices.!error.invoice_recur_id.exists'] = "Invalid recurring invoice ID.";
$lang['Invoices.!error.method.exists'] = "You must set at least one delivery method.";
$lang['Invoices.!error.delivery.empty'] = "Please enter an invoice delivery method.";
$lang['Invoices.!error.delivery.length'] = "The invoice delivery method length may not exceed 32 characters.";
$lang['Invoices.!error.id_format.length'] = "The ID format for invoices may not exceed 64 characters.";
$lang['Invoices.!error.id_value.valid'] = "Unable to determine invoice ID value.";
$lang['Invoices.!error.date_autodebit.format'] = "The due date is in an invalid date format.";
$lang['Invoices.!error.currency.length'] = "The currency code must be 3 characters in length.";
$lang['Invoices.!error.delivery.exists'] = "The delivery method given does not exist.";
$lang['Invoices.!error.term.format'] = "The term should be a number.";
$lang['Invoices.!error.term.bounds'] = "The term should be between 1 and 65535.";
$lang['Invoices.!error.period.format'] = "The period is invalid.";
$lang['Invoices.!error.date_renews.format'] = "The recurring invoice renew date must be a valid date format.";
$lang['Invoices.!error.date_last_renewed.format'] = "The last recurring invoice renew date must be a valid date format.";
$lang['Invoices.!error.lines[][id].exists'] = "Invalid line item ID.";
$lang['Invoices.!error.lines[][service_id].exists'] = "Invalid service ID.";
$lang['Invoices.!error.lines[][description].empty'] = "Please enter a line item description.";
$lang['Invoices.!error.lines[][qty].format'] = "The quantity must be a number.";
$lang['Invoices.!error.lines[][qty].minimum'] = "Please enter a quantity of 1 or more.";
$lang['Invoices.!error.lines[][amount].format'] = "The unit cost must be a number.";
$lang['Invoices.!error.lines[][tax].format'] = "Line item tax must be a 'true' or 'false'";
$lang['Invoices.!line_item.service_setup_fee_description'] = "%1\$s - %2\$s Setup Fee"; // %1$s is the name of the package, %2$s is the name of the service
$lang['Invoices.!line_item.coupon_line_item_description_amount'] = "Coupon %1\$s"; // %1$s is the coupon code
$lang['Invoices.!line_item.coupon_line_item_description_percent'] = "Coupon %1\$s - %2\$s%%"; // %1$s is the coupon code, %2$s is the coupon discount percentage, the two percent symbols (%%) must both be used together to display a single percent symbol
$lang['Invoices.!line_item.recurring_renew_description'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the line item description, %2$s is the invoice's renew date, %3$s is the invoice's next renew date
$lang['Invoices.status.active'] = "Active";
$lang['Invoices.status.draft'] = "Draft";
$lang['Invoices.status.void'] = "Void";
$lang['Invoices.!line_item.service_renew_description'] = "%5\$s%1\$s - %2\$s (%3\$s - %4\$s)"; // %1$s is the name of the package, %2$s is the name of the service, %3$s is the service's renew date, %4$s is the service's next renew date, %5$s is the addon identifier set only for addon services
$lang['Invoices.!line_item.service_prorated_upgrade_description'] = "Prorated Upgrade from %1\$s to %2\$s - %3\$s (%4\$s - %5\$s)"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name, %4$s is the current date, %5$s is the service's next renew date
$lang['Invoices.status.proforma'] = "Pro forma";
$lang['Invoices.types.standard'] = "Standard";
$lang['Invoices.types.proforma'] = "Pro forma";
$lang['Invoices.!line_item.service_option_renew_description'] = "? %1\$s - %2\$s"; // %1$s is the package option label, %2$s is the service option name
$lang['Invoices.!line_item.service_option_setup_fee_description'] = "? %1\$s - %2\$s Setup Fee"; // %1$s is the package option label, %2$s is the service option name
$lang['Invoices.!line_item.service_prorated_upgrade_description_onetime'] = "Prorated Upgrade from %1\$s to %2\$s - %3\$s"; // %1$s is the current package name, %2$s is the new package name, %3$s is the service name
$lang['Invoices.!note_private.service_cancel_date'] = "Service #%1\$s cancelled %2\$s."; // %1$s is the service ID, %2$s is the formatted service cancellation date and time
$lang['Invoices.!note_private.line_item'] = "- %1\$s @ %2\$s: %3\$s"; // %1$s is the line item quantity, %2$s is the unit price, %3$s is the line item description
$lang['Invoices.!error.autodebit.valid'] = "Please select whether or not to allow auto debit for this invoice.";
$lang['Invoices.!line_item.service_option_prorated_upgrade_text'] = "↳ Prorated Upgrade of %1\$s"; // %1$s is the service option label name
?>