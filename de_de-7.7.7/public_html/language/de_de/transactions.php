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

$lang['Transactions.!error.client_id.exists'] = "Ungültige Kunden ID.";
$lang['Transactions.!error.amount.format'] = "Betrag muss eine Zahl sein.";
$lang['Transactions.!error.currency.length'] = "Die Währung muss aus 3 Zeichen bestehen.";
$lang['Transactions.!error.type.format'] = "Ungültiger Transaktions Typ.";
$lang['Transactions.!error.transaction_type_id.exists'] = "Ungültige Transaktionstyp-ID.";
$lang['Transactions.!error.gateway_id.exists'] = "Ungültige Gateway-ID.";
$lang['Transactions.!error.status.format'] = "Ungültiger Transaktionsstatus";
$lang['Transactions.!error.transaction_id.exists'] = "Ungültige Transaktions-ID";
$lang['Transactions.!error.date_added.format'] = "Zahlungsdatum kann nicht in der Zukunft liegen.";
$lang['Transactions.!error.invoice_id.exists'] = "Ungültige Rechnungsnummer.";
$lang['Transactions.!error.date.format'] = "Das angegebene Datum ist ungültig.";
$lang['Transactions.!error.name.empty'] = "Bitte einen Namen angeben.";
$lang['Transactions.!error.name.length'] = "Länge des Namens darf 32 Zeichen nicht überschreiten.";
$lang['Transactions.!error.is_lang.format'] = "is_lang muss eine Nummer sein";
$lang['Transactions.!error.is_lang.length'] = "is_lang Länge darf 1 Zeichen nicht überschreiten.";
$lang['Transactions.!error.type_id.exists'] = "Ungültige Transaktion Typ ID";
$lang['Transactions.types.cc'] = "Kreditkarte";
$lang['Transactions.types.ach'] = "ACH";
$lang['Transactions.types.other'] = "Andere";
$lang['Transactions.status.approved'] = "Genehmigt";
$lang['Transactions.status.declined'] = "Abgelehnt";
$lang['Transactions.status.void'] = "Wiederrufen";
$lang['Transactions.status.error'] = "Error";
$lang['Transactions.status.pending'] = "Ausstehend";
$lang['Transactions.status.returned'] = "Zurückgekehrt";
$lang['Transactions.!error.amounts.positive'] = "Ein oder mehrere Beträge zur Bezahlung sind negativ, bitte stellen Sie sicher, das diese größer als null sind. ";
$lang['Transactions.status.refunded'] = "Erstattet";
$lang['Transactions.!error.currency.missing'] = "Bitte legen Sie eine Währung fest.";
$lang['Transactions.!error.currency.mismatch'] = "Die angegebene Währung stimmt nicht mit mindestens einer der zugeordneten Rechnungen überein.";
$lang['Transactions.!error.amounts.overage'] = "Ein oder mehrere Amount to Pay-Werte konnten nicht auf die angegebene Rechnung angewendet werden. Stellen Sie sicher, dass der zu zahlende Betrag den auf der Rechnung fälligen Betrag nicht überschreitet, dass die Rechnung offen ist und die Summe der zu zahlenden Beträge den Zahlungs- oder Kreditbetrag nicht übersteigt.";
$lang['Transactions.!error.transaction_id.currency_matches'] = "Die Rechnungsbeträge konnten nicht angewendet werden, da sie nicht mit der Währung der Transaktion übereinstimmen.";
$lang['Transactions.!error.type.valid'] = "Bitte wählen Sie einen gültigen Typ.";
$lang['Transactions.debit_types.debit'] = "Lastschrift";
$lang['Transactions.debit_types.credit'] = "Kredit";
?>