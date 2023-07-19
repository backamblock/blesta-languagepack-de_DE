<?php
/**
 * Language definitions for the Companies model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['Companies.!error.company_id.in_use'] = "Dieses Unternehmen wird derzeit verwendet und kann nicht gelöscht werden."; //en: "'That company is currently in use and may not be deleted.'"
$lang['Companies.!error.company_id.exists'] = "Ungültige Unternehmens ID."; //en: "'Invalid company ID.'"
$lang['Companies.!error.name.empty'] = "Bitte geben Sie einen Namen ein."; //en: "'Please enter a name.'"
$lang['Companies.!error.name.length'] = "Die Länge des Namens darf 64 Zeichen nicht überschreiten."; //en: "'Name length may not exceed 64 characters.'"
$lang['Companies.!error.hostname.valid'] = "Bitte geben Sie einen gültigen Hostnamen ein."; //en: "'Please enter a valid hostname.'"
$lang['Companies.!error.hostname.length'] = "Der Hostname darf nicht mehr als 255 Zeichen lang sein."; //en: "'The hostname may not exceed 255 characters in length.'"
$lang['Companies.!error.hostname.unique'] = "Dieser Hostname wurde bereits von einer anderen Firma übernommen."; //en: "'That hostname has already been taken by another company.'"
$lang['Companies.!error.phone.length'] = "Telefonnummer darf nicht länger als 64 Zeichen sein."; //en: "'Phone length may not exceed 64 characters.'"
$lang['Companies.!error.fax.length'] = "Die Faxlänge darf 64 Zeichen nicht überschreiten."; //en: "'Fax length may not exceed 64 characters.'"
$lang['Companies.!error.private_key_passphrase.valid'] = "Die eingegebene Passphrase ist ungültig."; //en: "'The passphrase you entered is invalid.'"
$lang['Companies.!error.quota.allowed'] = "Es sind keine zusätzlichen Firmenlizenzen verfügbar. Um eine zusätzliche Lizenz zu erwerben melden Sie sich bitte unter account.blesta.com an oder kontaktieren Sie unseren Vertrieb."; //en: "'There are no addon company licenses available. Please log in to your account at account.blesta.com or contact sales to purchase additional company licenses.'"

$lang['Companies.!error.inv_format.format'] = "Das Rechnungsformat kann nicht mit dem Rechnungsentwurfsformat in Konflikt stehen."; //en: "'Invoice Format can not conflict with the Invoice Draft Format.'"
$lang['Companies.!error.inv_format.contains'] = "Rechnungsformat muss {num} enthalten."; //en: "'Invoice Format must contain {num}.'"
$lang['Companies.!error.inv_draft_format.format'] = "Das Rechnungserstellungsformat kann nicht mit dem Rechnungsformat in Konflikt stehen."; //en: "'Invoice Draft Format can not conflict with the Invoice Format.'"
$lang['Companies.!error.inv_draft_format.contains'] = "Rechnungsentwurfsformat muss {num} enthalten."; //en: "'Invoice Draft Format must contain {num}.'"
$lang['Companies.!error.inv_start.number'] = "Rechnungsnummer muss eine Zahl sein."; //en: "'Invoice Start Value must be a number.'"
$lang['Companies.!error.inv_increment.number'] = "Rechnungsinkrementwert muss eine Ziffer sein."; //en: "'Invoice Increment Value must be a number.'"
$lang['Companies.!error.inv_pad_size.number'] = "Rechnungs Padding Größe muss eine Zahl sein."; //en: "'Invoice Padding Size must be a number.'"
$lang['Companies.!error.inv_pad_str.length'] = "Invoice Padding Character muss ein einzelnes Zeichen sein."; //en: "'Invoice Padding Character must be a single character.'"
$lang['Companies.!error.inv_proforma_format.format'] = "Das Pro-Forma-Rechnungsformat kann nicht mit dem Entwurf des Rechnungsformats in Konflikt stehen."; //en: "'Pro Forma Invoice Format can not conflict with the Draft Invoice Format.'"
$lang['Companies.!error.inv_proforma_format.contains'] = "Das Pro-Forma-Rechnungsformat muss {num} enthalten."; //en: "'Pro Forma Invoice Format must contain {num}.'"
$lang['Companies.!error.inv_proforma_start.number'] = "Der Proforma-Rechnungsstartwert muss eine Zahl sein."; //en: "'Pro Forma Invoice Start Value must be a number.'"
