<?php
/**
 * Language definitions for the ReportManager model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2013, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Errors
$lang['ReportManager.!error.type.valid'] = "Bitte wähle eine gültige Berichtsart aus."; //en: "'Please select a valid report type.'"
$lang['ReportManager.!error.format.valid'] = "Bitte wählen Sie ein gültiges Berichtsformat."; //en: "'Please select a valid report format.'"
$lang['ReportManager.!error.temp_dir.writable'] = "Das temporäre Verzeichnis ist schreibgeschützt oder der Bericht konnte nicht geschrieben werden."; //en: "'The temp directory is not writable or the report could not be written to it.'"

$lang['ReportManager.!error.name.valid'] = "Der Bericht benötigt einen Name."; //en: "'Report must have a name.'"
$lang['ReportManager.!error.query.empty'] = "Bericht muss eine Abfrage enthalten."; //en: "'Report must have a query.'"
$lang['ReportManager.!error.query.valid'] = "Es ist nur eine Abfrage zulässig, und es muss sich um eine SELECT-Abfrage handeln."; //en: "'Only one query allowed, and it must be a SELECT query.'"
$lang['ReportManager.!error.date_created.format'] = "Das Erstellungsdatum hat ein ungültiges Format."; //en: "'Date Created is an invalid format.'"

// Formats
$lang['ReportManager.getformats.csv'] = "CSV"; //en: "'CSV'"
$lang['ReportManager.getformats.json'] = "JSON"; //en: "'JSON'"

$lang['ReportManager.reportfieldtypes.text'] = "Text"; //en: "'Text'"
$lang['ReportManager.reportfieldtypes.select'] = "Wählen"; //en: "'Select'"
$lang['ReportManager.reportfieldtypes.date'] = "Datum"; //en: "'Date'"

$lang['ReportManager.reportrequiredtypes.no'] = "Nein"; //en: "'No'"
$lang['ReportManager.reportrequiredtypes.yes'] = "Ja"; //en: "'Yes'"
$lang['ReportManager.reportrequiredtypes.custom'] = "Custom Regex"; //en: "'Custom Regex'"
