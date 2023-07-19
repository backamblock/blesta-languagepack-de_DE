<?php
/**
 * Language definitions for the Pricings model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Pricing errors
$lang['Pricings.!error.term.format'] = "Begriff muss eine Zahl sein."; //en: "'Term must be a number.'"
$lang['Pricings.!error.term.length'] = "Dauer darf nicht 5 Zeichen überschreiten."; //en: "'Term length may not exceed 5 characters.'"
$lang['Pricings.!error.term.valid'] = "Die Laufzeit muss größer als 0 sein."; //en: "'The term must be greater than 0.'"
$lang['Pricings.!error.period.format'] = "Ungültiger Periodentyp"; //en: "'Invalid period type.'"
$lang['Pricings.!error.price.format'] = "Der Preis muss eine Nummer sein."; //en: "'Price must be a number.'"
$lang['Pricings.!error.price_renews.format'] = "Der Verlängerungspreis muss eine Zahl sein."; //en: "'Renewal price must be a number.'"
$lang['Pricings.!error.price_renews.valid'] = "Der Verlängerungspreis kann nicht für einen bestimmten Zeitraum festgelegt werden."; //en: "'Renewal price cannot be set for a one time period.'"
$lang['Pricings.!error.price_transfer.format'] = 'Renewal price must be a number.';
$lang['Pricings.!error.setup_fee.format'] = "Einrichtungsgebühr muss eine Zahl sein."; //en: "'Setup fee must be a number.'"
$lang['Pricings.!error.cancel_fee.format'] = "Die Stornierungsgebühr muss eine Zahl sein."; //en: "'Cancel fee must be a number.'"
$lang['Pricings.!error.currency.format'] = "Der Währungscode muss aus 3 Zeichen bestehen."; //en: "'Currency code must be 3 characters.'"
$lang['Pricings.!error.term.in_use'] = 'Term cannot be updated in a pricing that is in use.';
$lang['Pricings.!error.period.in_use'] = 'Period cannot be updated in a pricing that is in use.';
$lang['Pricings.!error.currency.in_use'] = 'Currency cannot be updated in a pricing that is in use.';

// Periods singular
$lang['Pricings.getPeriods.day'] = "Tag"; //en: "'Day'"
$lang['Pricings.getPeriods.week'] = "Woche"; //en: "'Week'"
$lang['Pricings.getPeriods.month'] = "Monat"; //en: "'Month'"
$lang['Pricings.getPeriods.year'] = "Jahr"; //en: "'Year'"
$lang['Pricings.getPeriods.onetime'] = "Einmal"; //en: "'One time'"

// Periods plural
$lang['Pricings.getPeriods.day_plural'] = "Tage"; //en: "'Days'"
$lang['Pricings.getPeriods.week_plural'] = "Wochen"; //en: "'Weeks'"
$lang['Pricings.getPeriods.month_plural'] = "Monate"; //en: "'Months'"
$lang['Pricings.getPeriods.year_plural'] = "Jahre"; //en: "'Years'"
$lang['Pricings.getPeriods.onetime_plural'] = "Einmal"; //en: "'One time'"
