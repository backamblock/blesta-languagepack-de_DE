<?php
/**
 * Language definitions for the Admin Tools controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminTools.!success.currency_converted'] = "%1\$s"; //en: "'%1$s"
$lang['AdminTools.!success.collation_updated'] = "Die Sortierung der Datenbank wurde erfolgreich aktualisiert."; //en: "'The database collation has been successfully updated.'"
$lang['AdminTools.!success.max_updated'] = 'The renewal attempt maximum was successfully updated.';
$lang['AdminTools.!success.dequeue'] = 'The service was successfully removed from the renewal queue.';


// Log names
$lang['AdminTools.getlognames.text_module'] = "Module"; //en: "'Module'"
$lang['AdminTools.getlognames.text_messenger'] = 'Messenger';
$lang['AdminTools.getlognames.text_gateway'] = "Tor"; //en: "'Gateway'"
$lang['AdminTools.getlognames.text_email'] = "Email"; //en: "'Email'"
$lang['AdminTools.getlognames.text_users'] = "Benutzeranmeldungen"; //en: "'User Logins'"
$lang['AdminTools.getlognames.text_contacts'] = "Kontakte"; //en: "'Contacts'"
$lang['AdminTools.getlognames.text_client_settings'] = "Kunden-Einstellungen"; //en: "'Client Settings'"
$lang['AdminTools.getlognames.text_accountaccess'] = "Account Zugriff"; //en: "'Account Access'"
$lang['AdminTools.getlognames.text_transactions'] = "Transaktionen"; //en: "'Transactions'"
$lang['AdminTools.getlognames.text_cron'] = "Cron"; //en: "'Cron'"
$lang['AdminTools.getlognames.text_invoice_delivery'] = "Rechnungszustellung"; //en: "'Invoice Delivery'"


// Convert Currency
$lang['AdminTools.convertcurrency.page_title'] = "Tools Währung umrechnen"; //en: "'Tools Convert Currency'"
$lang['AdminTools.convertcurrency.boxtitle_currency'] = "Währung ändern"; //en: "'Convert Currency'"

$lang['AdminTools.convertcurrency.field_amount'] = "Menge"; //en: "'Amount'"
$lang['AdminTools.convertcurrency.field_from'] = "Von"; //en: "'From'"
$lang['AdminTools.convertcurrency.field_to'] = "An"; //en: "'To'"

$lang['AdminTools.convertcurrency.field_currencysubmit'] = "Währung umrechnen."; //en: "'Convert Currency'"


// Utilities
$lang['AdminTools.utilities.page_title'] = 'Tools Utilities';
$lang['AdminTools.utilities.boxtitle_utilities'] = 'Utilities';

$lang['AdminTools.utilities.heading_utility'] = 'Utility';
$lang['AdminTools.utilities.heading_description'] = "Beschreibung"; //en: "'Description'"
$lang['AdminTools.utilities.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminTools.utilities.update_collation'] = 'Update Database Collation';
$lang['AdminTools.utilities.field_update_to_utf8mb4'] = 'Update to utf8mb4';
$lang['AdminTools.utilities.text_update_to_utf8mb4'] = "Aktualisieren Sie den Zeichensatz und die Sortierung Ihrer Datenbank, Tabellen und Spalten auf utf8mb4 und um 4-Byte-Zeichen wie Emojis zu unterstützen. Dies kann einige Minuten dauern."; //en: "'Update the character set and collation of your database, tables, and columns to utf8mb4 to support 4 byte characters such as emojis.  This may take several minutes.'"
$lang['AdminTools.utilities.text_update_to_utf8mb4_requirements'] = 'Please upgrade to MySQL to 5.7+ or MariaDB to 10.2.2+ to support utf8mb4 characters such as emojis.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_supported'] = 'Database already supports utf8mb4.';
$lang['AdminTools.utilities.text_update_to_utf8mb4_config'] = 'To insert and fetch utf8mb4 characters update your blesta.php configuration file to use \'charset_query\' => "SET NAMES \'utf8mb4\'".';


// Logs
$lang['AdminTools.logs.page_title'] = "Logfiles"; //en: "'Tools Logs'"
$lang['AdminTools.logs.boxtitle_logs'] = "Logs"; //en: "'Logs'"



// Logs
$lang['AdminTools.renewals.page_title'] = 'Renewel Queue';
$lang['AdminTools.renewals.boxtitle_renewals'] = 'Service Renewal Queue';

$lang['AdminTools.renewals.heading_client'] = 'Client';
$lang['AdminTools.renewals.heading_service_id'] = 'Service ID';
$lang['AdminTools.renewals.heading_failed_attempts'] = 'Failed Attempts';
$lang['AdminTools.renewals.heading_maximum_attempts'] = 'Maximum Attempts';
$lang['AdminTools.renewals.heading_invoice'] = 'Invoice';
$lang['AdminTools.renewals.heading_options'] = 'Options';
$lang['AdminTools.renewals.confirm_dequeue'] = 'Are you sure you want to remove this service from the renewal queue?';
$lang['AdminTools.renewals.option_view'] = 'View Invoice';
$lang['AdminTools.renewals.option_dequeue'] = 'Dequeue';
$lang['AdminTools.renewals.option_change_max'] = 'Change Maximum';

$lang['AdminTools.renewals.no_results'] = 'There are no services currently queued for renewal.';


$lang['AdminTools.change_max_attempts.boxtitle_change_max_attempts'] = 'Change Maximum Attempts';

$lang['AdminTools.change_max_attempts.field_max_attempts'] = 'Maximum Attempts';
$lang['AdminTools.change_max_attempts.field_cancel'] = 'Cancel';
$lang['AdminTools.change_max_attempts.btn_save'] = 'Save';


// Module logs
$lang['AdminTools.logmodule.page_title'] = "Werkzeuge Protokolle"; //en: "'Tools Logs'"
$lang['AdminTools.logmodule.text_name'] = "Name"; //en: "'Name'"
$lang['AdminTools.logmodule.text_staffname'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminTools.logmodule.text_date'] = "Datum"; //en: "'Date'"

$lang['AdminTools.logmodule.no_results'] = "Es gibt keine Modulprotokolle."; //en: "'There are no module logs.'"


// Module log list
$lang['AdminTools.moduleloglist.text_direction'] = "Ausrichtung"; //en: "'Direction'"
$lang['AdminTools.moduleloglist.text_data'] = "Daten"; //en: "'Data'"
$lang['AdminTools.moduleloglist.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.moduleloglist.text_status'] = "Status"; //en: "'Status'"
$lang['AdminTools.moduleloglist.text_input'] = "Eingabe"; //en: "'Input'"
$lang['AdminTools.moduleloglist.text_output'] = "Ausgabe"; //en: "'Output'"
$lang['AdminTools.moduleloglist.text_error'] = "Error"; //en: "'Error'"
$lang['AdminTools.moduleloglist.text_success'] = "Erfolg"; //en: "'Success'"

$lang['AdminTools.moduleloglist.no_results'] = "Es gibt keine Daten für dieses Modulprotokoll."; //en: "'There is no data for this module log.'"


// Messenger logs
$lang['AdminTools.logmessenger.page_title'] = "Ereignis Log"; //en: "'Tools Logs'"
$lang['AdminTools.logmessenger.text_name'] = 'Name';
$lang['AdminTools.logmessenger.text_recipient'] = 'Recipient';
$lang['AdminTools.logmessenger.text_date'] = "Datum"; //en: "'Date'"

$lang['AdminTools.logmessenger.no_results'] = 'There are no messenger logs.';


// Messenger log list
$lang['AdminTools.messengerloglist.text_direction'] = 'Direction';
$lang['AdminTools.messengerloglist.text_data'] = 'Data';
$lang['AdminTools.messengerloglist.text_date'] = 'Date';
$lang['AdminTools.messengerloglist.text_status'] = 'Status';
$lang['AdminTools.messengerloglist.text_input'] = 'Input';
$lang['AdminTools.messengerloglist.text_output'] = 'Output';
$lang['AdminTools.messengerloglist.text_error'] = "Fehler"; //en: "'Error'"
$lang['AdminTools.messengerloglist.text_success'] = 'Success';

$lang['AdminTools.messengerloglist.no_results'] = 'There is no data for this messenger log.';


// Gateway logs
$lang['AdminTools.loggateway.page_title'] = "Werkzeuge Protokolle"; //en: "'Tools Logs'"
$lang['AdminTools.loggateway.text_name'] = "Name"; //en: "'Name'"
$lang['AdminTools.loggateway.text_staffname'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminTools.loggateway.text_date'] = "Datum"; //en: "'Date'"

$lang['AdminTools.loggateway.no_results'] = "Es gibt keine Gateway-Protokolle."; //en: "'There are no gateway logs.'"


// Gateway log list
$lang['AdminTools.gatewayloglist.text_direction'] = "Richtung"; //en: "'Direction'"
$lang['AdminTools.gatewayloglist.text_data'] = "Daten"; //en: "'Data'"
$lang['AdminTools.gatewayloglist.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.gatewayloglist.text_status'] = "Status"; //en: "'Status'"
$lang['AdminTools.gatewayloglist.text_input'] = "Eingabe"; //en: "'Input'"
$lang['AdminTools.gatewayloglist.text_output'] = "Ausgabe"; //en: "'Output'"
$lang['AdminTools.gatewayloglist.text_error'] = "Fehler"; //en: "'Error'"
$lang['AdminTools.gatewayloglist.text_success'] = "Erfolgreich"; //en: "'Success'"

$lang['AdminTools.gatewayloglist.no_results'] = "Es gibt für diesen Gateway kein Logfile."; //en: "'There is no data for this gateway log.'"


// Email log
$lang['AdminTools.logemail.page_title'] = "Tools Logfiles"; //en: "'Tools Logs'"
$lang['AdminTools.logemail.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.logemail.text_subject'] = "Betreff"; //en: "'Subject'"
$lang['AdminTools.logemail.text_summary'] = "Zusammenfassung"; //en: "'Summary'"
$lang['AdminTools.logemail.text_status'] = "Status"; //en: "'Status'"
$lang['AdminTools.logemail.text_to'] = "An"; //en: "'To'"
$lang['AdminTools.logemail.text_cc'] = "CC"; //en: "'CC'"
$lang['AdminTools.logemail.text_from'] = "Von"; //en: "'From'"
$lang['AdminTools.logemail.text_resend'] = "Erneut senden"; //en: "'Resend'"

$lang['AdminTools.logemail.text_sent'] = "Geschickt"; //en: "'Sent'"
$lang['AdminTools.logemail.text_unsent'] = "Nicht gesendet"; //en: "'Unsent'"

$lang['AdminTools.logemail.no_results'] = "Es gibt keine E-Mail-Logs."; //en: "'There are no email logs.'"


// User Login log
$lang['AdminTools.logusers.page_title'] = "Tools-Logs"; //en: "'Tools Logs'"
$lang['AdminTools.logusers.text_name'] = "Name"; //en: "'Name'"
$lang['AdminTools.logusers.text_username'] = "Benutzername"; //en: "'Username'"
$lang['AdminTools.logusers.text_type'] = "Art"; //en: "'Type'"
$lang['AdminTools.logusers.text_result'] = "Ergebnis"; //en: "'Result'"
$lang['AdminTools.logusers.text_ipaddress'] = "IP Adresse"; //en: "'IP Address'"
$lang['AdminTools.logusers.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.logusers.text_staff'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminTools.logusers.text_client'] = "Klient"; //en: "'Client'"
$lang['AdminTools.logusers.text_contact'] = "Kontakt"; //en: "'Contact'"
$lang['AdminTools.logusers.text_success'] = "Erfolg"; //en: "'Success'"
$lang['AdminTools.logusers.text_failure'] = "Fehler"; //en: "'Failure'"
$lang['AdminTools.logusers.text_location'] = "Ort"; //en: "'Location'"

$lang['AdminTools.logusers.no_results'] = "Es gibt keine Anmeldeprotokolle für Benutzer."; //en: "'There are no user login logs.'"


// Contacts log
$lang['AdminTools.logcontacts.page_title'] = "Tools-Protokolle"; //en: "'Tools Logs'"
$lang['AdminTools.logcontacts.text_name'] = "Name"; //en: "'Name'"
$lang['AdminTools.logcontacts.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.logcontacts.text_field'] = "Feld"; //en: "'Field'"
$lang['AdminTools.logcontacts.text_previous'] = "Vorheriger Wert"; //en: "'Previous Value'"
$lang['AdminTools.logcontacts.text_new'] = "Neuer Wert"; //en: "'New value'"

$lang['AdminTools.logcontacts.no_results'] = "Es gibt keine Kontaktprotokolle."; //en: "'There are no contact logs.'"


// Cleint Settings log
$lang['AdminTools.logclientsettings.page_title'] = 'Tools Logs';
$lang['AdminTools.logclientsettings.text_client'] = 'Client';
$lang['AdminTools.logclientsettings.text_user'] = 'Performed By';
$lang['AdminTools.logclientsettings.text_ip_address'] = "IP Adresse"; //en: "'IP Address'"
$lang['AdminTools.logclientsettings.text_date'] = 'Date';
$lang['AdminTools.logclientsettings.text_field'] = "Feld"; //en: "'Field'"
$lang['AdminTools.logclientsettings.text_previous'] = 'Previous Value';
$lang['AdminTools.logclientsettings.text_new'] = 'New Value';

$lang['AdminTools.logclientsettings.no_results'] = "Es gibt keine Client-Einstellungsprotokolle."; //en: "'There are no client setting logs.'"


// Transactions log
$lang['AdminTools.logtransactions.page_title'] = "Tools Logs"; //en: "'Tools Logs'"
$lang['AdminTools.logtransactions.text_client_name'] = "Kunde"; //en: "'Client'"
$lang['AdminTools.logtransactions.text_staff_name'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminTools.logtransactions.text_date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.logtransactions.text_field'] = "Feld"; //en: "'Field'"
$lang['AdminTools.logtransactions.text_previous'] = "Vorheriger Wert"; //en: "'Previous Value'"
$lang['AdminTools.logtransactions.text_new'] = "Neuer Wert"; //en: "'New value'"

$lang['AdminTools.logtransactions.no_results'] = "Es gibt keine Transaktions Logs."; //en: "'There are no transaction logs.'"


// Account Access log
$lang['AdminTools.logaccountaccess.page_title'] = "Tools Logs"; //en: "'Tools Logs'"
$lang['AdminTools.logaccountaccess.name'] = "Mitarbeiter"; //en: "'Staff'"
$lang['AdminTools.logaccountaccess.type'] = "Art"; //en: "'Type'"
$lang['AdminTools.logaccountaccess.date'] = "Datum"; //en: "'Date'"
$lang['AdminTools.logaccountaccess.text_cc'] = "Kreditkarte"; //en: "'Credit Card'"
$lang['AdminTools.logaccountaccess.text_ach'] = "ACH"; //en: "'ACH'"

$lang['AdminTools.logaccountaccess.no_results'] = "Es gibt keine Kontozugriffsprotokolle."; //en: "'There are no account access logs.'"

$lang['AdminTools.accountaccess.name'] = "Name"; //en: "'Name'"
$lang['AdminTools.accountaccess.type'] = "Art"; //en: "'Type'"
$lang['AdminTools.accountaccess.last4'] = "Letzten 4"; //en: "'Last 4'"
$lang['AdminTools.accountaccess.type_cc'] = "%1\$s - %2\$s"; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)"; //en: "'%1$s - %2$s'; // %1$s is the account type (Credit Card) and %2$s is the type of account (MasterCard, Visa, etc.)"
$lang['AdminTools.accountaccess.type_ach'] = "%1\$s - %2\$s"; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"; //en: "'%1$s - %2$s'; // %1$s is the account type (ACH) and %2$s is the type of account (Checking or Savings)"

$lang['AdminTools.accountaccess.no_results'] = "Für diesen Datensatz sind keine Kontodetails vorhanden."; //en: "'There are no account details for this record.'"


// Cron log
$lang['AdminTools.logcron.page_title'] = "Tools-Protokolle"; //en: "'Tools Logs'"
$lang['AdminTools.logcron.task'] = "Aufgabe"; //en: "'Task'"
$lang['AdminTools.logcron.start_date'] = "Anfangsdatum"; //en: "'Start Date'"
$lang['AdminTools.logcron.end_date'] = "Enddatum"; //en: "'End Date'"
$lang['AdminTools.logcron.output'] = "Ausgabe"; //en: "'Output'"
$lang['AdminTools.logcron.no_output'] = "Für diesen Log gibt es keinen Output."; //en: "'No output recorded for this log.'"
$lang['AdminTools.logcron.no_results'] = "Keine cron-Protokolle vorhanden."; //en: "'There are no cron logs.'"


// Invoice Delivery logs
$lang['AdminTools.loginvoicedelivery.page_title'] = "Tools-Protokolle"; //en: "'Tools Logs'"

$lang['AdminTools.loginvoicedelivery.invoice_id_code'] = "Rechnung #"; //en: "'Invoice #'"
$lang['AdminTools.loginvoicedelivery.first_name'] = "Kunde"; //en: "'Client'"
$lang['AdminTools.loginvoicedelivery.method'] = "Lieferungsmethode"; //en: "'Delivery Method'"
$lang['AdminTools.loginvoicedelivery.date_sent'] = "Sende Datum"; //en: "'Date Sent'"
$lang['AdminTools.loginvoicedelivery.no_results'] = "Es gibt keine Rechnung Lieferprotokolle."; //en: "'There are no invoice delivery logs.'"
