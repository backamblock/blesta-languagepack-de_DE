<?php
/**
 * Language definitions for the Accounts model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Common ACH/CC errors
$lang['Accounts.!error.contact_id.exists'] = "Ungültige Kontakt-ID."; //en: "'Invalid contact ID.'"
$lang['Accounts.!error.first_name.empty'] = "Bitte geben Sie einen Vornamen an."; //en: "'Please specify a first name.'"
$lang['Accounts.!error.last_name.empty'] = "Bitte geben Sie einen Nachnamen an."; //en: "'Please specify a last name.'"
$lang['Accounts.!error.state.length'] = "Region Länge darf maximal 3 Zeichen sein."; //en: "'State length may not exceed 3 characters.'"
$lang['Accounts.!error.country.length'] = "Der Ländercode darf nicht länger als 3 Zeichen sein."; //en: "'Country length may not exceed 3 characters.'"
$lang['Accounts.!error.state.country_exists'] = "Bitte wählen Sie das Land, das der ausgewählten Region entspricht."; //en: "'Please select the country that matches the selected state.'"
$lang['Accounts.!error.currency.format'] = "Die Währung ist ungültig."; //en: "'The currency is invalid.'"

// ACH errors
$lang['Accounts.!error.account.length'] = "Bitte geben Sie eine Kontonummer ein."; //en: "'Please specify an account number.'"
$lang['Accounts.!error.routing.empty'] = "Bitte geben Sie eine Bankleitzahl an."; //en: "'Please specify a routing number.'"
$lang['Accounts.!error.last4.empty_ach'] = "Bitte geben Sie Ihre letzten 4 Ziffern Ihrer Kontonummer ein."; //en: "'Please enter the last four digits of the account number.'"
$lang['Accounts.!error.type.ach_format'] = "Ungültiger Typ."; //en: "'Invalid type.'"
$lang['Accounts.!error.ach_account_id.exists'] = "Ungültige Kontonummer."; //en: "'Invalid account ID.'"

// CC errors
$lang['Accounts.!error.number.valid'] = "Die Kartennummer ist ungültig."; //en: "'The card number given is invalid.'"
$lang['Accounts.!error.expiration.empty'] = "Bitte geben Sie das Ablaufdatum der Kreditkarte an."; //en: "'Please enter the credit card expiration date.'"
$lang['Accounts.!error.expiration.valid'] = "Die Karte ist bereits abgelaufen."; //en: "'The expiration date has already lapsed.'"
$lang['Accounts.!error.last4.empty_cc'] = "Bitte geben Sie die letzten vier Ziffern Ihrer Kreditkarte ein."; //en: "'Please enter the last four digits of the credit card number.'"
$lang['Accounts.!error.type.cc_format'] = "Die Karte ist ungültig oder konnte nicht ermittelt werden."; //en: "'The card type is invalid or could not be determined.'"
$lang['Accounts.!error.cc_account_id.exists'] = "Ungültige Konto-ID."; //en: "'Invalid account ID.'"


// Text
$lang['Accounts.getTypes.cc'] = "Kreditkarte"; //en: "'Credit Card'"
$lang['Accounts.getTypes.ach'] = "Automated Clearing House"; //en: "'Automated Clearing House'"
$lang['Accounts.getTypes.other'] = "Andere"; //en: "'Other'"

$lang['Accounts.getAchTypes.checking'] = "Checking"; //en: "'Checking'"
$lang['Accounts.getAchTypes.savings'] = "Savings"; //en: "'Savings'"

$lang['Accounts.getCcTypes.amex'] = "American Express (AMEX)"; //en: "'American Express'"
$lang['Accounts.getCcTypes.bc'] = "Bankkarte"; //en: "'Bankcard'"
$lang['Accounts.getCcTypes.cup'] = "China Union Pay"; //en: "'China Union Pay'"
$lang['Accounts.getCcTypes.dc-cb'] = "Diners Club Carte Blanche"; //en: "'Diners Club Carte Blanche'"
$lang['Accounts.getCcTypes.dc-er'] = "Diners Club EnRoute"; //en: "'Diners Club EnRoute'"
$lang['Accounts.getCcTypes.dc-int'] = "Diners Club International"; //en: "'Diners Club International'"
$lang['Accounts.getCcTypes.dc-uc'] = "Diners Club US and Canada"; //en: "'Diners Club US and Canada'"
$lang['Accounts.getCcTypes.disc'] = "Discover"; //en: "'Discover'"
$lang['Accounts.getCcTypes.ipi'] = "InstaPayment"; //en: "'InstaPayment'"
$lang['Accounts.getCcTypes.jcb'] = "Japan Credit Bureau"; //en: "'Japan Credit Bureau'"
$lang['Accounts.getCcTypes.lasr'] = "Laser"; //en: "'Laser'"
$lang['Accounts.getCcTypes.maes'] = "Maestro"; //en: "'Maestro'"
$lang['Accounts.getCcTypes.mc'] = "Master Card"; //en: "'Master Card'"
$lang['Accounts.getCcTypes.solo'] = "Solo"; //en: "'Solo'"
$lang['Accounts.getCcTypes.switch'] = "Switch"; //en: "'Switch'"
$lang['Accounts.getCcTypes.visa'] = "Visa"; //en: "'Visa'"
$lang['Accounts.getCcTypes.other'] = "Sonstiges"; //en: "'Other'"
