<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 5.5.2
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['ClientServices.index.page_title'] = "Client #%1\$s Services"; // %1$s is the client ID number
$lang['ClientServices.index.category_active'] = "Active";
$lang['ClientServices.index.category_pending'] = "Pending";
$lang['ClientServices.index.category_suspended'] = "Suspended";
$lang['ClientServices.index.category_canceled'] = "Cancelled";
$lang['ClientServices.index.heading_package'] = "Package";
$lang['ClientServices.index.heading_label'] = "Label";
$lang['ClientServices.index.heading_term'] = "Term";
$lang['ClientServices.index.heading_datecreated'] = "Date Created";
$lang['ClientServices.index.heading_daterenews'] = "Date Renews";
$lang['ClientServices.index.option_manage'] = "Manage";
$lang['ClientServices.index.text_never'] = "Never";
$lang['ClientServices.serviceinfo.no_results'] = "This service has no details.";
$lang['ClientServices.!success.manage.tab_updated'] = "The data was successfully updated.";
$lang['ClientServices.index.heading_datecanceled'] = "Date Cancelled";
$lang['ClientServices.manage.page_title'] = "Client #%1\$s Manage Service"; // %1$s is the client ID number
$lang['ClientServices.manage.tab_service_info'] = "Information";
$lang['ClientServices.!success.service_canceled'] = "The service was successfully cancelled.";
$lang['ClientServices.!success.service_schedule_canceled'] = "The service is scheduled to be canceled at the end of its term.";
$lang['ClientServices.cancel.page_title'] = "Client #%1\$s Cancel Service"; // %1$s is the client ID number
$lang['ClientServices.cancel.heading_cancel'] = "Cancel Service";
$lang['ClientServices.cancel.field_now'] = "Immediately";
$lang['ClientServices.cancel.confirm_cancel'] = "Are you sure you want to cancel this service at the end of its term?";
$lang['ClientServices.cancel.confirm_cancel_now'] = "Are you sure you would like to cancel this service?";
$lang['ClientServices.cancel.confirm_cancel_now_fee_tax'] = "Canceling this service immediately will incur a cancellation fee of %1\$s plus tax."; // %1$s is the formatted amount of the cancelation fee
$lang['ClientServices.!success.service_not_canceled'] = "The service will not be cancelled.";
$lang['ClientServices.!success.addon_service_created'] = "The addon service has been successfully created. However, it will not be activated until after payment has been received.";
$lang['ClientServices.manage.tab_service_return'] = "Return to Dashboard";
$lang['ClientServices.manage.button_active'] = "Active";
$lang['ClientServices.manage.button_in_review'] = "In Review";
$lang['ClientServices.manage.button_canceled'] = "Cancelled";
$lang['ClientServices.manage.button_cancel'] = "Cancel Options";
$lang['ClientServices.manage.heading_package'] = "Package";
$lang['ClientServices.manage.heading_package_term'] = "Billing Cycle";
$lang['ClientServices.manage.heading_service_name'] = "Label";
$lang['ClientServices.manage.heading_date_next_invoice'] = "Next Invoice";
$lang['ClientServices.manage.heading_price'] = "Recurring Amount";
$lang['ClientServices.manage.text_date_never'] = "Never";
$lang['ClientServices.manage.text_date_to_cancel'] = "This service is scheduled to be canceled on %1\$s."; // %1$s is the date the service is scheduled to be canceled
$lang['ClientServices.cancel.field_do_not'] = "Do not cancel";
$lang['ClientServices.addons.boxtitle_addons'] = "Addons for %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.addons.create_addon'] = "Add Addon";
$lang['ClientServices.addons.no_results'] = "No addons are attached to this service.";
$lang['ClientServices.!error.addon_invalid'] = "Please select a valid addon.";
$lang['ClientServices.addaddon.page_title'] = "Client #%1\$s Add Addon"; // %1$s is the client ID number
$lang['ClientServices.addaddon.boxtitle_addons'] = "Add Addon for %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.addaddon.header_add'] = "Addons";
$lang['ClientServices.addaddon.term_price'] = "%1\$s - %2\$s"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price
$lang['ClientServices.addaddon.term_price_setupfee'] = "%1\$s - %2\$s + %3\$s setup"; // %1$s is the package term, (e.g. 1 Month), %2$s is the formatted package price, %3$s is the formatted setup fee price
$lang['ClientServices.addaddon.submit_add'] = "Create";
$lang['ClientServices.!error.invoices_upgrade_package'] = "The package cannot be changed until all invoices containing this service have been paid.";
$lang['ClientServices.!success.service_package_updated'] = "The service package has been updated.";
$lang['ClientServices.manage.button_change_service_term'] = "Change Term";
$lang['ClientServices.manage.button_change_service_package'] = "Change Package";
$lang['ClientServices.manage.text_price'] = "%1\$sx %2\$s"; // %1$s is the service quantity, %2$s is the package price
$lang['ClientServices.manage.text_date_suspended'] = "This service was suspended on %1\$s."; // %1$s is the date the service was suspended
$lang['ClientServices.manage.text_date_canceled'] = "This service was cancelled on %1\$s."; // %1$s is the date the service was canceled
$lang['ClientServices.manage.heading_options'] = "Actions";
$lang['ClientServices.change_term.field_pricing_id'] = "New Term";
$lang['ClientServices.get_package_terms.term'] = "%1\$s %2\$s - %3\$s"; // %1$s is the pricing term, %2$s is the pricing period, and %3$s is the formatted price
$lang['ClientServices.get_package_terms.term_onetime'] = "%1\$s - %2\$s"; // %1$s is the pricing period, and %2$s is the formatted price
$lang['ClientServices.upgrade.btn_make_payment'] = "Make a Payment";
$lang['ClientServices.upgrade.field_current_package'] = "Current Package";
$lang['ClientServices.upgrade.field_pricing_id'] = "New Package";
$lang['ClientServices.upgrade.field_submit'] = "Review";
$lang['ClientServices.upgrade.current_package_onetime'] = "%1\$s (%2\$s - %3\$s)"; // %1$s is the package name, %2$s is the pricing period, and %3$s is the formatted price
$lang['ClientServices.!notice.queued_service_change'] = "This service has pending changes. Additional changes may not be made until the current pending changes have been processed.";
$lang['ClientServices.!success.config_options_updated'] = "The configurable options were successfully updated.";
$lang['ClientServices.!success.service_queue_pay'] = "The service update has been queued to be processed. However, it will not be processed until after a payment has been received.";
$lang['ClientServices.!success.service_queue'] = "The service update has been queued and will be processed shortly.";
$lang['ClientServices.manage.heading_recurring_coupon'] = "Recurring Coupon";
$lang['ClientServices.manage.text_coupon_percent'] = "%1\$s (%2\$s%%)"; // %1$s is the coupon code, %2$s is the coupon discount percentage. You MUST use two % signs to represent a single percent (i.e. %%)
$lang['ClientServices.manage.text_coupon_amount'] = "%1\$s (%2\$s)"; // %1$s is the coupon code, %2$s is the formatted coupon amount
$lang['ClientServices.changeterm.page_title'] = "Client #%1\$s Change Term"; // %1$s is the client ID number
$lang['ClientServices.change_term.boxtitle'] = "Change Term for %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.change_term.cancel'] = "Cancel";
$lang['ClientServices.upgrade.boxtitle'] = "Change Package from %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.manageoptions.page_title'] = "Client #%1\$s Manage Configurable Options"; // %1$s is the client ID number
$lang['ClientServices.manageoptions.boxtitle_options'] = "Manage Configurable Options for %1\$s - %2\$s"; // %1$s is the package name, %2$s is the service name
$lang['ClientServices.manageoptions.heading_current'] = "Current Options";
$lang['ClientServices.manageoptions.heading_new'] = "New Options";
$lang['ClientServices.manageoptions.no_options'] = "There are no current configurable options available to update.";
$lang['ClientServices.review.page_title'] = "Client #%1\$s Review Service"; // %1$s is the client ID number
$lang['ClientServices.review.heading_current_service'] = "Current Service";
$lang['ClientServices.review.heading_label'] = "Option";
$lang['ClientServices.review.heading_old_value'] = "Current Value";
$lang['ClientServices.review.heading_new_value'] = "New Value";
$lang['ClientServices.review.value'] = "%1\$s (%2\$sx %3\$s)"; // %1$s is the config option value name, %2$s is the quantity, %3$s is the formatted price
$lang['ClientServices.review.none'] = "-";
$lang['ClientServices.review.cancel'] = "Cancel";
$lang['ClientServices.totals.subtotal'] = "Subtotal:";
?>