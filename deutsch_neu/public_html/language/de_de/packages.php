<?php
/**
 * Language definitions for the Packages model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Package errors
$lang['Packages.!error.company_id.exists'] = "Ungültige Firma angegeben"; //en: "'Invalid company given.'"
$lang['Packages.!error.package_id.exists'] = "Das Paket konnte nicht gelöscht werden, da ein Service / Paket noch in Verwendung ist."; //en: "'The package could not be deleted because a service is currently using it.'"
$lang['Packages.!error.package_id.has_children'] = 'The package could not be deleted because a service has child services.';
$lang['Packages.!error.module_id.exists'] = "Ungültiges Modul übergeben."; //en: "'Invalid module given.'"
$lang['Packages.!error.module_id.changed'] = "Das Modul kann nicht geändert werden, da ein oder mehrere Dienste dieses Paket bereits verwenden."; //en: "'The module cannot be changed because there are one or more services already using this package.'"
$lang['Packages.!error.names.format'] = "Die Paketnamen haben ein ungültiges Format."; //en: "'The package names are in an invalid format.'"
$lang['Packages.!error.names.empty_name'] = "Bitte geben Sie für jede Sprache einen Paketnamen an."; //en: "'Please specify a package name for each language.'"
$lang['Packages.!error.names.empty_lang'] = "Bitte geben Sie für jeden Namen einen Paketsprachcode an."; //en: "'Please specify a package language code for each name.'"
$lang['Packages.!error.descriptions.format'] = "Die Paketbeschreibungen haben ein ungültiges Format."; //en: "'The package descriptions are in an invalid format.'"
$lang['Packages.!error.descriptions.empty_lang'] = "Bitte geben Sie für jede Beschreibung einen Paketsprachcode an."; //en: "'Please specify a package language code for each description.'"

$lang['Packages.!error.qty.format'] = "Die Menge muss eine Zahl sein."; //en: "'Quantity must be a number.'"
$lang['Packages.!error.client_qty.format'] = 'Client limit must be a number.';
$lang['Packages.!error.option_groups[].valid'] = "Ungültige konfigurierbare Paketoptionsgruppe angegeben."; //en: "'Invalid configurable package option group given.'"
$lang['Packages.!error.plugins[].valid'] = "Ungültiges Plugin angegeben"; //en: "'Invalid plugin given.'"
$lang['Packages.!error.module_row.format'] = "Ungültige Modulspalte gegeben."; //en: "'Invalid module row given.'"
$lang['Packages.!error.module_group.format'] = "Ungültige Modulgruppe angegeben"; //en: "'Invalid module group given.'"
$lang['Packages.!error.taxable.format'] = "Steuerpflichtig muss eine Zahl sein."; //en: "'Taxable must be a number.'"
$lang['Packages.!error.taxable.length'] = "Die steuerpflichtige Länge darf 1 Zeichen nicht überschreiten."; //en: "'The taxable length may nont exceed 1 character.'"
$lang['Packages.!error.single_term.valid'] = "Einziger Ausdruck muss entweder 1 oder 0 sein."; //en: "'Single term must be either 1 or 0.'"
$lang['Packages.!error.override_price.valid'] = 'Set package pricing as override price must be either 1 or 0.';
$lang['Packages.!error.upgrades_use_renewal.valid'] = 'Use renewal prices for upgrades must be either 1 or 0.';
$lang['Packages.!error.status.format'] = "Ungültiger Status."; //en: "'Invalid status.'"
$lang['Packages.!error.hidden.format'] = 'Whether this group should be hidden in the interface must be set to 1 or 0.';
$lang['Packages.!error.prorata_day.format'] = "Der anteilige Tag muss zwischen 1 und 28 liegen."; //en: "'The pro rata day must be between 1 and 28.'"
$lang['Packages.!error.prorata_cutoff.format'] = "Der anteilige Stichtag muss zwischen 1 und 28 liegen."; //en: "'The pro rata cutoff day must be between 1 and 28.'"

// Package email errors
$lang['Packages.!error.email_content[][lang].empty'] = "Bitte geben Sie eine Sprache ein"; //en: "'Please enter a language.'"
$lang['Packages.!error.email_content[][lang].length'] = "Die Sprachlänge darf 5 Zeichen nicht überschreiten."; //en: "'The language length may not exceed 5 characters.'"
$lang['Packages.!error.email_content.parse'] = "Fehler beim Template parsen: %1\$s"; // %1$s is the parse error generated"; //en: "'Template parse error: %1$s'; // %1$s is the parse error generated"

// Package pricing errors
$lang['Packages.!error.pricing[][term].format'] = "Der Begriff muss eine Zahl sein."; //en: "'Term must be a number.'"
$lang['Packages.!error.pricing[][term].length'] = "Die Laufzeit darf 5 Zeichen nicht überschreiten."; //en: "'Term length may not exceed 5 characters.'"
$lang['Packages.!error.pricing[][term].valid'] = "Die Laufzeit darf nicht 0 sein."; //en: "'The term must be greater than 0.'"
$lang['Packages.!error.pricing[][term].in_use'] = 'Term cannot be updated in a pricing that is in use.';
$lang['Packages.!error.pricing[][period].format'] = "Ungültiger Perioden Typ."; //en: "'Invalid period type.'"
$lang['Packages.!error.pricing[][period].in_use'] = 'Period cannot be updated in a pricing that is in use.';
$lang['Packages.!error.pricing[][price].format'] = "Preis muss eine Nummer sein."; //en: "'Price must be a number.'"
$lang['Packages.!error.pricing[][price_renews].format'] = 'Renewal price must be a number.';
$lang['Packages.!error.pricing[][price_renews].valid'] = 'Renewal price cannot be set for a one time period.';
$lang['Packages.!error.pricing[][price_transfer].format'] = 'Transfer price must be a number.';
$lang['Packages.!error.pricing[][setup_fee].format'] = "Einrichtungsgebühr muss eine Zahl sein."; //en: "'Setup fee must be a number.'"
$lang['Packages.!error.pricing[][cancel_fee].format'] = "Die Stornierungsgebühr muss eine Zahl sein."; //en: "'Cancel fee must be a number.'"
$lang['Packages.!error.pricing[][currency].format'] = "Der Währungscode muss 3 Zeichen lang sein."; //en: "'Currency code must be 3 characters.'"
$lang['Packages.!error.pricing[][currency].in_use'] = 'Currency cannot be updated in a pricing that is in use.';
$lang['Packages.!error.pricing[][id].format'] = "Ungültige Paketpreis-ID"; //en: "'Invalid package pricing ID.'"
$lang['Packages.!error.pricing[][id].deletable'] = 'The term could not be removed because it is used by one or more services.';


// Package group errors
$lang['Packages.!error.groups[].exists'] = "Ungültige Gruppen ID des Pakets"; //en: "'Invalid package group ID.'"
$lang['Packages.!error.groups[].valid'] = "Das ausgewählte Gruppenpaket gehört nicht der Firma."; //en: "'The package group selected does not belong to the company given.'"


// Periods singular
$lang['Packages.getPricingPeriods.day'] = "Tag"; //en: "'Day'"
$lang['Packages.getPricingPeriods.week'] = "Woche"; //en: "'Week'"
$lang['Packages.getPricingPeriods.month'] = "Monat"; //en: "'Month'"
$lang['Packages.getPricingPeriods.year'] = "Jahr"; //en: "'Year'"
$lang['Packages.getPricingPeriods.onetime'] = "Einmal"; //en: "'One time'"

// Periods plural
$lang['Packages.getPricingPeriods.day_plural'] = "Tage"; //en: "'Days'"
$lang['Packages.getPricingPeriods.week_plural'] = "Wochen"; //en: "'Weeks'"
$lang['Packages.getPricingPeriods.month_plural'] = "Monate"; //en: "'Months'"
$lang['Packages.getPricingPeriods.year_plural'] = "Jahre"; //en: "'Years'"
$lang['Packages.getPricingPeriods.onetime_plural'] = "Einmalig"; //en: "'One time'"

$lang['Packages.getStatusTypes.active'] = "Aktiv"; //en: "'Active'"
$lang['Packages.getStatusTypes.inactive'] = "Inaktiv"; //en: "'Inactive'"
$lang['Packages.getStatusTypes.restricted'] = "Eingeschränkt"; //en: "'Restricted'"
