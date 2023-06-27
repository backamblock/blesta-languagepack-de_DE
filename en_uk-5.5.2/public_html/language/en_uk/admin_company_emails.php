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

$lang['AdminCompanyEmails.!success.edittemplate_updated'] = "The email template settings were successfully updated!";
$lang['AdminCompanyEmails.!success.editsignature_updated'] = "The email signature has been successfully updated!";
$lang['AdminCompanyEmails.!success.addsignature_created'] = "The email signature has been successfully created!";
$lang['AdminCompanyEmails.!success.mail_updated'] = "The Mail settings have been successfully updated!
";
$lang['AdminCompanyEmails.templates.heading_staff'] = "Staff Emails";
$lang['AdminCompanyEmails.templates.heading_shared'] = "Shared Emails";
$lang['AdminCompanyEmails.templates.heading_plugins'] = "Plugin Emails";
$lang['AdminCompanyEmails.templates.text_plugin'] = "Plugin";
$lang['AdminCompanyEmails.templates.text_description'] = "Description";
$lang['AdminCompanyEmails.templates.text_options'] = "Options";
$lang['AdminCompanyEmails.templates.option_edit'] = "Edit";
$lang['AdminCompanyEmails.templates.no_results'] = "There are no templates of this type.";
$lang['AdminCompanyEmails.templates.payment_cc_approved_name'] = "Payment Approved (Credit Card)";
$lang['AdminCompanyEmails.templates.payment_cc_approved_desc'] = "Notice sent after a successful credit card payment is approved.";
$lang['AdminCompanyEmails.templates.payment_cc_declined_name'] = "Payment Declined (Credit Card)";
$lang['AdminCompanyEmails.templates.payment_cc_declined_desc'] = "Notice sent after a credit card payment attempt is declined.";
$lang['AdminCompanyEmails.templates.payment_cc_error_desc'] = "Notice sent after a credit card payment attempt results in error.";
$lang['AdminCompanyEmails.templates.payment_ach_declined_name'] = "Payment Declined (ACH)";
$lang['AdminCompanyEmails.templates.payment_ach_error_name'] = "Payment Error (ACH)";
$lang['AdminCompanyEmails.templates.payment_manual_approved_name'] = "Payment Received (Manual Entry)";
$lang['AdminCompanyEmails.templates.payment_manual_approved_desc'] = "Notice sent after a payment is manually recorded.";
$lang['AdminCompanyEmails.templates.credit_card_expiration_name'] = "Credit Card Expiration";
$lang['AdminCompanyEmails.templates.credit_card_expiration_desc'] = "Notice sent when an active credit card is about to expire.";
$lang['AdminCompanyEmails.templates.invoice_delivery_unpaid_desc'] = "Notice containing a PDF copy of an unpaid invoice.";
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_name'] = "Invoice Delivery (Paid)";
$lang['AdminCompanyEmails.templates.invoice_delivery_paid_desc'] = "Notice containing a PDF copy of a paid invoice.";
$lang['AdminCompanyEmails.templates.invoice_notice_first_name'] = "Invoice Notice (1st)";
$lang['AdminCompanyEmails.templates.invoice_notice_first_desc'] = "First invoice notice, either a reminder to pay or late notice.";
$lang['AdminCompanyEmails.templates.invoice_notice_second_desc'] = "Second invoice notice, either a reminder to pay or late notice.";
$lang['AdminCompanyEmails.templates.reset_password_name'] = "Password Reset";
$lang['AdminCompanyEmails.templates.reset_password_desc'] = "Password reset email containing a link to change the account password.";
$lang['AdminCompanyEmails.templates.service_suspension_name'] = "Service Suspension";
$lang['AdminCompanyEmails.templates.service_suspension_desc'] = "Service suspended notice, sent when a service is automatically suspended.";
$lang['AdminCompanyEmails.templates.account_welcome_name'] = "Account Registration";
$lang['AdminCompanyEmails.templates.report_invoice_creation_name'] = "Invoice Creation Report";
$lang['AdminCompanyEmails.templates.report_invoice_creation_desc'] = "A daily report of invoices generated for the previous day.";
$lang['AdminCompanyEmails.templates.service_suspension_error_name'] = "Suspension Error";
$lang['AdminCompanyEmails.templates.service_suspension_error_desc'] = "Notice sent after a failed attempt to suspend a service.";
$lang['AdminCompanyEmails.templates.service_unsuspension_error_desc'] = "Notice sent after a failed attempt to unsuspend a service.";
$lang['AdminCompanyEmails.templates.service_cancel_error_name'] = "Cancellation Error";
$lang['AdminCompanyEmails.templates.auto_debit_pending_name'] = "Auto-Debit Pending";
$lang['AdminCompanyEmails.templates.auto_debit_pending_desc'] = "Notice sent that indicates an automatic payment will be attempted soon.";
$lang['AdminCompanyEmails.templates.staff_reset_password_name'] = "Password Reset";
$lang['AdminCompanyEmails.templates.staff_reset_password_desc'] = "Password reset email containing a link to change the account password.";
$lang['AdminCompanyEmails.templates.service_creation_name'] = "Service Creation";
$lang['AdminCompanyEmails.templates.service_creation_desc'] = "Service creation notice, sent when a service has been created.";
$lang['AdminCompanyEmails.signatures.boxtitle_signatures'] = "Signatures";
$lang['AdminCompanyEmails.signatures.text_description'] = "Description";
$lang['AdminCompanyEmails.signatures.text_options'] = "Options";
$lang['AdminCompanyEmails.signatures.option_edit'] = "Edit";
$lang['AdminCompanyEmails.signatures.option_delete'] = "Delete";
$lang['AdminCompanyEmails.signatures.confirm_delete'] = "Are you sure you want to delete this email signature?";
$lang['AdminCompanyEmails.addsignature.boxtitle_addsignature'] = "Add Signature";
$lang['AdminCompanyEmails.addsignature.field_html'] = "HTML";
$lang['AdminCompanyEmails.addsignature.text_signatures'] = "Signatures are used for email templates, making it easier to modify email signatures in bulk";
$lang['AdminCompanyEmails.editsignature.boxtitle_editsignature'] = "Edit Signature";
$lang['AdminCompanyEmails.editsignature.field_name'] = "Name";
$lang['AdminCompanyEmails.editsignature.field_text'] = "Text";
$lang['AdminCompanyEmails.editsignature.field_editsignaturesubmit'] = "Update Signature";
$lang['AdminCompanyEmails.getRequiredMethods.smtp'] = "SMTP";
$lang['AdminCompanyEmails.templates.page_title'] = "Settings > Company > Emails > Email Templates";
$lang['AdminCompanyEmails.addsignature.page_title'] = "Settings > Company > Emails > Add Signature";
$lang['AdminCompanyEmails.editsignature.page_title'] = "Settings > Company > Emails > Edit Signature";
$lang['AdminCompanyEmails.mail.page_title'] = "Settings > Company > Emails > Mail Settings";
$lang['AdminCompanyEmails.getsmtpsecurityoptions.none'] = "None";
$lang['AdminCompanyEmails.getsmtpsecurityoptions.ssl'] = "SSL";
$lang['AdminCompanyEmails.getsmtpsecurityoptions.tls'] = "TLS";
$lang['AdminCompanyEmails.edittemplate.boxtitle_edittemplate'] = "Edit Email Template %1\$s"; // %1$s is the email template group name
$lang['AdminCompanyEmails.templates.service_unsuspension_name'] = "Service Unsuspension";
$lang['AdminCompanyEmails.templates.service_unsuspension_desc'] = "Service unsuspended notice, sent when a service is automatically unsuspended.";
$lang['AdminCompanyEmails.templates.service_creation_error_name'] = "Creation Error";
$lang['AdminCompanyEmails.templates.service_creation_error_desc'] = "Notice sent after a failed attempt to provision a service.";
$lang['AdminCompanyEmails.templates.report_tax_liability_name'] = "Tax Liability Report";
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_name'] = "Payment Received (Non-Merchant)";
$lang['AdminCompanyEmails.templates.payment_nonmerchant_approved_desc'] = "Notice sent after a payment is received from a non-merchant gateway.";
$lang['AdminCompanyEmails.!tooltip.from_name'] = "This is the friendly name of the email address displayed by the recipient's mail client.";
$lang['AdminCompanyEmails.!tooltip.smtp_password'] = "Set the password for the SMTP user account.";
$lang['AdminCompanyEmails.mail.field.smtp_user'] = "SMTP User";
$lang['AdminCompanyEmails.templates.verify_email_name'] = "Email Verification";
?>