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

$lang['AdminSystemGeneral.!success.basic_updated'] = "Die Grundeinstellungen wurden erfolgreich gespeichert!";
$lang['AdminSystemGeneral.!success.geoip_updated'] = "Die GeoIP-Einstellungen wurden erfolgreich aktualisiert!";
$lang['AdminSystemGeneral.!success.maintenance_updated'] = "Die Wartungseinstellungen wurden erfolgreich aktualisiert.";
$lang['AdminSystemGeneral.!success.license_updated'] = "Ihr Lizenzschlüssel wurde erfolgreich aktualisiert!";
$lang['AdminSystemGeneral.!success.addtype_created'] = "Der Zahlungstyp \"%1\$s\" wurde erfolgreich erstellt!"; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.!success.edittype_updated'] = "Die Zahlart %1\$s wurde erfolgreich bearbeitet."; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = "Der Zahlungstyp \"%1\$s\" wurde erfolgreich gelöscht!"; // %1$s is the name of the payment type
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = "Grundeinstellung";
$lang['AdminSystemGeneral.basic.text_writable'] = "beschreibbar";
$lang['AdminSystemGeneral.basic.text_unwritable'] = "Schreibgeschuetzt";
$lang['AdminSystemGeneral.basic.text_day'] = "Tag";
$lang['AdminSystemGeneral.basic.text_days'] = "Tage";
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = "GeoIP";
$lang['AdminSystemGeneral.geoip.text_setup'] = "GeoIP kann hier aktiviert werden, so dass GeoIP-Ortungsdienste für Blesta verfügbar sind. Wenn Sie diese Option aktivieren, können bestimmte Funktionen Standortdienste nutzen.";
$lang['AdminSystemGeneral.geoip.text_database_exists'] = "%1\$s existiert."; // %1$s is a file system path to the GeoIP database file
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = "%1\$s existiert nicht."; // %1$s is a file system path to the GeoIP database file
$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = "Aktiviere GeoIP";
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = "Einstellungen aktualisieren";
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = "Instandhaltung";
$lang['AdminSystemGeneral.license.boxtitle_license'] = "Lizenzschlüssel";
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = "Zahlungsart erstellen";
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = "Zahlarten";
$lang['AdminSystemGeneral.paymenttypes.heading_name'] = "Name";
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = "Verwendet Sprachdefinition";
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = "Optionen";
$lang['AdminSystemGeneral.paymenttypes.option_edit'] = "Bearbeiten";
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = "Löschen";
$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = "

Durch das Löschen dieser Zahlungsart werden alle Transaktionen, die diese Zahlungsart verwenden, auf \"Sonstige\" gesetzt. Möchten Sie diese Zahlungsart wirklich löschen?
";
$lang['AdminSystemGeneral.paymenttypes.text_yes'] = "

Ja
";
$lang['AdminSystemGeneral.paymenttypes.text_no'] = "Nein";
$lang['AdminSystemGeneral.paymenttypes.no_results'] = "

Es gibt keine Zahlungsarten.
";
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = "Zahlungsart erstellen";
$lang['AdminSystemGeneral.addtype.field_name'] = "Name";
$lang['AdminSystemGeneral.addtype.field_is_lang'] = "Verwende Sprachdefinition";
$lang['AdminSystemGeneral.addtype.field_typesubmit'] = "Zahlungsart erstellen";
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = "Zahlungsart bearbeiten";
$lang['AdminSystemGeneral.edittype.field_name'] = "Name";
$lang['AdminSystemGeneral.edittype.field_is_lang'] = "Benutze Sprachdefinition";
$lang['AdminSystemGeneral.edittype.field_typesubmit'] = "

Zahlungsart bearbeiten
";
$lang['AdminSystemGeneral.basic.page_title'] = "Einstellungen > System > Allgemein > Grundeinrichtung";
$lang['AdminSystemGeneral.geoip.page_title'] = "Einstellungen&gt; System&gt; Allgemein&gt; GeoIP-Einstellungen";
$lang['AdminSystemGeneral.maintenance.page_title'] = "Einstellungen > System > Allgemein > Wartung";
$lang['AdminSystemGeneral.license.page_title'] = "Einstellungen > System > Allgemein > Lizenzkey";
$lang['AdminSystemGeneral.paymenttypes.page_title'] = "Einstellungen > System > Allgemein > Zahlungsarten";
$lang['AdminSystemGeneral.addtype.page_title'] = "Einstellungen -> System -> Allgemein -> Zahlungsmittel erstellen";
$lang['AdminSystemGeneral.edittype.page_title'] = "Einstellungen -> System -> Allgemein -> Zahlungstyp bearbeiten";
$lang['AdminSystemGeneral.basic.text_no_log'] = "Führe keinen Logrotate aus";
$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = "Aktivieren Sie dieses Kontrollkästchen nur, wenn Sie in der benutzerdefinierten Sprachdatei eine Sprachdefinition für diesen Zahlungstyp hinzugefügt haben.";
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = "Für diese Funktion ist die Erweiterung mbstring erforderlich.";
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = "Art";
$lang['AdminSystemGeneral.!paymenttypes.type'] = "Bei der Belastung werden Transaktionen, die diesen Zahlungstyp verwenden, als einkommensbasiert angesehen, während Kredite nicht einkommensbasiert sind.";
$lang['AdminSystemGeneral.addtype.field_type'] = "Typ";
$lang['AdminSystemGeneral.edittype.field_type'] = "Art";
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = "Wenn dieses Kontrollkästchen aktiviert ist, geht Blesta davon aus, dass es sich hinter einem Proxy befindet, und ermittelt die IP-Adressen anhand eines vom Proxy bereitgestellten x-forwarded-for-Headers. Sie sollten diese Einstellung nur aktivieren, wenn der x-forwarded-for-Header vertrauenswürdig ist.";
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = "Dieser Wert stellt den vollständigen Serverpfad dar, zu dem Blesta hochgeladene Dateien schreiben soll. Dieses Verzeichnis muss vom Webbenutzer und Cron-Benutzer des Servers beschreibbar sein.";
$lang['AdminSystemGeneral.basic.field.temp_dir'] = "Temp-Verzeichnis";
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = "Grund für die Wartung";
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = "Verwenden Sie die Willkommens-E-Mail, um Ihr Passwort festzulegen";
?>