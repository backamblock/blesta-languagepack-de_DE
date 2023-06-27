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

$lang['Currencies.!error.code.length'] = "Der Währungscode muss 3 alphabetische Zeichen lang sein (definiert nach ISO 4217).";
$lang['Currencies.!error.code.exists'] = "Eine Währung mit dem Code %1\$s und der Unternehmens-ID %2\$s ist bereits vergeben."; // %1$s is the currency code, %2$s is the company ID number
$lang['Currencies.!error.company_id.exists'] = "

Ungültige Firmen-ID
";
$lang['Currencies.!error.format.format'] = "Ungültiges Währungsformat";
$lang['Currencies.!error.prefix.length'] = "

Das Währungspräfix darf nicht länger als 10 Zeichen sein.
";
$lang['Currencies.!error.suffix.length'] = "Das Währungs-Suffix darf eine Länge von 10 Zeichen nicht überschreiten.";
$lang['Currencies.!error.exchange_rate.format'] = "Der Wechselkurs muss eine Zahl sein.";
$lang['Currencies.!error.exchange_updated.format'] = "Das aktualisierte Datum des Austauschs hat ein ungültiges Datumsformat.";
$lang['Currencies.!error.currency_code.in_use'] = "Die Währung %1\$s ist derzeit in Verwendung und kann nicht gelöscht werden."; // %1$s is the currency code
$lang['Currencies.!error.currency_code.is_default'] = "Die Währung %1\$s ist die Standardwährung und kann nicht gelöscht werden."; // %1$s is the currency code
$lang['Currencies.!error.processor.invalid'] = "Ungültige Wechselkurs Berechnung.";
$lang['Currencies.!error.processor.empty'] = "Es wurde kein Wechselkursprozessor eingerichtet.";
$lang['Currencies.!error.precision.format'] = "Die Währungspräzision muss eine Zahl zwischen 0 und 4 sein.";
?>