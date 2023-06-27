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

$lang['Cron.index.attempt_all'] = "Attempting to run all tasks for %1\$s."; // %1$s is the company name
$lang['Cron.index.attempt_all_system'] = "Attempting to run all system tasks.";
$lang['Cron.index.completed_all_system'] = "All system tasks have been completed.";
$lang['Cron.applycredits.completed'] = "The apply credits task has completed.";
$lang['Cron.autodebitinvoices.attempt'] = "Attempting to auto debit open invoices.";
$lang['Cron.autodebitinvoices.charge_failed'] = "Unable to process the payment.";
$lang['Cron.cardexpirationreminders.attempt'] = "Attempting to send card expiration reminders.";
$lang['Cron.cardexpirationreminders.completed'] = "The card expiration reminders task has completed.";
$lang['Cron.cardexpirationreminders.failed'] = "The expiration reminder for contact %1\$s %2\$s from client #%3\$s could not be sent."; // %1$s is the contact's first name, %2$s is the contact's last name, %3$s is the client ID
$lang['Cron.suspendservices.completed'] = "The suspend services task has completed.";
$lang['Cron.suspendservices.suspend_error'] = "The service #%1\$s from client %2\$s could not be suspended."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.unsuspendservices.completed'] = "The unsuspend services task has completed.";
$lang['Cron.unsuspendservices.unsuspend_error'] = "The service #%1\$s from client %2\$s could not be unsuspended."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.unsuspendservices.unsuspend_success'] = "The service #%1\$s from client %2\$s has been unsuspended."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.cancelscheduledservices.attempt'] = "Attempting to cancel scheduled services.";
$lang['Cron.cancelscheduledservices.completed'] = "The cancel scheduled services task has completed.";
$lang['Cron.addpaidpendingservices.attempt'] = "Attempting to provision paid pending services.";
$lang['Cron.addpaidpendingservices.completed'] = "The paid pending services task has completed.";
$lang['Cron.addpaidpendingservices.service_success'] = "The pending service #%1\$s from client #%2\$s is now active."; // %1$s is the service ID, %2$s is the client ID
$lang['Cron.!error.task_execution.failed'] = "Error: %1\$s %2\$s"; // %1$s is the error message that occurred, %2$s is the stack trace
$lang['Cron.applycredits.apply_failed'] = "Unable to apply pending credits for client #%1\$s."; // %1$s is the client ID
$lang['Cron.applycredits.apply_success'] = "Successfully applied pending credits from transaction %1\$s for client #%2\$s to invoice #%3\$s in the amount of %4\$s."; // %1$s is the transaction number, %2$s is the client ID, %3$s is the invoice ID, and %4$s is the amount applied
?>