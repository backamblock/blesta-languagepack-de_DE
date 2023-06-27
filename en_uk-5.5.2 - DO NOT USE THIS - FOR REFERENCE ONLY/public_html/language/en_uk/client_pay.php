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

$lang['ClientPay.!success.payment_processed'] = "The payment was successfully processed for %1\$s. Transaction Number: %2\$s"; // %1$s is the payment amount, %2$s is the transaction number
$lang['ClientPay.!error.invalid_amount'] = "Other payment amounts may not be negative.";
$lang['ClientPay.!error.payment_amounts'] = "Please select invoices to pay or enter another payment amount.";
$lang['ClientPay.index.page_title'] = "Client %1\$s Pay"; // %1$s is the client ID
$lang['ClientPay.index.boxtitle_pay'] = "Make a Payment";
$lang['ClientPay.index.field_submit'] = "Continue";
$lang['ClientPay.multipleinvoices.text_amount'] = "Amount to Pay";
$lang['ClientPay.multipleinvoices.text_due'] = "Amount Due";
$lang['ClientPay.multipleinvoices.text_invoice'] = "Invoice #";
$lang['ClientPay.multipleinvoices.text_datedue'] = "Date Due";
$lang['ClientPay.multipleinvoices.no_results'] = "There are no invoices in this currency.";
$lang['ClientPay.received.page_title'] = "Client %1\$s Payment Received"; // %1$s is the client ID
$lang['ClientPay.received.statement'] = "Your payment is being processed.";
$lang['ClientPay.setcontactview.text_none'] = "None";
$lang['ClientPay.index.field_credit'] = "Other Payment Amount";
$lang['ClientPay.method.page_title'] = "Client %1\$s Payment Method"; // %1$s is the client ID
$lang['ClientPay.method.boxtitle_method'] = "Make Payment";
$lang['ClientPay.method.field_useaccount'] = "Use Payment Account";
$lang['ClientPay.method.field_newdetails'] = "New Payment Details";
$lang['ClientPay.method.field_paymentaccount'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_autodebit'] = "(Auto Debit) %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_ach'] = "ACH Accounts";
$lang['ClientPay.method.field_submit'] = "Review and Confirm";
$lang['ClientPay.confirm.page_title'] = "Client %1\$s Confirm Payment"; // %1$s is the client ID
$lang['ClientPay.confirm.payment_details'] = "Payment Details";
$lang['ClientPay.confirm.account_exp'] = "expires %1\$s"; // %1$s is the date the credit card expires
$lang['ClientPay.confirm.total'] = "Total:";
$lang['ClientPay.confirm.description_invoice'] = "Invoice #%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_invoice_number'] = "#%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_credit'] = "Payment Credit";
$lang['ClientPay.!error.invalid_details'] = "Please select a payment option.";
$lang['ClientPay.method.heading_other_payment_options'] = "Other Payment Options";
$lang['ClientPay.method.heading_payment_options'] = "Payment Options";
$lang['ClientPay.method.no_options'] = "There are no payment options available.";
$lang['ClientPay.!success.credit_full_processed'] = "The available credits have been applied.";
$lang['ClientPay.method.field_credit_submit'] = "Apply Credit and Continue";
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = "Make Partial Payment Instead";
$lang['ClientPay.method.heading_invoice'] = "Invoice #%1\$s"; // %1$s is the invoice ID code
$lang['ClientPay.method.invoice_description'] = "Description";
$lang['ClientPay.method.invoice_quantity'] = "Quantity";
$lang['ClientPay.!error.invoice_voided'] = "This invoice has been voided and cannot be paid.";
?>