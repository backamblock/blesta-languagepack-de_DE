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

 // Common ACH/CC errors
$lang['Accounts.!error.contact_id.exists'] = "Ungültige Kontakt-ID.";
$lang['Accounts.!error.first_name.empty'] = "Bitte geben Sie einen Vornamen an.";
$lang['Accounts.!error.last_name.empty'] = "Bitte geben Sie einen Nachnamen an.";
$lang['Accounts.!error.state.length'] = "Region Länge darf maximal 3 Zeichen sein.";
$lang['Accounts.!error.country.length'] = "Der Ländercode darf nicht länger als 3 Zeichen sein.";
$lang['Accounts.!error.state.country_exists'] = "Bitte wählen Sie das Land, das der ausgewählten Region entspricht.";
$lang['Accounts.!error.currency.format'] = "Die Währung ist ungültig.";

// ACH errors
$lang['Accounts.!error.account.length'] = "Bitte geben Sie eine Kontonummer ein.";
$lang['Accounts.!error.routing.empty'] = "Bitte geben Sie eine Bankleitzahl an.";
$lang['Accounts.!error.last4.empty_ach'] = "Bitte geben Sie Ihre letzten 4 Ziffern Ihrer Kontonummer ein.";
$lang['Accounts.!error.type.ach_format'] = "Ungültiger Typ.";
$lang['Accounts.!error.ach_account_id.exists'] = "Ungültige Kontonummer.";

// CC errors
$lang['Accounts.!error.number.valid'] = "Die Kartennummer ist ungültig.";
$lang['Accounts.!error.expiration.empty'] = "Bitte geben Sie das Ablaufdatum der Kreditkarte an.";
$lang['Accounts.!error.expiration.valid'] = "Die Karte ist bereits abgelaufen.";
$lang['Accounts.!error.last4.empty_cc'] = "Bitte geben Sie die letzten vier Ziffern Ihrer Kreditkarte ein.";
$lang['Accounts.!error.type.cc_format'] = "Die Karte ist ungültig oder konnte nicht ermittelt werden.";
$lang['Accounts.!error.cc_account_id.exists'] = "Ungültige Konto-ID.";

// Text
$lang['Accounts.getTypes.cc'] = "Kreditkarte";
$lang['Accounts.getTypes.ach'] = "Automated Clearing House";
$lang['Accounts.getTypes.other'] = "Andere";
$lang['Accounts.getAchTypes.checking'] = "Checking";
$lang['Accounts.getAchTypes.savings'] = "Savings";
$lang['Accounts.getCcTypes.amex'] = "American Express (AMEX)";
$lang['Accounts.getCcTypes.bc'] = "Bankkarte";
$lang['Accounts.getCcTypes.cup'] = "China Union Pay";
$lang['Accounts.getCcTypes.dc-cb'] = "Diners Club Carte Blanche";
$lang['Accounts.getCcTypes.dc-er'] = "Diners Club EnRoute";
$lang['Accounts.getCcTypes.dc-int'] = "Diners Club International";
$lang['Accounts.getCcTypes.dc-uc'] = "Diners Club US and Canada";
$lang['Accounts.getCcTypes.disc'] = "Discover";
$lang['Accounts.getCcTypes.ipi'] = "InstaPayment";
$lang['Accounts.getCcTypes.jcb'] = "Japan Credit Bureau";
$lang['Accounts.getCcTypes.lasr'] = "Laser";
$lang['Accounts.getCcTypes.maes'] = "Maestro";
$lang['Accounts.getCcTypes.mc'] = "Master Card";
$lang['Accounts.getCcTypes.solo'] = "Solo";
$lang['Accounts.getCcTypes.switch'] = "Switch";
$lang['Accounts.getCcTypes.visa'] = "Visa";
$lang['Accounts.getCcTypes.other'] = "Sonstiges";
?>