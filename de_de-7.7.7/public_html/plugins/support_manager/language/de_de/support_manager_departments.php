<?php
/**
 * actually GOOD de_de Language definitions. Translated by backamblock on Github
 * 
 * @package blesta
 * @version 5.5.2
 * @copyright Copyright (c) 2023, backamblock on Github
 * @license https://github.com/backamblock/ backamblock on Github - FREE for everybody
 * @link https://github.com/backamblock/ backamblock on Github
 */

$lang['SupportManagerDepartments.!error.company_id.exists'] = "Ungültige Firmen-ID";
$lang['SupportManagerDepartments.!error.name.empty'] = "Bitte geben Sie einen Namen für diese Abteilung ein.";
$lang['SupportManagerDepartments.!error.description.empty'] = "Bitte geben Sie eine Beschreibung ein.";
$lang['SupportManagerDepartments.!error.email.format'] = "Bitte geben Sie eine gültige E-Mail-Adresse ein.";
$lang['SupportManagerDepartments.!error.method.format'] = "

Ungültiger Methodentyp
";
$lang['SupportManagerDepartments.!error.method.imap'] = "Die PHP IMAP Erweiterung wird benötigt um Nachrichten per POP3 oder IMAP herunterzuladen.";
$lang['SupportManagerDepartments.!error.method.mailparse'] = "Die PHP Erweiterung PECL Mailparse wird benötigt um E-Mail Tickets zu parsen.";
$lang['SupportManagerDepartments.!error.default_priority.format'] = "Ungültiger Standardprioritätstyp";
$lang['SupportManagerDepartments.!error.host.format'] = "

Bitte geben Sie einen gültigen Hostnamen ein.
";
$lang['SupportManagerDepartments.!error.host.length'] = "Der Hostname darf nicht länger als 128 Zeichen sein.";
$lang['SupportManagerDepartments.!error.user.format'] = "Bitte geben Sie einen Benutzernamen ein.";
$lang['SupportManagerDepartments.!error.user.length'] = "

Der Benutzername darf nicht länger als 64 Zeichen sein.
";
$lang['SupportManagerDepartments.!error.password.format'] = "Bitte geben Sie ein Passwort ein.";
$lang['SupportManagerDepartments.!error.port.format'] = "Bitte geben Sie eine Portnummer ein.";
$lang['SupportManagerDepartments.!error.port.length'] = "

Der Port darf nicht länger als 6 Ziffern sein.
";
$lang['SupportManagerDepartments.!error.service.format'] = "Bitte wählen Sie einen gültigen Service-Typ.";
$lang['SupportManagerDepartments.!error.security.format'] = "Bitte wählen Sie einen gültigen Sicherheitstyp.";
$lang['SupportManagerDepartments.!error.mark_messages.format'] = "

Bitte wählen Sie einen gültigen Nachrichtentyp aus, um Nachrichten zu markieren.
";
$lang['SupportManagerDepartments.!error.mark_messages.valid'] = "

Nachrichten, die POP3 verwenden, dürfen nur als gelöscht markiert werden.
";
$lang['SupportManagerDepartments.!error.status.format'] = "Ungültiger Statustyp";
$lang['SupportManagerDepartments.!error.department_id.exists'] = "Ungültige ID der Abteilung.";
$lang['SupportManagerDepartments.!error.department_id.has_tickets'] = "Die Abteilung konnte nicht gelöscht werden, da diesem derzeit Tickets zugeordnet wurden die noch nicht abgeschlossen sind.";
$lang['SupportManagerDepartments.methods.none'] = "Keiner";
$lang['SupportManagerDepartments.methods.pipe'] = "Piping";
$lang['SupportManagerDepartments.methods.pop3'] = "POP3";
$lang['SupportManagerDepartments.methods.imap'] = "IMAP";
$lang['SupportManagerDepartments.statuses.hidden'] = "Versteckt";
$lang['SupportManagerDepartments.statuses.visible'] = "Sichtbar";
$lang['SupportManagerDepartments.priorities.emergency'] = "Notfall";
$lang['SupportManagerDepartments.priorities.critical'] = "Kritisch";
$lang['SupportManagerDepartments.priorities.high'] = "Hoch";
$lang['SupportManagerDepartments.priorities.medium'] = "Mittel";
$lang['SupportManagerDepartments.priorities.low'] = "Niedrig";
$lang['SupportManagerDepartments.security_types.none'] = "Keiner";
$lang['SupportManagerDepartments.security_types.ssl'] = "SSL";
$lang['SupportManagerDepartments.security_types.tls'] = "TLS";
$lang['SupportManagerDepartments.message_types.read'] = "Lesen";
$lang['SupportManagerDepartments.message_types.deleted'] = "Gelöscht";
$lang['SupportManagerDepartments.!error.clients_only.format'] = "Ob Kunden das Öffnen oder Beantworten von Tickets ermöglichen soll, muss auf 0 oder 1 gesetzt werden.";
$lang['SupportManagerDepartments.!error.override_from_email.format'] = "Ob die E-Mail-Adresse dieser Abteilung als Absenderadresse in E-Mail-Vorlagen verwendet werden darf, muss auf 0 oder 1 gesetzt werden.";
$lang['SupportManagerDepartments.!error.close_ticket_interval.format'] = "

Bitte wählen Sie ein gültiges Close-Ticket-Intervall.
";
$lang['SupportManagerDepartments.!error.response_id.format'] = "Bitte wählen Sie eine gültige Antwort zum automatischen Schließen aus.";
$lang['SupportManagerDepartments.ticket_intervals.day'] = "1 Tag";
$lang['SupportManagerDepartments.ticket_intervals.days'] = "%1\$s Tage"; // %1$s is the number of days
$lang['SupportManagerDepartments.!error.send_ticket_received.format'] = "

Ob Ticketbestätigungs-E-Mails für diese Abteilung gesendet werden sollen, muss auf 0 oder 1 gesetzt werden.
";
$lang['SupportManagerDepartments.!error.delete_ticket_interval.format'] = "Bitte wählen Sie ein gültiges Löschticket-Intervall aus.";
$lang['SupportManagerDepartments.!error.reminder_ticket_interval.format'] = "Bitte wählen Sie ein gültiges Erinnerungsticket-Intervall aus.";
$lang['SupportManagerDepartments.!error.reminder_ticket_status.format'] = "Bitte wählen Sie einen gültigen Ticket-Erinnerungsstatus.";
$lang['SupportManagerDepartments.!error.attachment_types.length'] = "Die Liste der Anlagentypen darf maximal 255 Zeichen lang sein.";
$lang['SupportManagerDepartments.reminder_intervals.hours'] = "%1\$s Stunden"; // %1$s is the number of hours
$lang['SupportManagerDepartments.reminder_intervals.minutes'] = "%1\$s Minuten"; // %1$s is the number of minutes
$lang['SupportManagerDepartments.field_types.password'] = "Passwort";
$lang['SupportManagerDepartments.visibility_options.client'] = "Kunde und Mitarbeiter";
?>