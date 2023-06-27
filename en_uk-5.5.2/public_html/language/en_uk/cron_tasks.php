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

$lang['CronTasks.!error.key.unique'] = "The cron task key provided is already taken.";
$lang['CronTasks.!error.key.length'] = "The cron task key length may not exceed 64 characters.";
$lang['CronTasks.!error.run_id.exists'] = "Invalid cron task ";
$lang['CronTasks.!error.id.exists'] = "Invalid cron task ID.";
$lang['CronTasks.!error.is_lang.format'] = "is_lang must be a number.";
$lang['CronTasks.!error.is_lang.length'] = "is_lang length may not exceed 1 character.";
$lang['CronTasks.!error.enabled.format'] = "enabled must be a number.";
$lang['CronTasks.!error.enabled.length'] = "enabled length may not exceed 1 character.";
$lang['CronTasks.!error.interval.format'] = "Interval must be a number, representing minutes.";
$lang['CronTasks.!error.time.format'] = "Time is in an invalid format.";
$lang['CronTasks.crontask.name.create_invoice'] = "Create Invoice";
$lang['CronTasks.crontask.name.autodebit'] = "Auto Debit";
$lang['CronTasks.crontask.description.autodebit'] = "Payment accounts selected for auto debit will be run to pay off open invoices daily at the time specified.";
$lang['CronTasks.crontask.name.payment_reminders'] = "Payment Reminders";
$lang['CronTasks.crontask.name.apply_payments'] = "Apply Payments to Open Invoices";
$lang['CronTasks.crontask.description.apply_payments'] = "Loose credits are applied to open invoices automatically at the interval selected.";
$lang['CronTasks.crontask.name.provision_pending_services'] = "Provision Paid Pending Services";
$lang['CronTasks.crontask.name.cancel_scheduled_services'] = "Cancel Scheduled Services";
$lang['CronTasks.crontask.description.cancel_scheduled_services'] = "Services with future cancellation dates set are removed at the interval selected.";
$lang['CronTasks.crontask.description.card_expiration_reminders'] = "A reminder will be sent on the 15th of the month for credit cards expiring that month at the time specified.";
$lang['CronTasks.crontask.name.deliver_invoices'] = "Deliver Invoices";
$lang['CronTasks.crontask.name.suspend_services'] = "Suspend Services";
$lang['CronTasks.crontask.description.suspend_services'] = "Past due services will be suspended daily at the time specified.";
$lang['CronTasks.crontask.name.exchange_rates'] = "Exchange Rate Updates";
$lang['CronTasks.crontask.description.exchange_rates'] = "Exchange rates will be updated at the interval specified. It is not recommended to run this more than twice daily for risk of being blocked.";
$lang['CronTasks.crontask.name.deliver_reports'] = "Deliver Reports";
$lang['CronTasks.crontask.description.deliver_reports'] = "A/R, Invoice Generation, Tax Liability, and other reports will be delivered daily at the time specified.";
$lang['CronTasks.crontask.name.cleanup_logs'] = "Clean up Logs";
$lang['CronTasks.crontask.name.process_renewing_services'] = "Process Service Renewals";
$lang['CronTasks.crontask.name.backups_amazons3'] = "Amazon S3 Backups";
$lang['CronTasks.crontask.name.unsuspend_services'] = "Unsuspend Services";
$lang['CronTasks.crontask.name.license_validation'] = "License Validation";
$lang['CronTasks.crontask.description.create_invoice'] = "Recurring invoices and renewing services are invoiced through this task, which runs once daily at the time specified.";
$lang['CronTasks.crontask.name.backups_sftp'] = "SFTP Backups";
$lang['CronTasks.crontask.description.backups_sftp'] = "SFTP Backups are scheduled under System Settings > Backup > Secure FTP.";
$lang['CronTasks.crontask.name.process_service_changes'] = "Process Service Changes";
$lang['CronTasks.crontask.description.process_service_changes'] = "Paid queued service changes (e.g. upgrades) are processed at the interval selected.";
?>