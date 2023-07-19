<?php
/**
 * Language definitions for the Currencies model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Currencies.!error.code.length'] = "Der Währungscode muss 3 alphabetische Zeichen lang sein (definiert nach ISO 4217)."; //en: "'The currency code must be 3 alpha characters as defined in ISO 4217.'"
$lang['Currencies.!error.code.exists'] = "Eine Währung mit dem Code %1\$s und der Unternehmens-ID %2\$s ist bereits vergeben."; // %1$s is the currency code, %2$s is the company ID number"; //en: "'A currency with code %1$s and company ID %2$s is already taken.'; // %1$s is the currency code, %2$s is the company ID number"
$lang['Currencies.!error.company_id.exists'] = "Ungültige Firmen-ID"; //en: "'Invalid company ID.'"
$lang['Currencies.!error.format.format'] = "Ungültiges Währungsformat"; //en: "'Invalid currency format.'"
$lang['Currencies.!error.precision.format'] = "Die Währungspräzision muss eine Zahl zwischen 0 und 4 sein."; //en: "'The currency precision must be a number between 0 and 4, inclusive.'"
$lang['Currencies.!error.prefix.length'] = "Das Währungspräfix darf nicht länger als 10 Zeichen sein."; //en: "'The currency prefix may not exceed 10 characters in length.'"
$lang['Currencies.!error.suffix.length'] = "Das Währungs-Suffix darf eine Länge von 10 Zeichen nicht überschreiten."; //en: "'The currency suffix may not exceed 10 characters in length.'"
$lang['Currencies.!error.exchange_rate.format'] = "Der Wechselkurs muss eine Zahl sein."; //en: "'The exchange rate must be a number.'"
$lang['Currencies.!error.exchange_updated.format'] = "Das aktualisierte Datum des Austauschs hat ein ungültiges Datumsformat."; //en: "'The exchange updated date is in an invalid date format.'"
$lang['Currencies.!error.currency_code.in_use'] = "Die Währung %1\$s ist derzeit in Verwendung und kann nicht gelöscht werden."; // %1$s is the currency code"; //en: "'The currency %1$s is currently in use and cannot be deleted.'; // %1$s is the currency code"
$lang['Currencies.!error.currency_code.is_default'] = "Die Währung %1\$s ist die Standardwährung und kann nicht gelöscht werden."; // %1$s is the currency code"; //en: "'The currency %1$s is the default currency and cannot be deleted.'; // %1$s is the currency code"

$lang['Currencies.!error.processor.invalid'] = "Ungültige Wechselkurs Berechnung."; //en: "'Invalid exchange rate processor.'"
$lang['Currencies.!error.processor.empty'] = "Es wurde kein Wechselkursprozessor eingerichtet."; //en: "'No exchange rate processor has been set.'"
