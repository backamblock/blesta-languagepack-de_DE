<?php
/**
 * Language definitions for the Admin System General settings controller/views
 *
 * @package blesta
 * @subpackage blesta.language.de_de
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['AdminSystemGeneral.!success.basic_updated'] = "Die Grundeinstellungen wurden erfolgreich gespeichert!"; //en: "'The Basic Setup settings were successfully updated!'"
$lang['AdminSystemGeneral.!success.geoip_updated'] = "Die GeoIP-Einstellungen wurden erfolgreich aktualisiert!"; //en: "'The GeoIP settings were successfully updated!'"
$lang['AdminSystemGeneral.!success.maintenance_updated'] = "Die Wartungseinstellungen wurden erfolgreich aktualisiert."; //en: "'The Maintenance settings were successfully updated!'"
$lang['AdminSystemGeneral.!success.license_updated'] = "Ihr Lizenzschlüssel wurde erfolgreich aktualisiert!"; //en: "'Your License Key has been successfully updated!'"
$lang['AdminSystemGeneral.!success.addtype_created'] = "Der Zahlungstyp \"%1\$s\" wurde erfolgreich erstellt!"; // %1$s is the name of the payment type"; //en: "'The payment type "%1$s" has been successfully created!'; // %1$s is the name of the payment type"
$lang['AdminSystemGeneral.!success.edittype_updated'] = "Die Zahlart %1\$s wurde erfolgreich bearbeitet."; // %1$s is the name of the payment type"; //en: "'The payment type "%1$s" has been successfully updated!'; // %1$s is the name of the payment type"
$lang['AdminSystemGeneral.!success.deletetype_deleted'] = "Der Zahlungstyp \"%1\$s\" wurde erfolgreich gelöscht!"; // %1$s is the name of the payment type"; //en: "'The payment type "%1$s" has been successfully deleted!'; // %1$s is the name of the payment type"

// Error messages
$lang['AdminSystemGeneral.!error.geoip_mbstring_required'] = "Für diese Funktion ist die Erweiterung mbstring erforderlich."; //en: "'The mbstring extension is required for this feature.'"

// Tooltips
$lang['AdminSystemGeneral.!tooltip.license_key'] = 'This is your Blesta license key. If you receive a new license key, enter it here.';

$lang['AdminSystemGeneral.!tooltip.root_web_dir'] = 'This value represents the full server path to the web server\'s document root directory (e.g. /home/user/public_html/). This is not necessarily the path to the directory Blesta is installed under.';
$lang['AdminSystemGeneral.!tooltip.temp_dir'] = 'This value represents the full server path to where Blesta should write temporary files. This directory must be writable by the server\'s web user and cron user.';
$lang['AdminSystemGeneral.!tooltip.uploads_dir'] = "Dieser Wert stellt den vollständigen Serverpfad dar, zu dem Blesta hochgeladene Dateien schreiben soll. Dieses Verzeichnis muss vom Webbenutzer und Cron-Benutzer des Servers beschreibbar sein."; //en: "'This value represents the full server path to where Blesta should write uploaded files. This directory must be writable by the server\'s web user and cron user.'"
$lang['AdminSystemGeneral.!tooltip.log_dir'] = 'This value represents the full server path to where Blesta should write log files. This directory must be writable by the server\'s web user and cron user.';
$lang['AdminSystemGeneral.!tooltip.log_days'] = 'The Rotation Policy sets the length of time to retain most company log data. The system configuration file may set additional log retention settings.';
$lang['AdminSystemGeneral.!tooltip.behind_proxy'] = "Wenn dieses Kontrollkästchen aktiviert ist, geht Blesta davon aus, dass es sich hinter einem Proxy befindet, und ermittelt die IP-Adressen anhand eines vom Proxy bereitgestellten x-forwarded-for-Headers. Sie sollten diese Einstellung nur aktivieren, wenn der x-forwarded-for-Header vertrauenswürdig ist."; //en: "'When checked, Blesta will assume it is behind a proxy and will determine IP addresses from an x-forwarded-for header provided by the proxy. You should only check this setting if the x-forwarded-for header can be trusted.'"

$lang['AdminSystemGeneral.!tooltip.maintenance_mode'] = 'When in maintenance mode, only staff users may use the system. All other users will be directed to the login page and shown the Reason for Maintenance.';
$lang['AdminSystemGeneral.!tooltip.maintenance_reason'] = 'This maintenance reason will be displayed to non-staff users that access the system when maintenance mode is enabled.';


// Basic settings
$lang['AdminSystemGeneral.basic.page_title'] = "Einstellungen > System > Allgemein > Grundeinrichtung"; //en: "'Settings > System > General > Basic Setup'"
$lang['AdminSystemGeneral.basic.boxtitle_basic'] = "Grundeinstellung"; //en: "'Basic Setup'"
$lang['AdminSystemGeneral.basic.field.root_web_dir'] = 'Root Web Directory';
$lang['AdminSystemGeneral.basic.field.temp_dir'] = "Temp-Verzeichnis"; //en: "'Temp Directory'"
$lang['AdminSystemGeneral.basic.field.uploads_dir'] = 'Uploads Directory';
$lang['AdminSystemGeneral.basic.field.log_dir'] = 'Log Directory';
$lang['AdminSystemGeneral.basic.field.log_days'] = 'Rotation Policy';
$lang['AdminSystemGeneral.basic.field.behind_proxy'] = 'My installation is behind a proxy or load balancer';
$lang['AdminSystemGeneral.basic.field.basicsubmit'] = 'Update Settings';

$lang['AdminSystemGeneral.basic.text_docroot'] = 'Expecting "%1$s"'; // %1$s is the absolute path to the document root directory
$lang['AdminSystemGeneral.basic.text_writable'] = "beschreibbar"; //en: "'Writable'"
$lang['AdminSystemGeneral.basic.text_unwritable'] = "Schreibgeschuetzt"; //en: "'Not Writable'"
$lang['AdminSystemGeneral.basic.text_no_log'] = "Führe keinen Logrotate aus"; //en: "'Never rotate Log'"
$lang['AdminSystemGeneral.basic.text_day'] = "Tag"; //en: "'Day'"
$lang['AdminSystemGeneral.basic.text_days'] = "Tage"; //en: "'Days'"


// GeoIP settings
$lang['AdminSystemGeneral.geoip.page_title'] = "Einstellungen&gt; System&gt; Allgemein&gt; GeoIP-Einstellungen"; //en: "'Settings > System > General > GeoIP Settings'"
$lang['AdminSystemGeneral.geoip.boxtitle_geoip'] = "GeoIP"; //en: "'GeoIP'"

$lang['AdminSystemGeneral.geoip.text_setup'] = "GeoIP kann hier aktiviert werden, so dass GeoIP-Ortungsdienste für Blesta verfügbar sind. Wenn Sie diese Option aktivieren, können bestimmte Funktionen Standortdienste nutzen."; //en: "'GeoIP can be enabled here, giving GeoIP location services functionality to Blesta. Enabling it will allow certain features to take advantage of location services.'"
$lang['AdminSystemGeneral.geoip.text_geolite'] = 'GeoIP requires the GeoLite City binary database, which can be downloaded from your account at <a target="_blank" href="%1$s">%1$s</a>. The file should be unzipped and uploaded to:'; // %1$s is the URL to maxmind
$lang['AdminSystemGeneral.geoip.text_geolite_step_1'] = 'Sign up for a MaxMind account';
$lang['AdminSystemGeneral.geoip.text_geolite_step_2'] = "Verwenden Sie die Willkommens-E-Mail, um Ihr Passwort festzulegen"; //en: "'Use welcome email to set your password'"
$lang['AdminSystemGeneral.geoip.text_geolite_step_3'] = 'Login in to your account';
$lang['AdminSystemGeneral.geoip.text_geolite_step_4'] = 'Under "GeoIP2 / GeoLite2 > Download Files" download the GeoLite2-City binary file';
$lang['AdminSystemGeneral.geoip.text_geolite_step_5'] = 'Upload that file to your Blesta installation at the path noted below';
$lang['AdminSystemGeneral.geoip.text_database_exists'] = "%1\$s existiert."; // %1$s is a file system path to the GeoIP database file"; //en: "'%1$s exists.'; // %1$s is a file system path to the GeoIP database file"
$lang['AdminSystemGeneral.geoip.text_database_not_exists'] = "%1\$s existiert nicht."; // %1$s is a file system path to the GeoIP database file"; //en: "'%1$s does not exist.'; // %1$s is a file system path to the GeoIP database file"

$lang['AdminSystemGeneral.geoip.field_geoip_enabled'] = "Aktiviere GeoIP"; //en: "'Enable GeoIP'"
$lang['AdminSystemGeneral.geoip.field_geoipsubmit'] = "Einstellungen aktualisieren"; //en: "'Update Settings'"


// Maintenance Settings
$lang['AdminSystemGeneral.maintenance.page_title'] = "Einstellungen > System > Allgemein > Wartung"; //en: "'Settings > System > General > Maintenance'"
$lang['AdminSystemGeneral.maintenance.boxtitle_maintenance'] = "Instandhaltung"; //en: "'Maintenance'"

$lang['AdminSystemGeneral.maintenance.field.maintenance_mode'] = 'Enable Maintenance Mode';
$lang['AdminSystemGeneral.maintenance.field.maintenance_reason'] = "Grund für die Wartung"; //en: "'Reason for Maintenance'"
$lang['AdminSystemGeneral.maintenance.field.maintenancesubmit'] = 'Update Settings';


// License Key Settings
$lang['AdminSystemGeneral.license.page_title'] = "Einstellungen > System > Allgemein > Lizenzkey"; //en: "'Settings > System > General > License Key'"
$lang['AdminSystemGeneral.license.boxtitle_license'] = "Lizenzschlüssel"; //en: "'License Key'"

$lang['AdminSystemGeneral.license.field.license_key'] = 'License Key';
$lang['AdminSystemGeneral.license.field.licensesubmit'] = 'Update Settings';


// Payment Types
$lang['AdminSystemGeneral.paymenttypes.page_title'] = "Einstellungen > System > Allgemein > Zahlungsarten"; //en: "'Settings > System > General > Payment Types'"
$lang['AdminSystemGeneral.paymenttypes.categorylink_addtype'] = "Zahlungsart erstellen"; //en: "'Create Payment Type'"
$lang['AdminSystemGeneral.paymenttypes.boxtitle_types'] = "Zahlarten"; //en: "'Payment Types'"

$lang['AdminSystemGeneral.paymenttypes.heading_name'] = "Name"; //en: "'Name'"
$lang['AdminSystemGeneral.paymenttypes.heading_type'] = "Art"; //en: "'Type'"
$lang['AdminSystemGeneral.paymenttypes.heading_is_lang'] = "Verwendet Sprachdefinition"; //en: "'Uses Language Definition'"
$lang['AdminSystemGeneral.paymenttypes.heading_options'] = "Optionen"; //en: "'Options'"

$lang['AdminSystemGeneral.paymenttypes.option_edit'] = "Bearbeiten"; //en: "'Edit'"
$lang['AdminSystemGeneral.paymenttypes.option_delete'] = "Löschen"; //en: "'Delete'"

$lang['AdminSystemGeneral.paymenttypes.modal_delete'] = "Durch das Löschen dieser Zahlungsart werden alle Transaktionen, die diese Zahlungsart verwenden, auf \"Sonstige\" gesetzt. Möchten Sie diese Zahlungsart wirklich löschen?"; //en: "'Deleting this payment type will cause all transactions that use this payment type to be set to "other". Are you sure you want to delete this payment type?'"

$lang['AdminSystemGeneral.paymenttypes.text_yes'] = "Ja"; //en: "'Yes'"
$lang['AdminSystemGeneral.paymenttypes.text_no'] = "Nein"; //en: "'No'"

$lang['AdminSystemGeneral.paymenttypes.no_results'] = "Es gibt keine Zahlungsarten."; //en: "'There are no payment types.'"

$lang['AdminSystemGeneral.!paymenttypes.is_lang'] = "Aktivieren Sie dieses Kontrollkästchen nur, wenn Sie in der benutzerdefinierten Sprachdatei eine Sprachdefinition für diesen Zahlungstyp hinzugefügt haben."; //en: "'Only check this box if you have added a language definition for this payment type in the custom language file.'"
$lang['AdminSystemGeneral.!paymenttypes.type'] = "Bei der Belastung werden Transaktionen, die diesen Zahlungstyp verwenden, als einkommensbasiert angesehen, während Kredite nicht einkommensbasiert sind."; //en: "'When set to debit, transactions using this payment type are considered income-based while credit is non-income-based.'"


// Add payment type
$lang['AdminSystemGeneral.addtype.page_title'] = "Einstellungen -> System -> Allgemein -> Zahlungsmittel erstellen"; //en: "'Settings > System > General > Create Payment Type'"
$lang['AdminSystemGeneral.addtype.boxtitle_addtype'] = "Zahlungsart erstellen"; //en: "'Create Payment Type'"

$lang['AdminSystemGeneral.addtype.field_name'] = "Name"; //en: "'Name'"
$lang['AdminSystemGeneral.addtype.field_type'] = "Typ"; //en: "'Type'"
$lang['AdminSystemGeneral.addtype.field_is_lang'] = "Verwende Sprachdefinition"; //en: "'Use Language Definition'"

$lang['AdminSystemGeneral.addtype.field_typesubmit'] = "Zahlungsart erstellen"; //en: "'Create Payment Type'"


// Edit payment type
$lang['AdminSystemGeneral.edittype.page_title'] = "Einstellungen -> System -> Allgemein -> Zahlungstyp bearbeiten"; //en: "'Settings > System > General > Edit Payment Type'"
$lang['AdminSystemGeneral.edittype.boxtitle_edittype'] = "Zahlungsart bearbeiten"; //en: "'Edit Payment Type'"

$lang['AdminSystemGeneral.edittype.field_name'] = "Name"; //en: "'Name'"
$lang['AdminSystemGeneral.edittype.field_type'] = "Art"; //en: "'Type'"
$lang['AdminSystemGeneral.edittype.field_is_lang'] = "Benutze Sprachdefinition"; //en: "'Use Language Definition'"

$lang['AdminSystemGeneral.edittype.field_typesubmit'] = "Zahlungsart bearbeiten"; //en: "'Edit Payment Type'"
