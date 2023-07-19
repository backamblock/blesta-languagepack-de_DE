<?php
/**
 * Language definitions for the Admin Company Currency settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyCurrencies.!success.setup_updated'] = "Die Währungseinstellungen wurden erfolgreich aktualisiert!"; //en: "'The Currency Setup settings were successfully updated!'"
$lang['AdminCompanyCurrencies.!success.add_created'] = "Die Währung %1\$s wurde erfolgreich erstellt!"; // %1$s is the currency code"; //en: "'The %1$s currency was successfully created!'; // %1$s is the currency code"
$lang['AdminCompanyCurrencies.!success.edit_updated'] = "Die Währung %1\$s wurde erfolgreich aktualisiert!"; // %1$s is the currency code"; //en: "'The %1$s currency was successfully updated!'; // %1$s is the currency code"
$lang['AdminCompanyCurrencies.!success.delete_deleted'] = "Die Währung %1\$s wurde erfolgreich gelöscht!"; // %1$s is the currency code"; //en: "'The %1$s currency was successfully deleted!'; // %1$s is the currency code"
$lang['AdminCompanyCurrencies.!success.rates_updated'] = "Die Währungskurse wurden erfolgreich aktualisiert."; //en: "'The exchange rates were successfully updated.'"


// Tooltips
$lang['AdminCompanyCurrencies.!tooltip.precision'] = "Die Genauigkeit ist die Anzahl der signifikanten Stellen nach der Dezimalstelle, die die Währung unterstützt."; //en: "'The precision is the number of significant digits after the decimal place that the currency supports.'"

$lang['AdminCompanyCurrencies.!tooltip.default_currency'] = 'The default currency used in the system. Set this to your most preferred currency.';
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = "Aktivieren Sie das Kontrollkästchen, um die Anzeige des Währungscodes neben den angezeigten Preisen zu aktivieren."; //en: "'Check to enable displaying the currency code next to displayed prices'"
$lang['AdminCompanyCurrencies.!tooltip.client_set_currency'] = 'Check to allow clients to choose their default currency from those available in the system.';

$lang['AdminCompanyCurrencies.!tooltip.multi_currency_pricing'] = 'Check to allow packages to be ordered only using the pricing defined for that package. Checking this requires that pricing be defined for each currency you wish to accept for that package. In other words, this prevents currency conversion from taking place.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_auto_update'] = 'Check to allow exchange rates to be automatically updated using one of the available exchange rate processors.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor'] = 'Sets the processor to use to update currency exchange rates. Currencies available vary by processor.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_processor_key'] = 'An API Key is required to retrieve currency exchange rates from the selected processor.';
$lang['AdminCompanyCurrencies.!tooltip.exchange_rates_padding'] = 'Exchange rate values determined by a processor will be increased by the given percentage.';


// Cancel button
$lang['AdminCompanyCurrencies.!cancel.field_cancel'] = "Abbrechen"; //en: "'Cancel'"


// Currency Setup
$lang['AdminCompanyCurrencies.setup.page_title'] = "Einstellungen> Unternehmen> Währungen> Währungseinstellungen"; //en: "'Settings > Company > Currencies > Currency Setup'"
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = "Bei dieser Option muss die Paketpreisfestlegung in der angegebenen Währung vorgenommen werden, damit neue Dienste erstellt werden können. Wenn das Kontrollkästchen deaktiviert ist und die Paketpreisberechnung für die Währung nicht existiert, wird der Preis basierend auf dem Wechselkurs aus der Standardwährung berechnet. Erneuerende Dienste bevorzugen immer die Paketpreise in der gewählten Währung, verwenden jedoch den Wechselkurs aus der Standardwährung, wenn sie nicht für das Paket angegeben sind."; //en: "'This option requires package pricing to be set in the specified currency to be available for creating new services. If it is unchecked and package pricing does not exist for the currency, the price will be calculated based on the exchange rate from the default currency."

Renewing services always prefer package pricing in the chosen currency, but will use the exchange rate from the default currency if not specified for the package.';

$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = "Währungseinstellung"; //en: "'Currency Setup'"

$lang['AdminCompanyCurrencies.setup.heading_general'] = "Allgemein"; //en: "'General'"

$lang['AdminCompanyCurrencies.setup.field.default_currency'] = "Standard Währung"; //en: "'Default Currency'"
$lang['AdminCompanyCurrencies.setup.field.show_currency_code'] = 'Show Currency Code';
$lang['AdminCompanyCurrencies.setup.field.client_set_currency'] = "Erlauben Sie dem Kunden, die Währung einzustellen"; //en: "'Allow Client to Set Currency'"

$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = "Multi-Währung"; //en: "'Multi-Currency'"

$lang['AdminCompanyCurrencies.setup.field.multi_currency_pricing'] = 'Use Package Pricing for New Services Only';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_auto_update'] = 'Automatically Update Exchange Rates';
$lang['AdminCompanyCurrencies.setup.field.last_updated'] = 'Rates Last Updated';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor'] = 'Exchange Rates Processor';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_processor_key'] = 'Exchange Rates Processor API Key';
$lang['AdminCompanyCurrencies.setup.field.exchange_rates_padding'] = 'Pad Exchange Rates';
$lang['AdminCompanyCurrencies.setup.field.setupsubmit'] = "Einstellungen anpassen"; //en: "'Update Settings'"

$lang['AdminCompanyCurrencies.setup.no_exchange_updated'] = "noch nie"; //en: "'Never'"
$lang['AdminCompanyCurrencies.setup.open_parenthesis'] = "("; //en: "'('"
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ")"; //en: "')'"


// Active Currencies
$lang['AdminCompanyCurrencies.active.page_title'] = "Einstellungen > Firma > Währungen > Aktive Währungen"; //en: "'Settings > Company > Currencies > Active Currencies'"
$lang['AdminCompanyCurrencies.active.boxtitle_active'] = "Aktive Währungen"; //en: "'Active Currencies'"

$lang['AdminCompanyCurrencies.active.categorylink_addcurrency'] = "Währung hinzufügen"; //en: "'Add Currency'"
$lang['AdminCompanyCurrencies.active.no_results'] = "Es gibt keine aktiven Währungen."; //en: "'There are no active currencies.'"

$lang['AdminCompanyCurrencies.active.text_currency_code'] = "Währungscode (ISO 4217)"; //en: "'Currency Code (ISO 4217)'"
$lang['AdminCompanyCurrencies.active.text_format'] = "Format"; //en: "'Format'"
$lang['AdminCompanyCurrencies.active.text_precision'] = "Präzision"; //en: "'Precision'"
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = "Währungskurs"; //en: "'Exchange Rate'"
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = "Letzte Aktualisierung"; //en: "'Last Updated'"
$lang['AdminCompanyCurrencies.active.text_options'] = "Optionen"; //en: "'Options'"

$lang['AdminCompanyCurrencies.active.option_edit'] = "Ändern"; //en: "'Edit'"
$lang['AdminCompanyCurrencies.active.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminCompanyCurrencies.active.confirm_delete'] = "Sind Sie sicher, dass Sie diese Währung löschen wollen?"; //en: "'Are you sure you want to delete this currency?'"

$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = "Nie"; //en: "'Never'"


// Add Currency
$lang['AdminCompanyCurrencies.add.page_title'] = "Einstellungen> Unternehmen> Währungen> Währung hinzufügen"; //en: "'Settings > Company > Currencies > Add Currency'"
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = "Währung hinzufügen"; //en: "'Add Currency'"

$lang['AdminCompanyCurrencies.add.field_code'] = "Währungscode (ISO 4217)"; //en: "'Currency Code (ISO 4217)'"
$lang['AdminCompanyCurrencies.add.field_format'] = "Format"; //en: "'Format'"
$lang['AdminCompanyCurrencies.add.field_precision'] = "Präzision"; //en: "'Precision'"
$lang['AdminCompanyCurrencies.add.field_prefix'] = "Prefix Symbol"; //en: "'Prefix Symbol'"
$lang['AdminCompanyCurrencies.add.field_suffix'] = "Suffixsymbol"; //en: "'Suffix Symbol'"
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = "Tauschrate"; //en: "'Exchange Rate'"
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = "Währung erstellen"; //en: "'Create Currency'"

$lang['AdminCompanyCurrencies.add.confirm_add'] = "Möchten Sie diese Währung wirklich erstellen? Der Wechselkurs dieser Währung wird überschrieben, wenn die Wechselkurse automatisch im System aktualisiert werden. Sie können automatische Updates unter [Einstellungen]> [Firma]> [Währungen]> [Währungseinstellungen] deaktivieren."; //en: "Are you sure you want to create this currency? This currency's exchange rate will be overwritten when exchange rates are automatically updated in the system. You may disable automatic updates under [Settings] > [Company] > [Currencies] > [Currency Setup]."


// Edit Currency
$lang['AdminCompanyCurrencies.edit.page_title'] = "Einstellungen > Firma > Währungen > Währung bearbeiten"; //en: "'Settings > Company > Currencies > Edit Currency'"
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = "Währung bearbeiten"; //en: "'Edit Currency'"

$lang['AdminCompanyCurrencies.edit.field_code'] = "Währungscode (ISO 4217)"; //en: "'Currency Code (ISO 4217)'"
$lang['AdminCompanyCurrencies.edit.field_format'] = "Format"; //en: "'Format'"
$lang['AdminCompanyCurrencies.edit.field_precision'] = "Präzision"; //en: "'Precision'"
$lang['AdminCompanyCurrencies.edit.field_prefix'] = "Präfixsymbol"; //en: "'Prefix Symbol'"
$lang['AdminCompanyCurrencies.edit.field_suffix'] = "Suffixsymbol"; //en: "'Suffix Symbol'"
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = "Tauschrate"; //en: "'Exchange Rate'"
$lang['AdminCompanyCurrencies.edit.field_editsubmit'] = "Währung ändern"; //en: "'Edit Currency'"

$lang['AdminCompanyCurrencies.edit.confirm_edit'] = "Sind Sie sicher, dass Sie diese Währung aktualisieren möchten? Der Wechselkurs dieser Währung wird überschrieben, wenn die Wechselkurse automatisch im System aktualisiert werden. Sie können automatische Updates unter [Einstellungen]> [Firma]> [Währungen]> [Währungseinstellungen] deaktivieren."; //en: "Are you sure you want to update this currency? This currency's exchange rate will be overwritten when exchange rates are automatically updated in the system. You may disable automatic updates under [Settings] > [Company] > [Currencies] > [Currency Setup]."
