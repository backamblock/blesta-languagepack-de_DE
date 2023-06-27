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

$lang['Cron.index.attempt_all'] = "Versuch, alle Aufgaben für %1\$s auszuführen."; // %1$s is the company name
$lang['Cron.index.completed_all'] = "Alle Aufgaben wurden abgeschlossen.";
$lang['Cron.index.attempt_all_system'] = "Versuche alle System Jobs auszuführen.";
$lang['Cron.index.completed_all_system'] = "Alle Systemaufgaben wurden abgeschlossen.";
$lang['Cron.applycredits.attempt'] = "Versuchen, Guthaben auf offene Rechnungen anzuwenden.";
$lang['Cron.applycredits.completed'] = "Der \"Guthaben hinzufügen\" Task wurde abgeschlossen.";
$lang['Cron.applycredits.apply_none'] = "Es gibt keine Rechnungen, auf die Kredite angerechnet werden können.";
$lang['Cron.autodebitinvoices.attempt'] = "Versuch, offene Rechnungen automatisch zu belasten.";
$lang['Cron.autodebitinvoices.completed'] = "Die Aufgabe für die automatische Lastschriftabrechnung wurde abgeschlossen.";
$lang['Cron.autodebitinvoices.charge_attempt'] = "Versuch, den Kunden #%1\$s für alle offenen Rechnungen in Höhe von %2\$s automatisch zu belasten."; // %1$s is the client ID, %2$s is the amount due
$lang['Cron.autodebitinvoices.charge_failed'] = "Die Zahlung konnte nicht verarbeitet werden";
$lang['Cron.autodebitinvoices.charge_success'] = "Zahlung erfolgreich verarbeitet.";
$lang['Cron.cardexpirationreminders.attempt'] = "Es wurde versucht, Kartenablauf-Erinnerungen zu senden.";
$lang['Cron.cardexpirationreminders.completed'] = "Die Aufgabe zum Erinnern der Karten ist abgeschlossen.";
$lang['Cron.cardexpirationreminders.failed'] = "Die Ablauferinnerung für den Kontakt %1\$s %2\$s von Client # %3\$s konnte nicht gesendet werden."; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID
$lang['Cron.cardexpirationreminders.success'] = "Die Ablauferinnerung für den Kontakt %1\$s %2\$s wurde erfolgreich vom Client # %3\$s übermittelt."; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID
$lang['Cron.suspendservices.attempt'] = "Versuch, überfällige Dienste auszusetzen.";
$lang['Cron.suspendservices.completed'] = "Die Task zum Anhalten der Dienste wurde abgeschlossen.";
$lang['Cron.suspendservices.suspend_error'] = "Der Dienst # %1\$s von Kunde %2\$s konnte nicht angehalten werden."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.suspendservices.suspend_success'] = "Der Dienst #%1\$s vom Kunden %2\$s wurde angehalten."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.unsuspendservices.attempt'] = "Versuch, bezahlte suspendierte Dienste nicht zu nutzen.";
$lang['Cron.unsuspendservices.completed'] = "Das Entsperren Dienstleistungen Aufgabe abgeschlossen ist.";
$lang['Cron.unsuspendservices.unsuspend_error'] = "Der service #%1\$s des Kunden %2\$s konnte nicht entsperrt werden."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.unsuspendservices.unsuspend_success'] = "Der Dienst # %1\$s vom Client %2\$s wurde aufgehoben."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.cancelscheduledservices.attempt'] = "Versuche, geplante Kündigungen durchzuführen.";
$lang['Cron.cancelscheduledservices.completed'] = "Die Aufgabe zum Abbrechen geplanter Dienste wurde abgeschlossen.";
$lang['Cron.cancelscheduledservices.cancel_error'] = "Der Service # %1\$s vom Kunden # %2\$s konnte nicht storniert werden."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.cancelscheduledservices.cancel_success'] = "Der Dienst # %1\$s von Client # %2\$s wurde abgebrochen."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.addpaidpendingservices.attempt'] = "Versuch, bezahlte ausstehende Dienste bereitzustellen.";
$lang['Cron.addpaidpendingservices.completed'] = "Die Aufgabe für bezahlte ausstehende Services wurde abgeschlossen.";
$lang['Cron.addpaidpendingservices.service_error'] = "Der Service #%1\$s vom Kunden #%2\$s konnte nicht aktiviert werden."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.addpaidpendingservices.service_success'] = "Der ausstehende Dienst #%1\$s von Kunden #%2\$s ist jetzt aktiv."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.!error.cron.failed'] = "Cron konnte nicht loggen.";
$lang['Cron.!error.task_execution.failed'] = "Fehler: %1\$s %2\$s"; // %1$s is the error message that occurred, %2$s is the stack trace
$lang['Cron.applycredits.apply_failed'] = "Ausstehende Gutschriften für Kunde #%1\$s können nicht angewendet werden."; // %1$s is the client ID
$lang['Cron.applycredits.apply_success'] = "Ausstehende Transaktionen aus Transaktion %1\$s wurden erfolgreich für den Kunden # %2\$s an die Rechnung # %3\$s in Höhe von %4\$s angewendet."; // %1$s is the transaction number, %2$s is the client ID, %3$s is the invoice ID, and %4$s is the amount applied
$lang['Cron.suspendservices.suspension_reason'] = "Nichtzahlung";
?>