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

$lang['AdminCompanyCurrencies.!success.setup_updated'] = "The Currency Setup settings were successfully updated!";
$lang['AdminCompanyCurrencies.!success.add_created'] = "The %1\$s currency was successfully created!"; // %1$s is the currency code
$lang['AdminCompanyCurrencies.!success.edit_updated'] = "The %1\$s currency was successfully updated!"; // %1$s is the currency code
$lang['AdminCompanyCurrencies.!success.rates_updated'] = "The exchange rates were successfully updated.";
$lang['AdminCompanyCurrencies.setup.tooltip_currency_pricing'] = "This option requires package pricing to be set in the specified currency to be available for creating new services. If it is unchecked and package pricing does not exist for the currency, the price will be calculated based on the exchange rate from the default currency. Renewing services always prefer package pricing in the chosen currency, but will use the exchange rate from the default currency if not specified for the package.";
$lang['AdminCompanyCurrencies.setup.boxtitle_setup'] = "Currency Setup";
$lang['AdminCompanyCurrencies.setup.heading_general'] = "General";
$lang['AdminCompanyCurrencies.setup.heading_multicurrency'] = "Multi-Currency";
$lang['AdminCompanyCurrencies.active.no_results'] = "There are no active currencies.";
$lang['AdminCompanyCurrencies.active.text_currency_code'] = "Currency Code (ISO 4217)";
$lang['AdminCompanyCurrencies.active.text_format'] = "Format";
$lang['AdminCompanyCurrencies.active.text_exchange_rate'] = "Exchange Rate";
$lang['AdminCompanyCurrencies.active.text_options'] = "Options";
$lang['AdminCompanyCurrencies.active.option_edit'] = "Edit";
$lang['AdminCompanyCurrencies.active.confirm_delete'] = "Are you sure you want to delete this currency?";
$lang['AdminCompanyCurrencies.add.boxtitle_add'] = "Add Currency";
$lang['AdminCompanyCurrencies.add.field_code'] = "Currency Code (ISO 4217)";
$lang['AdminCompanyCurrencies.add.field_format'] = "Format";
$lang['AdminCompanyCurrencies.add.field_prefix'] = "Prefix Symbol";
$lang['AdminCompanyCurrencies.add.field_suffix'] = "Suffix Symbol";
$lang['AdminCompanyCurrencies.add.field_exchange_rate'] = "Exchange Rate";
$lang['AdminCompanyCurrencies.add.field_addsubmit'] = "Create Currency";
$lang['AdminCompanyCurrencies.edit.boxtitle_edit'] = "Edit Currency";
$lang['AdminCompanyCurrencies.edit.field_code'] = "Currency Code (ISO 4217)";
$lang['AdminCompanyCurrencies.edit.field_format'] = "Format";
$lang['AdminCompanyCurrencies.edit.field_prefix'] = "Prefix Symbol";
$lang['AdminCompanyCurrencies.edit.field_exchange_rate'] = "Exchange Rate";
$lang['AdminCompanyCurrencies.setup.page_title'] = "Settings > Company > Currencies > Currency Setup";
$lang['AdminCompanyCurrencies.setup.closed_parenthesis'] = ")";
$lang['AdminCompanyCurrencies.active.page_title'] = "Settings > Company > Currencies > Active Currencies";
$lang['AdminCompanyCurrencies.active.text_exchange_updated'] = "Last Updated";
$lang['AdminCompanyCurrencies.active.no_exchange_updated'] = "Never";
$lang['AdminCompanyCurrencies.add.page_title'] = "Settings > Company > Currencies > Add Currency";
$lang['AdminCompanyCurrencies.add.confirm_add'] = "Are you sure you want to create this currency? This currency's exchange rate will be overwritten when exchange rates are automatically updated in the system. You may disable automatic updates under [Settings] > [Company] > [Currencies] > [Currency Setup].";
$lang['AdminCompanyCurrencies.active.text_precision'] = "Precision";
$lang['AdminCompanyCurrencies.add.field_precision'] = "Precision";
$lang['AdminCompanyCurrencies.!tooltip.show_currency_code'] = "Check to enable displaying the currency code next to the displayed prices";
?>