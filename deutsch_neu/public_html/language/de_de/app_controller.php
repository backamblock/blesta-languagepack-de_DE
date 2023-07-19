<?php
/**
 * Language definitions for the AppController (essentially global UI definitions)
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Language direction (only ltr or rtl)
$lang['AppController.lang.dir'] = "ltr"; //en: "'ltr'"

// Errors
$lang['AppController.!error.unauthorized_access'] = "Sie sind nicht dazu berechtigt auf diese Ressource zuzugreifen"; //en: "'You are not authorized to access that resource'"
$lang['AppController.!error.invalid_csrf'] = "Das Formular-Token ist ungültig."; //en: "'The form token is invalid.'"

// Success
$lang['AppController.!success.license_updated'] = "Ihre Lizenz wurde erfolgreich reaktiviert. Bitte einloggen."; //en: "'Your license successfully revalidated. Please log in.'"
$lang['AppController.!success.license_key_updated'] = "Der Lizenzkey wurde erfolgreich geupdated, Sie können sich jetzt einloggen. "; //en: "'Your license key was successfully updated. Please log in.'"

// Options
$lang['AppController.select.please'] = "-- Bitte auswählen --"; //en: "'-- Please Select --'"

// Modal boxes
$lang['AppController.modal.text_close'] = "Schließen"; //en: "'Close'"
$lang['AppController.modal.text_confirm'] = "Bitte bestätigen"; //en: "'Please Confirm'"

// Tooltip text
$lang['AppController.tooltip.text'] = "?"; //en: "'?'"


// Message box close text
$lang['AppController.message.close'] = "x"; //en: "'×'"

// Structure
$lang['AppController.structure.text_myinfo'] = "Meine Information"; //en: "'My Info'"
$lang['AppController.structure.text_settings'] = "Einstellungen"; //en: "'Settings'"
$lang['AppController.structure.text_logout'] = "Ausloggen"; //en: "'Log Out'"
$lang['AppController.structure.text_maintenance'] = "Wartungsmodus ist derzeit aktiv, Kunden können sich daher nicht einloggen. Klicken Sie hier um den Wartungsmodus auszuschalten."; //en: "'Maintenance Mode is currently enabled and clients may not login. Click here to change.'"
$lang['AppController.structure.text_search_placeholder'] = "%1\$s ..."; // %1$s is the search type"; //en: "'%1$s...'; // %1$s is the search type"
$lang['AppController.client_structure.staff_as_client_note'] = "Rückkehr zum Mitarbeiterportal"; //en: "'Return to Staff Portal'"
$lang['AppController.client_structure.default_title'] = "Mein Account"; //en: "'My Account'"
$lang['AppController.client_structure.text_return_to_portal'] = "Zum Portal zurückkehren"; //en: "'Return to Portal'"
$lang['AppController.client_structure.text_logout'] = "Ausloggen"; //en: "'Log Out'"
$lang['AppController.client_structure.text_login'] = "Einloggen"; //en: "'Log In'"
$lang['AppController.client_structure.text_update_account'] = "Konto verwalten"; //en: "'Manage Account'"
$lang['AppController.client_structure.text_emails'] = 'Email History';
$lang['AppController.client_structure.text_accounts'] = 'Payment Accounts';
$lang['AppController.client_structure.text_contacts'] = 'Contacts';


// Dates
$lang['AppController.dates.day_sun'] = "Sonntag"; //en: "'Sunday'"
$lang['AppController.dates.day_mon'] = "Montag"; //en: "'Monday'"
$lang['AppController.dates.day_tue'] = "Dienstag"; //en: "'Tuesday'"
$lang['AppController.dates.day_wed'] = "Mittwoch"; //en: "'Wednesday'"
$lang['AppController.dates.day_thu'] = "Donnerstag"; //en: "'Thursday'"
$lang['AppController.dates.day_fri'] = "Freitag"; //en: "'Friday'"
$lang['AppController.dates.day_sat'] = "Samstag"; //en: "'Saturday'"

$lang['AppController.dates.dayabbr_sun'] = "Sonne"; //en: "'Sun'"
$lang['AppController.dates.dayabbr_mon'] = "Mo"; //en: "'Mon'"
$lang['AppController.dates.dayabbr_tue'] = "Di"; //en: "'Tue'"
$lang['AppController.dates.dayabbr_wed'] = "Heiraten"; //en: "'Wed'"
$lang['AppController.dates.dayabbr_thur'] = "Do"; //en: "'Thu'"
$lang['AppController.dates.dayabbr_fri'] = "Fr"; //en: "'Fri'"
$lang['AppController.dates.dayabbr_sat'] = "Sa."; //en: "'Sat'"

$lang['AppController.dates.month_jan'] = "Januar"; //en: "'January'"
$lang['AppController.dates.month_feb'] = "Februar"; //en: "'February'"
$lang['AppController.dates.month_mar'] = "März"; //en: "'March'"
$lang['AppController.dates.month_apr'] = "April"; //en: "'April'"
$lang['AppController.dates.month_may'] = "Mai"; //en: "'May'"
$lang['AppController.dates.month_jun'] = "Juni"; //en: "'June'"
$lang['AppController.dates.month_jul'] = "Juli"; //en: "'July'"
$lang['AppController.dates.month_aug'] = "August"; //en: "'August'"
$lang['AppController.dates.month_sep'] = "September"; //en: "'September'"
$lang['AppController.dates.month_oct'] = "Oktober"; //en: "'October'"
$lang['AppController.dates.month_nov'] = "November"; //en: "'November'"
$lang['AppController.dates.month_dec'] = "Dezember"; //en: "'December'"

$lang['AppController.dates.monthabbr_jan'] = "Jan"; //en: "'Jan'"
$lang['AppController.dates.monthabbr_feb'] = "Feb"; //en: "'Feb'"
$lang['AppController.dates.monthabbr_mar'] = "Mrz"; //en: "'Mar'"
$lang['AppController.dates.monthabbr_apr'] = "Apr"; //en: "'Apr'"
$lang['AppController.dates.monthabbr_may'] = "Mai"; //en: "'May'"
$lang['AppController.dates.monthabbr_jun'] = "Jan"; //en: "'Jun'"
$lang['AppController.dates.monthabbr_jul'] = "Juli"; //en: "'Jul'"
$lang['AppController.dates.monthabbr_aug'] = "Aug"; //en: "'Aug'"
$lang['AppController.dates.monthabbr_sep'] = "September"; //en: "'Sep'"
$lang['AppController.dates.monthabbr_oct'] = "Okt."; //en: "'Oct'"
$lang['AppController.dates.monthabbr_nov'] = "Nov"; //en: "'Nov'"
$lang['AppController.dates.monthabbr_dec'] = "Dez"; //en: "'Dec'"


// Graphs
$lang['AppController.graphs.control_label.stacked'] = "Gestapelt"; //en: "'Stacked'"
$lang['AppController.graphs.control_label.stream'] = "Strom"; //en: "'Stream'"
$lang['AppController.graphs.control_label.expanded'] = "Erweitert"; //en: "'Expanded'"
$lang['AppController.graphs.control_label.grouped'] = "Gruppiert"; //en: "'Grouped'"

$lang['AppController.graphs.label.total'] = "Total"; //en: "'Total'"


// Screen reader
$lang['AppController.sreader.dropdown'] = "Dropdown umschalten"; //en: "'Toggle Dropdown'"
$lang['AppController.sreader.navigation'] = "Navigation umschalten"; //en: "'Toggle Navigation'"
