<?php
/**
 * Language definitions for the Cron controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['Cron.!error.cron.failed'] = "Cron konnte nicht loggen."; //en: "'Cron failed to log.'"
$lang['Cron.!error.task_execution.failed'] = "Fehler: %1\$s %2\$s"; // %1$s is the error message that occurred, %2$s is the stack trace"; //en: "'Error: %1$s %2$s'; // %1$s is the error message that occurred, %2$s is the stack trace"


// Index
$lang['Cron.index.attempt_all'] = "Versuch, alle Aufgaben für %1\$s auszuführen."; // %1$s is the company name"; //en: "'Attempting to run all tasks for %1$s.'; // %1$s is the company name"
$lang['Cron.index.completed_all'] = "Alle Aufgaben wurden abgeschlossen."; //en: "'All tasks have been completed.'"
$lang['Cron.index.attempt_all_system'] = "Versuche alle System Jobs auszuführen."; //en: "'Attempting to run all system tasks.'"
$lang['Cron.index.completed_all_system'] = "Alle Systemaufgaben wurden abgeschlossen."; //en: "'All system tasks have been completed.'"

// Apply credits
$lang['Cron.applycredits.attempt'] = "Versuchen, Guthaben auf offene Rechnungen anzuwenden."; //en: "'Attempting to apply credits to open invoices.'"
$lang['Cron.applycredits.completed'] = "Der \"Guthaben hinzufügen\" Task wurde abgeschlossen."; //en: "'The apply credits task has completed.'"
$lang['Cron.applycredits.apply_failed'] = "Ausstehende Gutschriften für Kunde #%1\$s können nicht angewendet werden."; // %1$s is the client ID"; //en: "'Unable to apply pending credits for client #%1$s.'; // %1$s is the client ID"
$lang['Cron.applycredits.apply_success'] = "Ausstehende Transaktionen aus Transaktion %1\$s wurden erfolgreich für den Kunden # %2\$s an die Rechnung # %3\$s in Höhe von %4\$s angewendet."; // %1$s is the transaction number, %2$s is the client ID, %3$s is the invoice ID, and %4$s is the amount applied"; //en: "'Successfully applied pending credits from transaction %1$s for client #%2$s to invoice #%3$s in the amount of %4$s.'; // %1$s is the transaction number, %2$s is the client ID, %3$s is the invoice ID, and %4$s is the amount applied"
$lang['Cron.applycredits.apply_none'] = "Es gibt keine Rechnungen, auf die Kredite angerechnet werden können."; //en: "'There are no invoices to which credits may be applied.'"


// Autodebit invoices
$lang['Cron.autodebitinvoices.attempt'] = "Versuch, offene Rechnungen automatisch zu belasten."; //en: "'Attempting to auto debit open invoices.'"
$lang['Cron.autodebitinvoices.completed'] = "Die Aufgabe für die automatische Lastschriftabrechnung wurde abgeschlossen."; //en: "'The auto debit invoices task has completed.'"
$lang['Cron.autodebitinvoices.charge_attempt'] = "Versuch, den Kunden #%1\$s für alle offenen Rechnungen in Höhe von %2\$s automatisch zu belasten."; // %1$s is the client ID, %2$s is the amount due"; //en: "'Attempting to auto debit client #%1$s for all open invoices in the amount of %2$s.'; // %1$s is the client ID, %2$s is the amount due"
$lang['Cron.autodebitinvoices.charge_failed'] = "Die Zahlung konnte nicht verarbeitet werden"; //en: "'Unable to process the payment.'"
$lang['Cron.autodebitinvoices.charge_success'] = "Zahlung erfolgreich verarbeitet."; //en: "'Successfully processed the payment.'"


// Card Expiration Reminders
$lang['Cron.cardexpirationreminders.attempt'] = "Es wurde versucht, Kartenablauf-Erinnerungen zu senden."; //en: "'Attempting to send card expiration reminders.'"
$lang['Cron.cardexpirationreminders.completed'] = "Die Aufgabe zum Erinnern der Karten ist abgeschlossen."; //en: "'The card expiration reminders task has completed.'"
$lang['Cron.cardexpirationreminders.failed'] = "Die Ablauferinnerung für den Kontakt %1\$s %2\$s von Client # %3\$s konnte nicht gesendet werden."; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID"; //en: "'The expiration reminder for contact %1$s %2$s from client #%3$s could not be sent.'; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID"
$lang['Cron.cardexpirationreminders.success'] = "Die Ablauferinnerung für den Kontakt %1\$s %2\$s wurde erfolgreich vom Client # %3\$s übermittelt."; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID"; //en: "'Successfully delivered the expiration reminder for contact %1$s %2$s from client #%3$s.'; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID"


// Suspend services
$lang['Cron.suspendservices.attempt'] = "Versuch, überfällige Dienste auszusetzen."; //en: "'Attempting to suspend past due services.'"
$lang['Cron.suspendservices.completed'] = "Die Task zum Anhalten der Dienste wurde abgeschlossen."; //en: "'The suspend services task has completed.'"
$lang['Cron.suspendservices.suspension_reason'] = "Nichtzahlung"; //en: "'Non-Payment'"

$lang['Cron.suspendservices.suspend_error'] = "Der Dienst # %1\$s von Kunde %2\$s konnte nicht angehalten werden."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client %2$s could not be suspended.'; // %1$s is the service ID, %2$s is the client ID"
$lang['Cron.suspendservices.suspend_success'] = "Der Dienst #%1\$s vom Kunden %2\$s wurde angehalten."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client %2$s has been suspended.'; // %1$s is the service ID, %2$s is the client ID"


// Suspend services
$lang['Cron.unsuspendservices.attempt'] = "Versuch, bezahlte suspendierte Dienste nicht zu nutzen."; //en: "'Attempting to unsuspend paid suspended services.'"
$lang['Cron.unsuspendservices.completed'] = "Das Entsperren Dienstleistungen Aufgabe abgeschlossen ist."; //en: "'The unsuspend services task has completed.'"

$lang['Cron.unsuspendservices.unsuspend_error'] = "Der service #%1\$s des Kunden %2\$s konnte nicht entsperrt werden."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client %2$s could not be unsuspended.'; // %1$s is the service ID, %2$s is the client ID"
$lang['Cron.unsuspendservices.unsuspend_success'] = "Der Dienst # %1\$s vom Client %2\$s wurde aufgehoben."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client %2$s has been unsuspended.'; // %1$s is the service ID, %2$s is the client ID"


// Cancel Scheduled Services
$lang['Cron.cancelscheduledservices.attempt'] = "Versuche, geplante Kündigungen durchzuführen."; //en: "'Attempting to cancel scheduled services.'"
$lang['Cron.cancelscheduledservices.completed'] = "Die Aufgabe zum Abbrechen geplanter Dienste wurde abgeschlossen."; //en: "'The cancel scheduled services task has completed.'"

$lang['Cron.cancelscheduledservices.cancel_error'] = "Der Service # %1\$s vom Kunden # %2\$s konnte nicht storniert werden."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client #%2$s could not be canceled.'; // %1$s is the service ID, %2$s is the client ID"
$lang['Cron.cancelscheduledservices.cancel_success'] = "Der Dienst # %1\$s von Client # %2\$s wurde abgebrochen."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The service #%1$s from client #%2$s has been canceled.'; // %1$s is the service ID, %2$s is the client ID"


// Add paid pending services
$lang['Cron.addpaidpendingservices.attempt'] = "Versuch, bezahlte ausstehende Dienste bereitzustellen."; //en: "'Attempting to provision paid pending services.'"
$lang['Cron.addpaidpendingservices.completed'] = "Die Aufgabe für bezahlte ausstehende Services wurde abgeschlossen."; //en: "'The paid pending services task has completed.'"
$lang['Cron.addpaidpendingservices.service_error'] = "Der Service #%1\$s vom Kunden #%2\$s konnte nicht aktiviert werden."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The pending service #%1$s from client #%2$s could not be made active.'; // %1$s is the service ID, %2$s is the client ID"
$lang['Cron.addpaidpendingservices.service_success'] = "Der ausstehende Dienst #%1\$s von Kunden #%2\$s ist jetzt aktiv."; // %1$s is the service ID, %2$s is the client ID"; //en: "'The pending service #%1$s from client #%2$s is now active.'; // %1$s is the service ID, %2$s is the client ID"
