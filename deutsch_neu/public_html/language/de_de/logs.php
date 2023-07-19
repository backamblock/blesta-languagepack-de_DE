<?php
/**
 * Language definitions for the Logs model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Common log errors
$lang['Logs.!error.deletelog_datetime'] = "Ungültiges Datumsformat."; //en: "'Invalid date format.'"


// Common Email/User log errors
$lang['Logs.!error.company_id.exists'] = "Ungültige Firmen-ID"; //en: "'Invalid company ID.'"

// Email log errors
$lang['Logs.!error.to_address.empty'] = "Eine Empfängeradresse fehlt."; //en: "'Missing a to address.'"
$lang['Logs.!error.from_address.empty'] = "Eine Adresse fehlt."; //en: "'Missing a from address.'"
$lang['Logs.!error.from_name.empty'] = "Absendername fehlt"; //en: "'Missing a from name.'"
$lang['Logs.!error.subject.empty'] = "Betreff fehlt"; //en: "'Missing a subject.'"
$lang['Logs.!error.sent.format'] = "Gesendet muss eine Nummer sein."; //en: "'Sent must be a number.'"
$lang['Logs.!error.sent.length'] = "Senden-Länge darf 1 Zeichen nicht überschreiten."; //en: "'Sent length may not exceed 1 character.'"

// Gateway and Module log errors
$lang['Logs.!error.staff_id.exists'] = "Ungültige Mitarbeiter-ID."; //en: "'Invalid staff ID.'"
$lang['Logs.!error.module_id.exists'] = "Ungültige Modul-ID"; //en: "'Invalid module ID.'"
$lang['Logs.!error.gateway_id.exists'] = "Ungültige Gateway ID."; //en: "'Invalid gateway ID.'"
$lang['Logs.!error.direction.format'] = "Ungültiger Richtungstyp"; //en: "'Invalid direction type.'"
$lang['Logs.!error.url.empty'] = "Fehlende URL"; //en: "'Missing URL.'"
$lang['Logs.!error.status.format'] = "Ungültiger Statustyp"; //en: "'Invalid status type.'"
$lang['Logs.!error.group.empty'] = "Gruppe fehlt."; //en: "'Missing group.'"
$lang['Logs.!error.group.maxlength'] = "Die Gruppe darf nicht länger als 8 Zeichen sein."; //en: "'Group length may not exceed 8 characters.'"

// User log errors
$lang['Logs.!error.user_id.empty'] = "Fehlende Benutzer-Nr."; //en: "'Missing user ID.'"
$lang['Logs.!error.ip_address.empty'] = "Fehlende IP-Adresse"; //en: "'Missing IP address.'"
$lang['Logs.!error.ip_address.length'] = "Die IP-Adresse darf maximal 39 Zeichen lang sein."; //en: "'IP address length may not exceed 39 characters.'"
$lang['Logs.!error.user_log_exists.empty'] = "Der Benutzer existiert unter der angegebenen IP-Adresse nicht."; //en: "'The user at the given IP address does not exist.'"
$lang['Logs.!error.result.format'] = "Das Login-Ergebnis muss entweder 'Erfolg' oder 'Fehler' sein."; //en: "Login result must be either 'success' or 'failure'."

// Message log errors
$lang['Logs.!error.to_user_id.exists'] = "Ungültige User ID"; //en: "'Invalid user ID.'"
$lang['Logs.!error.messenger_id.exists'] = 'Invalid messenger ID.';
$lang['Logs.!error.success.format'] = "Ungültiger Erfolgswert."; //en: "'Invalid success value.'"

// Contact log errors
$lang['Logs.!error.contact_id.empty'] = "Fehlende Kontakt-ID"; //en: "'Missing contact ID.'"

// Client setting log errors
$lang['Logs.!error.client_id.exists'] = "Ungültige Kunden-ID"; //en: "'Invalid client ID.'"
$lang['Logs.!error.fields.empty'] = "Fehlende loggierbare Felder."; //en: "'Missing loggable fields.'"
$lang['Logs.!error.by_user_id.exists'] = "Ungültig nach Benutzer-ID"; //en: "'Invalid by user ID.'"
$lang['Logs.!error.ip_address.length'] = 'The IP address may not exceed 39 characters in length.';
$lang['Logs.!error.date_changed.valid'] = "Ungültiges Datum geändert"; //en: "'Invalid date changed.'"

// Account Access log errors
$lang['Logs.!error.staff_id.empty'] = "Fehlende Mitarbeiter-ID"; //en: "'Missing staff ID.'"
$lang['Logs.!error.type.format'] = "Ungültiger Typ"; //en: "'Invalid type.'"
$lang['Logs.!error.account_type.format'] = "Ungültiger Kontotyp"; //en: "'Invalid account type.'"
$lang['Logs.!error.account_id.empty'] = "Fehlende Konto-ID."; //en: "'Missing account ID.'"
$lang['Logs.!error.first_name.empty'] = "Der Vorname darf nicht leer sein."; //en: "'First name must not be empty.'"
$lang['Logs.!error.last_name.empty'] = "Nachname darf nicht leer sein."; //en: "'Last name must not be empty.'"

// Cron log
$lang['Logs.!error.run_id.exists'] = "Ungültige Cron Task ID."; //en: "'Invalid cron task ID.'"
$lang['Logs.!error.event.maxlength'] = "Die Ereignislänge darf 32 Zeichen nicht überschreiten."; //en: "'Event length may not exceed 32 characters.'"
$lang['Logs.!error.group.unique'] = "Die Cron-Task-ID und die Gruppe wurden bereits vergeben."; //en: "'The cron task ID and group have already been taken.'"
$lang['Logs.!error.group.betweenlength'] = "Gruppe muss zwischen 1 und 32 Zeichen lang sein."; //en: "'Group must be between 1 and 32 characters in length.'"
$lang['Logs.!error.start_date.format'] = "Ungültiges Startdatumformat"; //en: "'Invalid start date format.'"
$lang['Logs.!error.end_date.format'] = "Ungültige Enddatumformat."; //en: "'Invalid end date format.'"
