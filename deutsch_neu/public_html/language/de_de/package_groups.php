<?php
/**
 * Language definitions for the Package Groups model
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

$lang['PackageGroups.!error.names.format'] = "Die Paketgruppennamen haben ein ungültiges Format."; //en: "'The package group names are in an invalid format.'"
$lang['PackageGroups.!error.names.empty_name'] = "Bitte geben Sie für jede Sprache einen Paketgruppennamen an."; //en: "'Please specify a package group name for each language.'"
$lang['PackageGroups.!error.names.empty_lang'] = "Bitte geben Sie für jeden Namen einen Sprachcode für die Paketgruppe an."; //en: "'Please specify a package group language code for each name.'"
$lang['PackageGroups.!error.descriptions.format'] = "Die Paketgruppenbeschreibungen haben ein ungültiges Format."; //en: "'The package group descriptions are in an invalid format.'"
$lang['PackageGroups.!error.descriptions.empty_lang'] = "Bitte geben Sie für jede Beschreibung einen Sprachcode für die Paketgruppe an."; //en: "'Please specify a package group language code for each description.'"
$lang['PackageGroups.!error.type.format'] = "Ungültiger Gruppen typ."; //en: "'Invalid group type.'"
$lang['PackageGroups.!error.company_id.exists'] = "Ungültige Firmen ID."; //en: "'Invalid company ID.'"
$lang['PackageGroups.!error.parents.format'] = "Mindestens eine übergeordnete Gruppen-ID ist eine nicht standardmäßige Gruppe, die nicht für die Verwendung als übergeordnete Gruppe verfügbar ist."; //en: "'At least one parent group ID given is a non-standard group unavailable for use as a parent.'"
$lang['PackageGroups.!error.hidden.format'] = 'Whether this group should be hidden in the interface must be set to 1 or 0.';
$lang['PackageGroups.!error.allow_upgrades.format'] = "Ob Pakete innerhalb dieser Gruppe aktualisiert oder heruntergestuft werden können, muss auf 1 oder 0 gesetzt werden."; //en: "'Whether packages within this group can be upgraded/downgraded must be set to 1 or 0.'"


// Group types
$lang['PackageGroups.gettypes.standard'] = "Standart"; //en: "'Standard'"
$lang['PackageGroups.gettypes.addon'] = "Add-on"; //en: "'Add-on'"
