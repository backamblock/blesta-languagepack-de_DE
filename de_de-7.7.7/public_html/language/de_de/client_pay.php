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

$lang['ClientPay.!success.payment_processed'] = "Die Zahlung wurde erfolgreich für %1\$s verarbeitet. Transaktionsnummer: %2\$s"; // %1$s is the payment amount, %2$s is the transaction number
$lang['ClientPay.!error.invalid_amount'] = "Andere Zahlungsbeträge dürfen nicht negativ sein.";
$lang['ClientPay.!error.payment_amounts'] = "

Bitte wählen Sie die zu zahlenden Rechnungen aus oder geben Sie einen anderen Zahlungsbetrag ein.
";
$lang['ClientPay.index.page_title'] = "Kunde %1\$s Zahlung"; // %1$s is the client ID
$lang['ClientPay.index.boxtitle_pay'] = "Einzahlung leisten";
$lang['ClientPay.index.field_submit'] = "Registry";
$lang['ClientPay.multipleinvoices.text_amount'] = "Zu zahlender Betrag";
$lang['ClientPay.multipleinvoices.text_due'] = "Fälliger Betrag";
$lang['ClientPay.multipleinvoices.text_invoice'] = "Rechnung #";
$lang['ClientPay.multipleinvoices.text_datedue'] = "Fälligkeitsdatum";
$lang['ClientPay.multipleinvoices.no_results'] = "

In dieser Währung gibt es keine Rechnungen.
";
$lang['ClientPay.received.page_title'] = "Kunden %1\$s Zahlung emfpangen."; // %1$s is the client ID
$lang['ClientPay.received.boxtitle_received'] = "Danke!";
$lang['ClientPay.received.statement'] = "Ihre Zahlung wird verarbeitet.";
$lang['ClientPay.setcontactview.text_none'] = "Nein";
$lang['ClientPay.index.field_credit'] = "Anderer Zahlungsbetrag";
$lang['ClientPay.method.page_title'] = "Kunde %1\$s Zahlungsmethode"; // %1$s is the client ID
$lang['ClientPay.method.boxtitle_method'] = "Zahlung vornehmen";
$lang['ClientPay.method.field_useaccount'] = "Zahlungskonto verwenden";
$lang['ClientPay.method.field_newdetails'] = "

Neue Zahlungsdetails
";
$lang['ClientPay.method.field_paymentaccount'] = "%1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_cc'] = "Kreditkartenkonten";
$lang['ClientPay.method.field_paymentaccount_autodebit'] = "Automatische Aufladung %1\$s %2\$s - %3\$s x%4\$s"; // %1$s is the account first name, %2$s is the account last name, %3$s is the account type (card type or bank account type), %4$s is the last 4 of the account
$lang['ClientPay.method.field_paymentaccount_ach'] = "ACH Accounts";
$lang['ClientPay.method.field_submit'] = "Überprüfen und Bestätigen";
$lang['ClientPay.confirm.page_title'] = "Kunde %1\$s,  Bestätigen Sie die Zahlung"; // %1$s is the client ID
$lang['ClientPay.confirm.boxtitle_confirm'] = "

Bestätige Zahlung
";
$lang['ClientPay.confirm.payment_details'] = "Zahlungsdetails";
$lang['ClientPay.confirm.account_exp'] = "

verfällt %1\$s
"; // %1$s is the date the credit card expires
$lang['ClientPay.confirm.total'] = "Gesamtsumme:";
$lang['ClientPay.confirm.field_submit'] = "Zahlung abschicken";
$lang['ClientPay.confirm.field_edit'] = "Zahlung bearbeiten";
$lang['ClientPay.confirm.description_invoice'] = "Rechnung #%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_invoice_separator'] = ",";
$lang['ClientPay.confirm.description_invoice_number'] = "#%1\$s"; // %1$s is the invoice number
$lang['ClientPay.confirm.description_credit'] = "Zahlungsgutschrift";
$lang['ClientPay.!error.invalid_details'] = "Bitte wählen Sie eine Zahlungsoption.";
$lang['ClientPay.method.heading_other_payment_options'] = "weitere Bezahlarten";
$lang['ClientPay.method.heading_payment_options'] = "Zahlungsmöglichkeiten";
$lang['ClientPay.method.no_options'] = "Es sind keine Zahlungsmöglichkeiten verfügbar.";
$lang['ClientPay.!success.credit_full_processed'] = "

Die verfügbaren Credits wurden angewendet.
";
$lang['ClientPay.!success.credit_partial_processed'] = "Die verfügbaren Credits wurden angewendet, aber es besteht immer noch ein Saldo. Bitte vervollständigen Sie diese Transaktion, indem Sie den Restbetrag bezahlen.";
$lang['ClientPay.method.field_apply_credit'] = "

Gutschrift anwenden (%1\$s Verfügbar)
"; // %1$s is the amount of available credit that may be used
$lang['ClientPay.method.field_credit_submit'] = "Kreditkarte hinzufügen und fortfahren";
$lang['ClientPay.multipleinvoices.text_edit_amounts'] = "

Nehmen Sie stattdessen eine Teilzahlung vor
";
$lang['ClientPay.method.heading_invoice'] = "Rechnung %1\$s"; // %1$s is the invoice ID code
$lang['ClientPay.method.invoice_description'] = "Beschreibung";
$lang['ClientPay.method.invoice_quantity'] = "Menge";
$lang['ClientPay.method.invoice_amount'] = "Menge";
$lang['ClientPay.!error.invoice_voided'] = "Diese Rechnung wurde storniert und kann nicht bezahlt werden.";
$lang['ClientPay.received.transaction_id'] = "Transaktions-ID";
$lang['ClientPay.received.amount'] = "Menge";
$lang['ClientPay.received.invoices'] = "Rechnung #";
$lang['ClientPay.!info.unverified_email'] = "Ein Link wurde an die von Ihnen angegebene E-Mail-Adresse gesendet. Bitte klicken Sie auf den Link in der E-Mail, um Ihre E-Mail-Adresse zu bestätigen, bevor Sie mit der Zahlung fortfahren.";
$lang['ClientPay.!info.ach_verification'] = "Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können.";
$lang['ClientPay.!info.ach_verification_redirect'] = "Sie müssen dieses Konto verifizieren, bevor Sie es für eine Zahlung verwenden können. Dieser Vorgang wird Sie von der aktuellen Seite wegführen.";
?>