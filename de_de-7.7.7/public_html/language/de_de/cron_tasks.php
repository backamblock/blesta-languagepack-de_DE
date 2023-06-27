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

$lang['CronTasks.!error.key.unique'] = "Der bereitgestellte Crontask-Schlüssel ist bereits vergeben.";
$lang['CronTasks.!error.key.length'] = "

Die Schlüssellänge für Cron-Aufgaben darf 64 Zeichen nicht überschreiten.
";
$lang['CronTasks.!error.run_id.exists'] = "Ungültige Cronjob-ID";
$lang['CronTasks.!error.id.exists'] = "Ungültige Crontask-ID";
$lang['CronTasks.!error.name.empty'] = "Bitte geben Sie einen Namen ein.";
$lang['CronTasks.!error.is_lang.format'] = "is_lang muss eine Zahl sein.";
$lang['CronTasks.!error.is_lang.length'] = "is_lang darf nicht länger als 1 Zeichen sein.";
$lang['CronTasks.!error.enabled.format'] = "Das Feld aktiviert muss eine Nummer sein";
$lang['CronTasks.!error.enabled.length'] = "aktivierte Länge darf 1 Zeichen nicht überschreiten.";
$lang['CronTasks.!error.interval.format'] = "Intervall muss eine Zahl sein, welche die Minuten angibt.";
$lang['CronTasks.!error.time.format'] = "Die Zeit wurde in einem ungültigen Format angegeben.";
$lang['CronTasks.!error.type.format'] = "Ungültiger Cron-Aufgabentyp. Muss entweder Zeit oder Intervall sein.";
$lang['CronTasks.crontask.name.create_invoice'] = "Rechnung erstellen";
$lang['CronTasks.crontask.name.autodebit'] = "Auto Debit";
$lang['CronTasks.crontask.description.autodebit'] = "Für die automatische Abbuchung ausgewählte Zahlungskonten werden täglich ausgeführt, um offene Rechnungen zum angegebenen Zeitpunkt abzubuchen.";
$lang['CronTasks.crontask.name.payment_reminders'] = "Zahlungserinnerungen";
$lang['CronTasks.crontask.description.payment_reminders'] = "Zahlungserinnerungen und verspätete Benachrichtigungen werden täglich zum angegebenen Zeitpunkt gesendet.";
$lang['CronTasks.crontask.name.apply_payments'] = "

Zahlungen auf offene Rechnungen anwenden
";
$lang['CronTasks.crontask.description.apply_payments'] = "Lose Gutschriften werden angewendet, um Rechnungen automatisch in dem ausgewählten Intervall zu öffnen.";
$lang['CronTasks.crontask.name.provision_pending_services'] = "Bereitstellung bezahlter Dienste";
$lang['CronTasks.crontask.description.provision_pending_services'] = "Bezahlte ausstehende Dienste werden im ausgewählten Intervall aktiviert.";
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = "Geplante Dienste abbrechen";
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = "

Dienste, für die zukünftige Stornierungsdaten festgelegt wurden, werden im ausgewählten Intervall entfernt.
";
$lang['CronTasks.crontask.name.card_expiration_reminders'] = "Karten-Ablauf-Erinnerungen 15. des Monats";
$lang['CronTasks.crontask.description.card_expiration_reminders'] = "Am 15. des Monats wird eine Mahnung für Kreditkarten gesendet, die den angegebenen Monat zum angegebenen Zeitpunkt verfallen.";
$lang['CronTasks.crontask.name.deliver_invoices'] = "Rechnungen ausliefern";
$lang['CronTasks.crontask.description.deliver_invoices'] = "Rechnungen, deren Zustellung geplant ist, werden in dem ausgewählten Intervall gesendet.";
$lang['CronTasks.crontask.name.suspend_services'] = "Ausgelaufene Verträge";
$lang['CronTasks.crontask.description.suspend_services'] = "Überfällige Leistungen werden täglich zum angegebenen Zeitpunkt ausgesetzt.";
$lang['CronTasks.crontask.name.exchange_rates'] = "

Wechselkurs-Updates
";
$lang['CronTasks.crontask.description.exchange_rates'] = "Wechselkurse werden in festgelegten Intervallen aktualisiert. Es wird nicht empfohlen, diese mehr als zweimal täglich durchzuführen, da hierbei das Risiko besteht, geblockt zu werden.";
$lang['CronTasks.crontask.name.deliver_reports'] = "Empfangsbestätigung";
$lang['CronTasks.crontask.description.deliver_reports'] = "A / R, Rechnungserstellung, Steuerpflicht und andere Berichte werden täglich zum angegebenen Zeitpunkt geliefert.";
$lang['CronTasks.crontask.name.cleanup_logs'] = "

Logs bereinigen
";
$lang['CronTasks.crontask.name.process_renewing_services'] = "Bearbeiten Sie die Serviceverlängerungen";
$lang['CronTasks.crontask.description.process_renewing_services'] = "

Das Erneuern von Diensten, die an Module angeschlossen sind, wird in dem ausgewählten Intervall erneuert.
";
$lang['CronTasks.crontask.name.backups_amazons3'] = "Amazon S3 Backups";
$lang['CronTasks.crontask.description.backups_amazons3'] = "

Amazon S3-Backups werden unter Systemeinstellungen > Backup > Amazon S3 geplant.
";
$lang['CronTasks.crontask.name.unsuspend_services'] = "Entsperrte Dienstleistungen";
$lang['CronTasks.crontask.description.unsuspend_services'] = "Gesperrte Dienstleistungen, die bezahlt wurden, werden wieder aktiviert an dem definiertem Intervall. ";
$lang['CronTasks.crontask.name.license_validation'] = "Lizenz-Gültigkeit";
$lang['CronTasks.crontask.description.create_invoice'] = "Wiederkehrende Rechnungen und Erneuerungsleistungen werden über diese Aufgabe in Rechnung gestellt, die einmal täglich zum angegebenen Zeitpunkt läuft.";
$lang['CronTasks.crontask.description.cleanup_logs'] = "Alte Schnittstellen-, Moduk-, und sonstige Logfiles werden täglich rotiert und je nach Aufbewahrungsdauer gespeichert.";
$lang['CronTasks.crontask.name.backups_sftp'] = "SFTP-Sicherungen";
$lang['CronTasks.crontask.description.backups_sftp'] = "SFTP-Backups werden unter Systemeinstellungen > Backup > Sicheres FTP geplant.";
$lang['CronTasks.crontask.name.process_service_changes'] = "Prozessdienständerungen";
$lang['CronTasks.crontask.description.process_service_changes'] = "Bezahlte Warteschlangen-Serviceänderungen (z. B. Upgrades) werden in dem ausgewählten Intervall verarbeitet.";
$lang['CronTasks.!error.task_type.format'] = "

Ungültiger Aufgabentyp. Muss ein Modul, ein Plugin oder ein System sein.
";
$lang['CronTasks.!error.dir.length'] = "Die Verzeichnislänge darf 64 Zeichen nicht überschreiten.";
$lang['CronTasks.task_type.system'] = "System";
$lang['CronTasks.task_type.plugin'] = "Plugin";
$lang['CronTasks.task_type.module'] = "Modul";
?>