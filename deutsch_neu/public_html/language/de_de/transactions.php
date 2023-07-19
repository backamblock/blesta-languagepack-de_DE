<?php
/**
 * Language definitions for the Transactions model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Transaction errors
$lang['Transactions.!error.client_id.exists'] = "Ungültige Kunden ID."; //en: "'Invalid client ID.'"
$lang['Transactions.!error.amount.format'] = "Betrag muss eine Zahl sein."; //en: "'Amount must be a number.'"
$lang['Transactions.!error.currency.length'] = "Die Währung muss aus 3 Zeichen bestehen."; //en: "'Currency must be 3 characters in length.'"
$lang['Transactions.!error.type.format'] = "Ungültiger Transaktions Typ."; //en: "'Invalid transaction type.'"
$lang['Transactions.!error.transaction_type_id.exists'] = "Ungültige Transaktionstyp-ID."; //en: "'Invalid transaction type ID.'"
$lang['Transactions.!error.gateway_id.exists'] = "Ungültige Gateway-ID."; //en: "'Invalid gateway ID.'"
$lang['Transactions.!error.transaction_id.length'] = 'The Transaction ID length may not exceed 128 characters in length.';
$lang['Transactions.!error.parent_transaction_id.length'] = 'The Parent Transaction ID length may not exceed 128 characters in length.';
$lang['Transactions.!error.reference_id.length'] = 'The Reference ID length may not exceed 128 characters in length.';
$lang['Transactions.!error.status.format'] = "Ungültiger Transaktionsstatus"; //en: "'Invalid transaction status.'"
$lang['Transactions.!error.transaction_id.exists'] = "Ungültige Transaktions-ID"; //en: "'Invalid transaction ID.'"
$lang['Transactions.!error.date_added.format'] = "Zahlungsdatum kann nicht in der Zukunft liegen."; //en: "'Transaction date can not be a future date.'"
$lang['Transactions.!error.message.length'] = 'The message length may not exceed 255 characters in length.';

// Transaction applied errors
$lang['Transactions.!error.transaction_id.exists'] = 'Invalid transaction ID.';
$lang['Transactions.!error.transaction_id.currency_matches'] = "Die Rechnungsbeträge konnten nicht angewendet werden, da sie nicht mit der Währung der Transaktion übereinstimmen."; //en: "The invoice amounts could not be applied because they do not match the transaction's currency."
$lang['Transactions.!error.invoice_id.exists'] = "Ungültige Rechnungsnummer."; //en: "'Invalid invoice ID.'"
$lang['Transactions.!error.amounts.overage'] = "Ein oder mehrere Amount to Pay-Werte konnten nicht auf die angegebene Rechnung angewendet werden. Stellen Sie sicher, dass der zu zahlende Betrag den auf der Rechnung fälligen Betrag nicht überschreitet, dass die Rechnung offen ist und die Summe der zu zahlenden Beträge den Zahlungs- oder Kreditbetrag nicht übersteigt."; //en: "'One or more Amount to Pay values could not be applied to the specified invoice. Ensure that the Amount to Pay does not exceed the Amount Due on the invoice, that the invoice is open, and the sum of the Amount to Pay values do not exceed the Payment or Credit Amount.'"
$lang['Transactions.!error.amounts.positive'] = "Ein oder mehrere Beträge zur Bezahlung sind negativ, bitte stellen Sie sicher, das diese größer als null sind. "; //en: "'One or more Amount to Pay values is negative. Ensure that each Amount to Pay value is zero or more.'"
$lang['Transactions.!error.date.format'] = "Das angegebene Datum ist ungültig."; //en: "'The date applied is invalid.'"

$lang['Transactions.!error.currency.missing'] = "Bitte legen Sie eine Währung fest."; //en: "'Please set a currency.'"
$lang['Transactions.!error.currency.mismatch'] = "Die angegebene Währung stimmt nicht mit mindestens einer der zugeordneten Rechnungen überein."; //en: "'The given currency does not match at least one of the associated invoices.'"


// Transaction type errors
$lang['Transactions.!error.name.empty'] = "Bitte einen Namen angeben."; //en: "'Please enter a name.'"
$lang['Transactions.!error.name.length'] = "Länge des Namens darf 32 Zeichen nicht überschreiten."; //en: "'Name length may not exceed 32 characters.'"
$lang['Transactions.!error.type.valid'] = "Bitte wählen Sie einen gültigen Typ."; //en: "'Please select a valid type.'"
$lang['Transactions.!error.is_lang.format'] = "is_lang muss eine Nummer sein"; //en: "'is_lang must be a number.'"
$lang['Transactions.!error.is_lang.length'] = "is_lang Länge darf 1 Zeichen nicht überschreiten."; //en: "'is_lang length may not exceed 1 character.'"
$lang['Transactions.!error.type_id.exists'] = "Ungültige Transaktion Typ ID"; //en: "'Invalid transaction type ID.'"

// Transaction types
// Standard types
$lang['Transactions.types.cc'] = "Kreditkarte"; //en: "'Credit Card'"
$lang['Transactions.types.ach'] = "ACH"; //en: "'ACH'"
$lang['Transactions.types.other'] = "Andere"; //en: "'Other'"

// Status values
$lang['Transactions.status.approved'] = "Genehmigt"; //en: "'Approved'"
$lang['Transactions.status.declined'] = "Abgelehnt"; //en: "'Declined'"
$lang['Transactions.status.void'] = "Wiederrufen"; //en: "'Void'"
$lang['Transactions.status.error'] = "Error"; //en: "'Error'"
$lang['Transactions.status.pending'] = "Ausstehend"; //en: "'Pending'"
$lang['Transactions.status.refunded'] = "Erstattet"; //en: "'Refunded'"
$lang['Transactions.status.returned'] = "Zurückgekehrt"; //en: "'Returned'"

// Transaction debit types
$lang['Transactions.debit_types.debit'] = "Lastschrift"; //en: "'Debit'"
$lang['Transactions.debit_types.credit'] = "Kredit"; //en: "'Credit'"
