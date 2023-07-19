<?php
/**
 * Language definitions for the Cron Tasks model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['CronTasks.!error.key.unique'] = "Der bereitgestellte Crontask-Schlüssel ist bereits vergeben."; //en: "'The cron task key provided is already taken.'"
$lang['CronTasks.!error.key.length'] = "Die Schlüssellänge für Cron-Aufgaben darf 64 Zeichen nicht überschreiten."; //en: "'The cron task key length may not exceed 64 characters.'"
$lang['CronTasks.!error.task_type.format'] = "Ungültiger Aufgabentyp. Muss ein Modul, ein Plugin oder ein System sein."; //en: "'Invalid task type. Must be module, plugin, or system.'"
$lang['CronTasks.!error.dir.length'] = "Die Verzeichnislänge darf 64 Zeichen nicht überschreiten."; //en: "'The directory length may not exceed 64 characters.'"
$lang['CronTasks.!error.run_id.exists'] = "Ungültige Cronjob-ID"; //en: "'Invalid cron task run ID.'"
$lang['CronTasks.!error.id.exists'] = "Ungültige Crontask-ID"; //en: "'Invalid cron task ID.'"
$lang['CronTasks.!error.name.empty'] = "Bitte geben Sie einen Namen ein."; //en: "'Please enter a name.'"
$lang['CronTasks.!error.is_lang.format'] = "is_lang muss eine Zahl sein."; //en: "'is_lang must be a number.'"
$lang['CronTasks.!error.is_lang.length'] = "is_lang darf nicht länger als 1 Zeichen sein."; //en: "'is_lang length may not exceed 1 character.'"
$lang['CronTasks.!error.enabled.format'] = "Das Feld aktiviert muss eine Nummer sein"; //en: "'enabled must be a number.'"
$lang['CronTasks.!error.enabled.length'] = "aktivierte Länge darf 1 Zeichen nicht überschreiten."; //en: "'enabled length may not exceed 1 character.'"
$lang['CronTasks.!error.interval.format'] = "Intervall muss eine Zahl sein, welche die Minuten angibt."; //en: "'Interval must be a number, representing minutes.'"
$lang['CronTasks.!error.time.format'] = "Die Zeit wurde in einem ungültigen Format angegeben."; //en: "'Time is in an invalid format.'"
$lang['CronTasks.!error.type.format'] = "Ungültiger Cron-Aufgabentyp. Muss entweder Zeit oder Intervall sein."; //en: "'Invalid cron task type. Must be either time or interval.'"


// Cron Task types
$lang['CronTasks.task_type.system'] = "System"; //en: "'System'"
$lang['CronTasks.task_type.plugin'] = "Plugin"; //en: "'Plugin'"
$lang['CronTasks.task_type.module'] = "Modul"; //en: "'Module'"


// Cron Task names and descriptions
$lang['CronTasks.crontask.name.create_invoice'] = "Rechnung erstellen"; //en: "'Create Invoice'"
$lang['CronTasks.crontask.description.create_invoice'] = "Wiederkehrende Rechnungen und Erneuerungsleistungen werden über diese Aufgabe in Rechnung gestellt, die einmal täglich zum angegebenen Zeitpunkt läuft."; //en: "'Recurring invoices and renewing services are invoiced through this task, which runs once daily at the time specified.'"

$lang['CronTasks.crontask.name.apply_invoice_late_fees'] = 'Apply Invoice Late Fees';
$lang['CronTasks.crontask.description.apply_invoice_late_fees'] = 'Applies late fees to open invoices a configured number of days after due.';

$lang['CronTasks.crontask.name.autodebit'] = "Auto Debit"; //en: "'Auto Debit'"
$lang['CronTasks.crontask.description.autodebit'] = "Für die automatische Abbuchung ausgewählte Zahlungskonten werden täglich ausgeführt, um offene Rechnungen zum angegebenen Zeitpunkt abzubuchen."; //en: "'Payment accounts selected for auto debit will be run to pay off open invoices daily at the time specified.'"

$lang['CronTasks.crontask.name.payment_reminders'] = "Zahlungserinnerungen"; //en: "'Payment Reminders'"
$lang['CronTasks.crontask.description.payment_reminders'] = "Zahlungserinnerungen und verspätete Benachrichtigungen werden täglich zum angegebenen Zeitpunkt gesendet."; //en: "'Payment reminders and late notices are sent daily at the time specified.'"

$lang['CronTasks.crontask.name.apply_payments'] = "Zahlungen auf offene Rechnungen anwenden"; //en: "'Apply Payments to Open Invoices'"
$lang['CronTasks.crontask.description.apply_payments'] = "Lose Gutschriften werden angewendet, um Rechnungen automatisch in dem ausgewählten Intervall zu öffnen."; //en: "'Loose credits are applied to open invoices automatically at the interval selected.'"

$lang['CronTasks.crontask.name.process_service_changes'] = "Prozessdienständerungen"; //en: "'Process Service Changes'"
$lang['CronTasks.crontask.description.process_service_changes'] = "Bezahlte Warteschlangen-Serviceänderungen (z. B. Upgrades) werden in dem ausgewählten Intervall verarbeitet."; //en: "'Paid queued service changes (e.g. upgrades) are processed at the interval selected.'"

$lang['CronTasks.crontask.name.process_renewing_services'] = "Bearbeiten Sie die Serviceverlängerungen"; //en: "'Process Service Renewals'"
$lang['CronTasks.crontask.description.process_renewing_services'] = "Das Erneuern von Diensten, die an Module angeschlossen sind, wird in dem ausgewählten Intervall erneuert."; //en: "'Renewing services that are attached to modules are renewed at the interval selected.'"

$lang['CronTasks.crontask.name.provision_pending_services'] = "Bereitstellung bezahlter Dienste"; //en: "'Provision Paid Pending Services'"
$lang['CronTasks.crontask.description.provision_pending_services'] = "Bezahlte ausstehende Dienste werden im ausgewählten Intervall aktiviert."; //en: "'Paid pending services are activated at the interval selected.'"

$lang['CronTasks.crontask.name.cancel_scheduled_services'] = "Geplante Dienste abbrechen"; //en: "'Cancel Scheduled Services'"
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = "Dienste, für die zukünftige Stornierungsdaten festgelegt wurden, werden im ausgewählten Intervall entfernt."; //en: "'Services with future cancellation dates set are removed at the interval selected.'"

$lang['CronTasks.crontask.name.card_expiration_reminders'] = "Karten-Ablauf-Erinnerungen 15. des Monats"; //en: "'Card Expiration Reminders 15th of Month'"
$lang['CronTasks.crontask.description.card_expiration_reminders'] = "Am 15. des Monats wird eine Mahnung für Kreditkarten gesendet, die den angegebenen Monat zum angegebenen Zeitpunkt verfallen."; //en: "'A reminder will be sent on the 15th of the month for credit cards expiring that month at the time specified.'"

$lang['CronTasks.crontask.name.deliver_invoices'] = "Rechnungen ausliefern"; //en: "'Deliver Invoices'"
$lang['CronTasks.crontask.description.deliver_invoices'] = "Rechnungen, deren Zustellung geplant ist, werden in dem ausgewählten Intervall gesendet."; //en: "'Invoices that are scheduled for delivery will be sent at the interval selected.'"

$lang['CronTasks.crontask.name.backups_amazons3'] = "Amazon S3 Backups"; //en: "'Amazon S3 Backups'"
$lang['CronTasks.crontask.description.backups_amazons3'] = "Amazon S3-Backups werden unter Systemeinstellungen > Backup > Amazon S3 geplant."; //en: "'Amazon S3 Backups are scheduled under System Settings > Backup > Amazon S3.'"

$lang['CronTasks.crontask.name.backups_sftp'] = "SFTP-Sicherungen"; //en: "'SFTP Backups'"
$lang['CronTasks.crontask.description.backups_sftp'] = "SFTP-Backups werden unter Systemeinstellungen > Backup > Sicheres FTP geplant."; //en: "'SFTP Backups are scheduled under System Settings > Backup > Secure FTP.'"

$lang['CronTasks.crontask.name.suspend_services'] = "Ausgelaufene Verträge"; //en: "'Suspend Services'"
$lang['CronTasks.crontask.description.suspend_services'] = "Überfällige Leistungen werden täglich zum angegebenen Zeitpunkt ausgesetzt."; //en: "'Past due services will be suspended daily at the time specified.'"

$lang['CronTasks.crontask.name.exchange_rates'] = "Wechselkurs-Updates"; //en: "'Exchange Rate Updates'"
$lang['CronTasks.crontask.description.exchange_rates'] = "Wechselkurse werden in festgelegten Intervallen aktualisiert. Es wird nicht empfohlen, diese mehr als zweimal täglich durchzuführen, da hierbei das Risiko besteht, geblockt zu werden."; //en: "'Exchange rates will be updated at the interval specified. It is not recommended to run this more than twice daily for risk of being blocked.'"

$lang['CronTasks.crontask.name.deliver_reports'] = "Empfangsbestätigung"; //en: "'Deliver Reports'"
$lang['CronTasks.crontask.description.deliver_reports'] = "A / R, Rechnungserstellung, Steuerpflicht und andere Berichte werden täglich zum angegebenen Zeitpunkt geliefert."; //en: "'A/R, Invoice Generation, Tax Liability, and other reports will be delivered daily at the time specified.'"

$lang['CronTasks.crontask.name.cleanup_logs'] = "Logs bereinigen"; //en: "'Clean up Logs'"
$lang['CronTasks.crontask.description.cleanup_logs'] = "Alte Schnittstellen-, Moduk-, und sonstige Logfiles werden täglich rotiert und je nach Aufbewahrungsdauer gespeichert."; //en: "'Old gateway, module, and other logs will be rotated daily depending on their retention settings at the time specified.'"

$lang['CronTasks.crontask.name.unsuspend_services'] = "Entsperrte Dienstleistungen"; //en: "'Unsuspend Services'"
$lang['CronTasks.crontask.description.unsuspend_services'] = "Gesperrte Dienstleistungen, die bezahlt wurden, werden wieder aktiviert an dem definiertem Intervall. "; //en: "'Suspended services that have been paid will be unsuspended at the interval selected.'"

$lang['CronTasks.crontask.name.transition_quotations'] = 'Transition Quotations';
$lang['CronTasks.crontask.description.transition_quotations'] = 'Mark quotations past the valid date, as expired';

$lang['CronTasks.crontask.name.license_validation'] = "Lizenz-Gültigkeit"; //en: "'License Validation'"
