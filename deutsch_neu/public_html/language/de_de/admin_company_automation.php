<?php
/**
 * Language definitions for the Admin Company Automation settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminCompanyAutomation.!success.automation_updated'] = "Die Automatisierungseinstellungen wurden erfolgreich aktualisiert!"; //en: "'The Automation settings were successfully updated!'"
$lang['AdminCompanyAutomation.!success.task_cleared'] = "Der Chronjob wurde gelöscht."; //en: "'The cron task has been cleared.'"


// Index
$lang['AdminCompanyAutomation.index.page_title'] = "Einstellungen > Firma > Automatisierung"; //en: "'Settings > Company > Automation'"
$lang['AdminCompanyAutomation.index.boxtitle_automation'] = "Automatisierung"; //en: "'Automation'"

$lang['AdminCompanyAutomation.index.field_automationsubmit'] = "Update Einstellungen "; //en: "'Update Settings'"
$lang['AdminCompanyAutomation.index.field_enabled'] = "Aktiviert"; //en: "'Enabled'"

$lang['AdminCompanyAutomation.index.text_interval'] = "Intervall"; //en: "'Interval'"
$lang['AdminCompanyAutomation.index.text_starttime'] = "Startzeit"; //en: "'Start Time'"
$lang['AdminCompanyAutomation.index.text_task_lastran'] = "Letzter lauf des Tasks:"; //en: "'Task Last Ran:'"

$lang['AdminCompanyAutomation.index.no_results'] = "Keine Chronjobs vorhanden."; //en: "'There are no cron tasks.'"
$lang['AdminCompanyAutomation.index.no_cron_lastran'] = "Nie"; //en: "'Never'"

$lang['AdminCompanyAutomation.index.text_cron_last_ran'] = "Der Chronjob lief das letzte mal am %1\$s."; // %1$s is the date that the cron last ran"; //en: "'The cron last ran on %1$s.'; // %1$s is the date that the cron last ran"
$lang['AdminCompanyAutomation.index.text_cron_never_ran'] = "Der Chronjob ist noch nie gelaufen."; //en: "'The cron has never run.'"

$lang['AdminCompanyAutomation.index.option_clear_task'] = "Aufgabensperre löschen"; //en: "'Clear Task Lock'"
$lang['AdminCompanyAutomation.index.confirm_clear_task'] = "Sind Sie sicher, diese Chronjob-Sperre zu löschen? Wenn diese Aufgabe kontinuierlich stoppt, kann es ein ernsteres Problem sein."; //en: "'Are you sure you want to clear this cron task lock? If this task continuously stalls, there may be a more serious issue. Try running the cron manually, or checking the cron log for errors to determine the cause.'"


// GetIntervals
$lang['AdminCompanyAutomation.getintervals.text_minutes'] = "Minuten"; //en: "'minutes'"
$lang['AdminCompanyAutomation.getintervals.text_hour'] = "Stunde"; //en: "'hour'"
$lang['AdminCompanyAutomation.getintervals.text_hours'] = "Stunden"; //en: "'hours'"
