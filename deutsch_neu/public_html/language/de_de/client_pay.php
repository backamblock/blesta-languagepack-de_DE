<?php
/**
 * Language definitions for the Client Pay controller
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success
$lang['ClientPay.!success.payment_processed'] = "Die Zahlung wurde erfolgreich für %1\$s verarbeitet. Transaktionsnummer: %2\$s"; // %1$s is the payment amount, %2$s is the transaction number"; //en: "'The payment was successfully processed for %1$s. Transaction Number: %2$s'; // %1$s is the payment amount, %2$s is the transaction number"
$lang['ClientPay.!success.credit_full_processed'] = "Die verfügbaren Credits wurden angewendet."; //en: "'The available credits have been applied.'"
$lang['ClientPay.!success.credit_partial_processed'] = "Die verfügbaren Credits wurden angewendet, aber es besteht immer noch ein Saldo. Bitte vervollständigen Sie diese Transaktion, indem Sie den Restbetrag bezahlen."; //en: "'The available credits have been applied, but a balance still exists. Please complete this transaction by paying the remainder below.'"
$lang['ClientPay.!success.invoice_paid'] = 'This invoice has previously been paid.';

// Info
$lang['ClientPay.!info.unverified_email'] = "Ein Link wurde an die von Ihnen angegebene E-Mail-Adresse gesendet. Bitte klicken Sie auf den Link in der E-Mail, um Ihre E-Mail-Adresse zu bestätigen, bevor Sie mit der Zahlung fortfahren."; //en: "A link was sent to the email address you provided. Please click the link in the email to verify your email address before proceeding to make payment."
$lang['ClientPay.!info.unverified_email_button'] = 'Resend Verification Email';
$lang['ClientPay.!info.ach_verification'] = "Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können."; //en: "'You need to verify this account before you can use it to make a payment.'"
$lang['ClientPay.!info.ach_verification_redirect'] = "Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können. Dieser Vorgang wird Sie von der aktuellen Seite wegführen."; //en: "'You need to verify this account before you can use it to make a payment. This process will redirect you away from the current page.'"


// Errors
$lang['ClientPay.!error.invalid_details'] = "Bitte wählen Sie eine Zahlungsoption."; //en: "'Please select a payment option.'"
$lang['ClientPay.!error.invalid_amount'] = "Andere Zahlungsbeträge dürfen nicht negativ sein."; //en: "'Other payment amounts may not be negative.'"
$lang['ClientPay.!error.payment_amounts'] = "Bitte wählen Sie die zu zahlenden Rechnungen aus oder geben Sie einen anderen Zahlungsbetrag ein."; //en: "'Please select invoices to pay or enter another payment amount.'"
$lang['ClientPay.!error.invoice_voided'] = "Diese Rechnung wurde storniert und kann nicht bezahlt werden."; //en: "'This invoice has been voided and cannot be paid.'"
$lang['ClientPay.!error.payment_authorize'] = 'Payment could not be authorized for the selected payment account.  Please select a different account or try again.';


// Index (pay process)
$lang['ClientPay.index.page_title'] = "Kunde %1\$s Zahlung"; // %1$s is the client ID"; //en: "'Client %1$s Pay'; // %1$s is the client ID"

$lang['ClientPay.index.boxtitle_pay'] = "Einzahlung leisten"; //en: "'Make Payment'"
$lang['ClientPay.index.field_credit'] = "Anderer Zahlungsbetrag"; //en: "'Other Payment Amount'"
$lang['ClientPay.index.field_submit'] = "Registry"; //en: "'Continue'"


// Method
$lang['ClientPay.method.page_title'] = "Kunde %1\$s Zahlungsmethode"; // %1$s is the client ID"; //en: "'Client %1$s Payment Method'; // %1$s is the client ID"

$lang['ClientPay.method.boxtitle_method'] = "Zahlung vornehmen"; //en: "'Make Payment'"
$lang['ClientPay.method.field_useaccount'] = "Zahlungskonto verwenden"; //en: "'Use Payment Account'"
$lang['ClientPay.method.field_newdetails'] = "Neue Zahlungsdetails"; //en: "'New Payment Details'"
$lang['ClientPay.method.heading_other_payment_options'] = "weitere Bezahlarten"; //en: "'Other Payment Options'"
$lang['ClientPay.method.heading_payment_options'] = "Zahlungsmöglichkeiten"; //en: "'Payment Options'"
$lang['ClientPay.method.field_paymentaccount'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"; //en: "'%1$s %2$s - %3$s x%4$s'; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"
$lang['ClientPay.method.field_paymentaccount_cc'] = "Kreditkartenkonten"; //en: "'Credit Card Accounts'"
$lang['ClientPay.method.field_paymentaccount_autodebit'] = "Automatische Aufladung %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"; //en: "'(Auto Debit) %1$s %2$s - %3$s x%4$s'; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account"
$lang['ClientPay.method.field_paymentaccount_ach'] = "ACH Accounts"; //en: "'ACH Accounts'"
$lang['ClientPay.method.field_apply_credit'] = "Gutschrift anwenden (%1\$s Verfügbar)"; // %1$s is the amount of available credit that may be used"; //en: "'Apply Credit (%1$s Available)'; // %1$s is the amount of available credit that may be used"
$lang['ClientPay.method.field_submit'] = "Überprüfen und Bestätigen"; //en: "'Review and Confirm'"
$lang['ClientPay.method.field_credit_submit'] = "Kreditkarte hinzufügen und fortfahren"; //en: "'Apply Credit and Continue'"
$lang['ClientPay.method.no_options'] = "Es sind keine Zahlungsmöglichkeiten verfügbar."; //en: "'There are no payment options available.'"

$lang['ClientPay.method.heading_invoice'] = "Rechnung %1\$s"; // %1$s is the invoice ID code"; //en: "'Invoice #%1$s'; // %1$s is the invoice ID code"
$lang['ClientPay.method.invoice_description'] = "Beschreibung"; //en: "'Description'"
$lang['ClientPay.method.invoice_quantity'] = "Menge"; //en: "'Quantity'"
$lang['ClientPay.method.invoice_amount'] = "Menge"; //en: "'Amount'"


// Invoices
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = "Nehmen Sie stattdessen eine Teilzahlung vor"; //en: "'Make Partial Payment Instead'"
$lang['ClientPay.multipleinvoices.text_amount'] = "Zu zahlender Betrag"; //en: "'Amount to Pay'"
$lang['ClientPay.multipleinvoices.text_due'] = "Fälliger Betrag"; //en: "'Amount Due'"
$lang['ClientPay.multipleinvoices.text_invoice'] = "Rechnung #"; //en: "'Invoice #'"
$lang['ClientPay.multipleinvoices.text_datedue'] = "Fälligkeitsdatum"; //en: "'Date Due'"
$lang['ClientPay.multipleinvoices.no_results'] = "In dieser Währung gibt es keine Rechnungen."; //en: "'There are no invoices in this currency.'"


// Confirm
$lang['ClientPay.confirm.page_title'] = "Kunde %1\$s,  Bestätigen Sie die Zahlung"; // %1$s is the client ID"; //en: "'Client %1$s Confirm Payment'; // %1$s is the client ID"

$lang['ClientPay.confirm.boxtitle_confirm'] = "Bestätige Zahlung"; //en: "'Confirm Payment'"
$lang['ClientPay.confirm.payment_details'] = "Zahlungsdetails"; //en: "'Payment Details'"
$lang['ClientPay.confirm.account_info'] = '%1$s (%2$s) ending in %3$s'; // %1$s is the account type (Credit Card or ACH), %2$s is the type (Savings, Checking, MasterCard, etc.) and %3$s is the last 4 digits of the account
$lang['ClientPay.confirm.account_info_type'] = '%1$s'; // %1$s is the account type (Credit Card or ACH)
$lang['ClientPay.confirm.account_exp'] = "verfällt %1\$s"; // %1$s is the date the credit card expires"; //en: "'expires %1$s'; // %1$s is the date the credit card expires"
$lang['ClientPay.confirm.total'] = "Gesamtsumme:"; //en: "'Total:'"
$lang['ClientPay.confirm.field_submit'] = "Zahlung abschicken"; //en: "'Submit Payment'"
$lang['ClientPay.confirm.field_edit'] = "Zahlung bearbeiten"; //en: "'Edit Payment'"

$lang['ClientPay.confirm.description_invoice'] = "Rechnung #%1\$s"; // %1$s is the invoice number"; //en: "'Invoice #%1$s'; // %1$s is the invoice number"
$lang['ClientPay.confirm.description_invoice_separator'] = ","; //en: "','"
$lang['ClientPay.confirm.description_invoice_number'] = "#%1\$s"; // %1$s is the invoice number"; //en: "'#%1$s'; // %1$s is the invoice number"
$lang['ClientPay.confirm.description_credit'] = "Zahlungsgutschrift"; //en: "'Payment Credit'"


// Received
$lang['ClientPay.received.page_title'] = "Kunden %1\$s Zahlung emfpangen."; // %1$s is the client ID"; //en: "'Client %1$s Payment Received'; // %1$s is the client ID"
$lang['ClientPay.received.boxtitle_received'] = "Danke!"; //en: "'Thank You!'"
$lang['ClientPay.received.statement'] = "Ihre Zahlung wird verarbeitet."; //en: "'Your payment is being processed.'"
$lang['ClientPay.received.transaction_id'] = "Transaktions-ID"; //en: "'Transaction ID'"
$lang['ClientPay.received.amount'] = "Menge"; //en: "'Amount'"
$lang['ClientPay.received.invoices'] = "Rechnung #"; //en: "'Invoice #'"
$lang['ClientPay.received.text_try_again'] = 'Try Again';


// Set Contact view
$lang['ClientPay.setcontactview.text_none'] = "Nein"; //en: "'None'"
