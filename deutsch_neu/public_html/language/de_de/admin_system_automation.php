<?php
/**
 * Language definitions for the Admin System Automation settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Error messages
$lang['AdminSystemAutomation.!error.empty_cron_key'] = "Bitte setzen Sie den Cron Key."; //en: "'Please set a cron key.'"


// Success messages
$lang['AdminSystemAutomation.!success.automation_updated'] = "Die Automatischen Einstellungen wurden erfolgreich aktualisiert!"; //en: "'The Automation settings were successfully updated!'"
$lang['AdminSystemAutomation.!success.cron_key'] = "Die cron Code wurde erfolgreich aktualisiert!"; //en: "'The cron key has been successfully updated!'"


// Index
$lang['AdminSystemAutomation.index.page_title'] = "Einstellungen > System > Automatisierung"; //en: "'Settings > System > Automation'"
$lang['AdminSystemAutomation.index.boxtitle_automation'] = "Automatisierung"; //en: "'Automation'"

$lang['AdminSystemAutomation.index.heading_status'] = "Cron Status"; //en: "'Cron Status'"

$lang['AdminSystemAutomation.index.field_croncommand'] = "Beispiel Cron-Befehl"; //en: "'Example Cron Command'"
$lang['AdminSystemAutomation.index.field_runcron'] = "Cron manuell ausführen"; //en: "'Run Cron Manually'"
$lang['AdminSystemAutomation.index.field_cron_key'] = "Cron Schlüssel"; //en: "'Cron Key'"
$lang['AdminSystemAutomation.index.field_cronkey_submit'] = "Cron-Schlüssel aktualisieren"; //en: "'Update Cron Key'"

$lang['AdminSystemAutomation.index.text_cron_last_ran'] = "Der letzte Cronjob lief am %1\$s."; // %1$s is the date that the cron last ran"; //en: "'The cron last ran on %1$s.'; // %1$s is the date that the cron last ran"
$lang['AdminSystemAutomation.index.text_cron_never_ran'] = "Der Cronjob wurde noch nie ausgeführt."; //en: "'The cron has never run.'"
$lang['AdminSystemAutomation.index.text_cron_currently_running'] = "Der Cron ist zur Zeit am Laufen."; //en: "'The cron is currently running.'"
$lang['AdminSystemAutomation.index.text_update_key'] = "Cron-Schlüssel aktualisieren"; //en: "'Update Cron Key'"
$lang['AdminSystemAutomation.index.text_generate_code'] = "Code generieren"; //en: "'Generate Code'"

$lang['AdminSystemAutomation.index.note_cron_command'] = 'This is an example cron command that may be used to create a cron job on your server. When setting up the cron job, be sure to update the cron command to point to where PHP is installed if it differs from what is shown in this example.';
