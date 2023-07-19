<?php
/**
 * Language definitions for the Coupons model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Amount Types
$lang['Coupons.getAmountTypes.amount'] = "Menge"; //en: "'Amount'"
$lang['Coupons.getAmountTypes.percent'] = "Prozent"; //en: "'Percent'"

// Coupon rules
$lang['Coupons.!error.code.empty'] = "Bitte geben Sie einen Gutscheincode ein."; //en: "'Please enter a coupon code.'"
$lang['Coupons.!error.code.length'] = "Gutscheincode darf nicht länger als 64 Zeichen sein."; //en: "'Coupon code length may not exceed 64 characters.'"
$lang['Coupons.!error.code.unique'] = "Der Gutscheincode ist derzeit auf einen anderen Gutschein festgelegt und kann nicht wiederverwendet werden."; //en: "'The coupon code is currently set on a different coupon and may not be reused.'"
$lang['Coupons.!error.company_id.exists'] = "Ungültige Firmen-ID angegeben"; //en: "'Invalid company ID given.'"
$lang['Coupons.!error.package_group_id.length'] = "Package-Gruppen-Nr darf nicht mehr als 10 Zeichen haben."; //en: "'Package group ID may not exceed 10 characters.'"
$lang['Coupons.!error.used_qty.format'] = "Benutze Menge muss eine Zahl sein."; //en: "'Used quantity must be a number.'"
$lang['Coupons.!error.used_qty.length'] = "Die verwendete Mengenlänge darf 10 Zeichen nicht überschreiten."; //en: "'Used quantity length may not exceed 10 characters.'"
$lang['Coupons.!error.max_qty.format'] = "Maximale Anzahl muss eine Nummer sein."; //en: "'Max quantity must be a number.'"
$lang['Coupons.!error.max_qty.length'] = "Die maximale Anzahl darf nicht 10 Zeichen überschreiten."; //en: "'Max quantity length may not exceed 10 characters.'"
$lang['Coupons.!error.max_qty.exceeded'] = "Die verwendete Menge darf die maximale Menge nicht überschreiten."; //en: "'The used quantity may not exceed the max quantity.'"
$lang['Coupons.!error.start_date.format'] = "Ungültiges Startdatumformat"; //en: "'Invalid start date format.'"
$lang['Coupons.!error.end_date.format'] = "Ungültiges Enddatumsformat"; //en: "'Invalid end date format.'"
$lang['Coupons.!error.status.format'] = "Ungültiger Status"; //en: "'Invalid status.'"
$lang['Coupons.!error.recurring.format'] = "Wiederkehrende muss eine Zahl sein."; //en: "'Recurring must be a number.'"
$lang['Coupons.!error.recurring.length'] = "Wiederkehrende Länge darf 1 Zeichen nicht überschreiten."; //en: "'Recurring length may not exceed 1 character.'"
$lang['Coupons.!error.limit_recurring.format'] = "Limit Recurring muss eine Zahl sein."; //en: "'Limit Recurring must be a number.'"
$lang['Coupons.!error.limit_recurring.length'] = "Limit Wiederkehrende Länge darf 1 Zeichen nicht überschreiten."; //en: "'Limit Recurring length may not exceed 1 character.'"
$lang['Coupons.!error.apply_package_options.format'] = "Ob der Gutschein für konfigurierbare Optionen gilt, muss auf 1 oder 0 gesetzt werden."; //en: "'Whether the coupon applies to configurable options must be set to 1 or 0.'"
$lang['Coupons.!error.internal_use_only.format'] = "Ob der Gutschein nur für den internen Gebrauch bestimmt ist, muss auf 1 oder 0 gesetzt werden."; //en: "'Whether the coupon is for internal use only must be set to 1 or 0.'"
$lang['Coupons.!error.coupon_id.exists'] = "Ungültige Gutschein-ID"; //en: "'Invalid coupon ID.'"

// Coupon Package rules
$lang['Coupons.!error.packages[].exists'] = "Mindestens eines der Pakete, denen Sie diesen Gutschein zuweisen, ist ungültig."; //en: "'At least one of the packages to which you are assigning this coupon are invalid.'"

// Coupon Amounts rules
$lang['Coupons.!error.amounts.exists'] = "Nur eine Währung eines jeden Typs kann als Rabatt auf diesen Gutschein gelten."; //en: "'Only one currency of each type may apply as a discount to this coupon.'"
$lang['Coupons.!error.amounts[][currency].length'] = "Der Währungscode muss 3 Zeichen lang sein."; //en: "'The currency code must be 3 characters.'"
$lang['Coupons.!error.amounts[][amount].format'] = "Jeder Rabattwert muss eine Zahl sein"; //en: "'Each discount value must be a number.'"
$lang['Coupons.!error.amounts[][amount].positive'] = 'Each discount value must be positive.';
$lang['Coupons.!error.amounts[][type].format'] = "Ungültiger Betragstyp"; //en: "'Invalid amount type.'"
