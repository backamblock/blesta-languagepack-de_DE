<?php
/**
 * Language definitions for the Taxes model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['Taxes.!error.company_id.exists'] = "Ungültige Firmen-ID"; //en: "'Invalid company ID.'"
$lang['Taxes.!error.level.format'] = "Das Steuerlevel muss eine Nummer sein."; //en: "'The tax level must be a number.'"
$lang['Taxes.!error.level.length'] = "Die Steuerstufenlänge darf 2 Zeichen nicht überschreiten."; //en: "'The tax level length may not exceed 2 characters.'"
$lang['Taxes.!error.name.length'] = "Die Länge des Namens der Steuer darf 64 Zeichen nicht überschreiten."; //en: "'The tax name length may not exceed 64 characters.'"
$lang['Taxes.!error.amount.format'] = "Der Wert muss eine Zahl sein"; //en: "'Amount must be a number.'"
$lang['Taxes.!error.amount.positive'] = 'Amount must be positive.';
$lang['Taxes.!error.type.format'] = "Ungültige Steuerart"; //en: "'Invalid tax type.'"
$lang['Taxes.!error.country.valid'] = "Land ist kein gültiger Ländercode nach ISO 3166-1."; //en: "'Country is not a valid ISO 3166-1 country code.'"
$lang['Taxes.!error.state.valid'] = "Der Status ist kein gültiger ISO 3166-2-Unterteilungscode."; //en: "'State is not a valid ISO 3166-2 subdivision code.'"
$lang['Taxes.!error.status.format'] = "Ungültigen Status."; //en: "'Invalid status.'"
$lang['Taxes.!error.tax_id.exists'] = "Ungültige Steuer-ID"; //en: "'Invalid tax ID.'"

// Statuses
$lang['Taxes.getTaxStatus.active'] = "Aktiv"; //en: "'Active'"
$lang['Taxes.getTaxStatus.inactive'] = "Inaktiv"; //en: "'Inactive'"

// Types
$lang['Taxes.getTaxTypes.inclusive_calculated'] = 'Inclusive';
$lang['Taxes.getTaxTypes.inclusive'] = 'Inclusive (Additive)';
$lang['Taxes.getTaxTypes.exclusive'] = "Ecklusive"; //en: "'Exclusive'"
